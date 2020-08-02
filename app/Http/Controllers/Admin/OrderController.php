<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Attr_Order;
use App\Models\Product_back;
use App\Models\Product;
use App\Models\Email_Template;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class OrderController extends Controller
{
    public function index(Request $request){
        if (isset($request->from_date) && isset($request->to_date)) {
            $from_date = $request->from_date;
            $to_date = $request->to_date;
            $order = Order::whereBetween('day_created', [$from_date, $to_date])->get();
        }
        else{
            $order = Order::latest()->get();
        }
        return view('admin.order.index', compact('order'));
    }


    public function edit($id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        // dd(getVariant($attr_order->color, $attr_order->size, $attr_order->product_id));
        return view('admin.order.edit', compact('attr_order'));

    }

    public function update(Request $request, $id){
        $i = 0;
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);

        $attr_order->save();
        $variant = getVariant($attr_order->color, $attr_order->size, $attr_order->product_id);
        // Nếu cập nhật giao hàng thành công
        if($attr_order->status == 4){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
                'purchase' => $i + 1
            ]);
        }

        // Nếu cập nhật hàng trả về
        if($attr_order->status == 5){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
            ]);

            $product_back = Product_back::create([
                'product_id' => $variant->id,
                'status'     => 0 // 0. Hàng trả về lưu kho, 1. Hàng trả về nhưng đã đưa lại để bán lại
            ]);
        }
        session()->flash('update_order', 'success');
        return redirect('/admin/order');
    }

    public function cancel(Request $request, $id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);
        return response()->json([], 204);
    }

    public function updateStatus(Request $request, $id){
        $attr_order = Attr_Order::find($id);
        $attr_order->update([
            'status' => $request->status
        ]);

        $data = [];
        $product_name = getInfoProduct($attr_order->product_id)->name;
        $data['attr_order'] = $attr_order;
        $data['attr_order']['product_name'] = $product_name;
        $data['order'] = [
            'email' => $attr_order->order->user_id ? getInfoUser($attr_order->order->user_id)->email : getInfoGuest($attr_order->order->guest_id)->email,
            'name' => $attr_order->order->user_id ? getInfoUser($attr_order->order->user_id)->first_name . getInfoUser($attr_order->order->user_id)->last_name : getInfoGuest($attr_order->order->guest_id)->client_name,
            'date' => $attr_order->order->day_created,
            'time' => date('H:i', strtotime($attr_order->order->updated_at)),
            'order_code' => $attr_order->order->order_code,
            'total_money' => $attr_order->order->total_price,
        ];


        $variant = getVariant($attr_order->color, $attr_order->size, $attr_order->product_id);
        // Nếu cập nhật giao hàng thành công
        if($attr_order->status == 4){
            $this->sendMailOrder('order_success', $data);

            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
                'purchase' => $variant->quantity + $attr_order->quantity
            ]);
        }

        // Nếu cập nhật hàng trả về
        if($attr_order->status == 5){
            $this->sendMailOrder($action, $data);

            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
            ]);

            $product_back = Product_back::create([
                'variant_id' => $variant->id,
                'order_id'   => $attr_order->order_id,
                'product_id' => $attr_order->product_id,
                'quantity'   => $attr_order->quantity,
                'status'     => 0 // 0. Hàng trả về lưu kho, 1. Hàng trả về nhưng đã đưa lại để bán lại
            ]);
        }

        return response()->json([], 204);
    }

    private function sendMailOrder($action, $data = []){
        $template = Email_Template::where('category', $action)->first();
        $body = $template->template;
        $body = str_replace('[NAME]', $data['order']['name'], $body);
        $body = str_replace('[ORDER_CODE]', $data['order']['order_code'], $body);
        $body = str_replace('[DATE]', $data['order']['date'], $body);
        $body = str_replace('[TIME]', $data['order']['time'], $body);
        $body = str_replace('[PRODUCT_NAME]', $data['attr_order']['product_name'], $body);
        $body = str_replace('[COLOR]', $data['attr_order']['color'], $body);
        $body = str_replace('[SIZE]', $data['attr_order']['size'], $body);
        $body = str_replace('[TOTAL_MONEY]', number_format($data['order']['total_money']). 'đ', $body);


        if($action = 'order_success'){
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'duchieu97.hn@gmail.com';           // SMTP username
                $mail->Password = 'cokcqekzkxppnpbz';                 // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('duchieu97.hn@gmail.com');
                $mail->addAddress($data['order']['email']);     // Add a recipient

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = mb_convert_encoding('ĐƠN HÀNG ' . $data['order']['order_code'] . ' ' . $template->subject, "UTF-8", "auto");
                $mail->Body    = $body;
                $mail->CharSet = 'UTF-8';


                $mail->send();
            } catch (Exception $e) {
                return response()->json(['status' => 400, 'message' => $mail->ErrorInfo]);
            }
        }
    }

}
