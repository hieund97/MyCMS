<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attr_Order;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Cart;
use Illuminate\Support\Carbon;
use App\Models\Email_Template;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class OrderController extends Controller
{

    public function storeOrder(Request $request)
    {

        $this->validate(
            $request,
            [
                'email' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'ship' => 'required',
                'pay' => 'required',

            ],
            [
                'email.require'     => 'Email không được để trống',
                'name.require'      => 'Tên không được để trống',
                'phone.require'     => 'Số điện thoại không được để trống',
                'address.require'   => 'Địa chỉ không được để trống',
                'ship.require'      => 'Bạn chưa chọn đơn vị vẫn chuyển',
                'pay.require'       => 'Bạn chưa chọn phương thức thanh toán',
            ]
        );

        $detail_order = [];

        if (Auth::check()) {
            $order = Order::create([
                'order_code' => rand(),
                'note' => $request->note,
                'quantity' => $request->quantity,
                'total_price' =>$request->total_price,
                'pay_id' => $request->pay,
                'ship_id' => $request->shiphidden,
                'address' => $request->address,
                'user_id' => $request->user_id,
                'day_created' => Carbon::now()->format('Y-m-d'),
                'surrogate_name' => $request->name,

            ]);
            $order->save();
            foreach (Cart::content() as $key => $product) {
                $detail_order[] = [
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'product_id' => $product->id
                ];
                $attr = Attr_Order::create([
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'order_id' => $order->id,
                    'product_id' => $product->id
                ]);
                Cart::remove($product->rowId);
            }
        } else {
            $guest = Guest::create([
                'client_name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
            ]);
            $guest->save();

            $order = Order::create([
                'order_code' => rand(),
                'quantity' => $request->quantity,
                'total_price' =>$request->total_price,
                'note' => $request->note,
                'pay_id' => $request->pay,
                'ship_id' => $request->shiphidden,
                'address' => $request->address,
                'day_created' => Carbon::now()->format('Y-m-d'),
                'guest_id' => $guest->id,
                'surrogate_name' => $request->name,

            ]);
            $order->save();
            foreach (Cart::content() as $key => $product) {
                $detail_order[] = [
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'product_id' => $product->id
                ];
                $attr = Attr_Order::create([
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'order_id' => $order->id,
                    'product_id' => $product->id
                ]);
                Cart::remove($product->rowId);
            }
        }


        $data = [];
        $data['order'] = [
            'email' => $request->email,
            'name' => $request->name,
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => Carbon::now()->format('H:i:s'),
            'total_money' => $order->total_price,
        ];
        $this->sendMailOrder('store_order', $data, $detail_order);
        return redirect('/gio-hang/hoan-thanh/' . $order->order_code);
    }

    private function sendMailOrder($action, $data = [], $detail_order = [])
    {
        $detail_product = '';
        foreach ($detail_order as $key => $value) {
            $detail_product .= 'Tên sản phẩm: ' . getInfoProduct($value['product_id'])->name . ' - Màu sắc: ' . $value['color'] . ' - Kích cỡ: ' . $value['size'] . ' - Giá: ' . number_format($value['price']). 'đ<br>';
        }
        $template = Email_Template::where('category', $action)->first();
        $body = $template->template;
        $body = str_replace('[NAME]', $data['order']['name'], $body);
        $body = str_replace('[DATE]', $data['order']['date'], $body);
        $body = str_replace('[TIME]', $data['order']['time'], $body);
        $body = str_replace('[PRODUCT]', $detail_product, $body);
        $body = str_replace('[TOTAL_MONEY]', number_format($data['order']['total_money']). 'đ', $body);


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
            $mail->setFrom('duchieu97.hn@gmail.com', '360 BOUTIQUE');
            $mail->addAddress($data['order']['email']);     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = mb_convert_encoding($template->subject, "UTF-8", "auto");
            $mail->Body    = $body;
            $mail->CharSet = 'UTF-8';


            $mail->send();
        } catch (Exception $e) {
            return response()->json(['status' => 400, 'message' => $mail->ErrorInfo]);
        }
    }

}
