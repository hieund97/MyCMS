<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attr_Order;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Email_Template;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UserController extends Controller
{
    public function detail($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        return view('client.user.detail', compact('user'));
    }

    public function update(Request $request, $slug)
    {
        // $this->validate(
        //     $request,
        //     [                
        //         'username' => 'required | unique:users,user_name'
        //     ],
        //     [
        //         'require' => 'Trường này trống cmnr',
        //     ]
        // );
        $user = User::where('slug', $slug)->firstOrFail();
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
            $user->update([
                'avatar' => asset('media/avatar') . '/' . $avatarName
            ]);
        }
        $user->update([
            'user_name' => $request->username,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'about_me' => $request->aboutme,
            'slug' => str_slug($request->username, '-')

        ]);
        $user->save();
        session()->flash('update_user', 'success');
        return redirect('/thanh-vien/' . $user->slug);
    }

    public function updatepass($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        return view('client.user.updatepass', compact('user'));
    }

    public function changepass(Request $request, $slug)
    {
        $this->validate(
            $request,
            [
                'password' => 'min:8|required|required_with:retypepassword|same:retypepassword|same:password',
                'retypepassword' => 'min:8|required'
            ],
            [
                'require' => 'Trường này trống cmnr',
            ]
        );
        $user = User::where('slug', $slug)->firstOrFail();
        $user->update([
            'password' => bcrypt($request->password),
        ]);
        session()->flash('change_pass', 'success');
        return redirect('/thanh-vien/' . $user->slug);
    }

    public function order($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        $orders = Order::where('user_id', $user->id)->paginate(5);
        // dd($orders);
        return view('client.user.order', compact('user', 'orders'));
    }

    public function cancelorder(Request $request, $id)
    {
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);

        $data = [];
        $product_name = getInfoProduct($attr_order->product_id)->name;
        $data['attr_order'] = $attr_order;
        $data['attr_order']['product_name'] = $product_name;
        $data['order'] = [
            'email' => $attr_order->order->user_id ? getInfoUser($attr_order->order->user_id)->email : getInfoGuest($attr_order->order->guest_id)->email,
            'name' => $attr_order->order->user_id ? getInfoUser($attr_order->order->user_id)->last_name . getInfoUser($attr_order->order->user_id)->first_name : getInfoGuest($attr_order->order->guest_id)->client_name,
            'date' => $attr_order->order->day_created,
            'time' => date('H:i', strtotime($attr_order->order->updated_at)),
            'order_code' => $attr_order->order->order_code,
            'total_money' => $attr_order->order->total_price,
        ];

        $this->sendMailOrder('order_fail', $data);
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
                $mail->setFrom('duchieu97.hn@gmail.com', '360 BOUTIQUE');
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

        if($action = 'order_fail'){
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
