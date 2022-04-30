<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RazorpayPaymentController extends Controller
{
    private $razorpayId = "rzp_test_3sghHJiMksxWx8";
    private $razorpayKey = "bTujh2toSE1PUnR52XozMGBz";
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($id)
    {
        $career = DB::table('careers')->where('id', decrypt($id))->first();


        $api = new Api($this->razorpayId, $this->razorpayKey);
        $order = $api->order->create(array(
            'receipt' => $career->booking_id,
            'amount' => "50000",
            'currency' => 'INR'
            )
        );
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $order['amount'],
        ];

    $careers = DB::table('careers')->where('id', decrypt($id))->update(['orderidrazor'=> $response['orderId']]);



        return view('razorpayView', compact('career','response'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // $api = new Api($this->razorpayId, $this->razorpayKey);
        // $attributes  = array('razorpay_signature'  => $request->razorpay_signature,  'razorpay_payment_id'  => $request->razorpay_payment_id ,  'razorpay_order_id' => $request->razorpay_order_id);
        // $order  = $api->utility->verifyPaymentSignature($attributes);
        // dd($order);
        // $generated_signature = hmac_sha256($request->razorpay_order_id + "|" + $request->razorpay_payment_id, $this->razorpayKey);
        // if ($generated_signature == razorpay_signature) {
        //     return "payment is successful";
        // }
                $input = $request->all();
                $career = DB::table('careers')->where('orderidrazor',$input['razorpay_order_id'])
                ->update(['paymentidrazor'=> $input['razorpay_payment_id'],'paymentstatus'=>true] );
                $careercenterid = DB::table('careers')->where('orderidrazor',$input['razorpay_order_id'])->pluck('interview_destination');

                $center = DB::table('centers')->whereIn('name',$careercenterid)->get()->first();

                $career = DB::table('careers')->where('orderidrazor',$input['razorpay_order_id'])->first();

                if($career->paymentstatus = true){
                   DB::table('careers')->where('orderidrazor',$input['razorpay_order_id'])
                    ->update(['status'=>1] );


                    $slots = DB::table('slots')->where('centerid', $center->id)->get();
                    $slotid = 0;
                    $old_seats = 0;
                    foreach($slots as $key => $slot){
                        if($slot->max_seats > $slot->seats){
                            $slotid = $slot->id;
                            $old_seats = ++$slot->seats;
                            break;
                        }
                    }
                    $slot = DB::table('slots')->where('id', $slotid)->update(['seats' =>$old_seats]);
                }


                $details = [
                    'title' => 'Mail from taruntest@gmail.com',
                    'body1' =>'Dear '.$career->name.',',
                    'body2' => 'Your seats has been confirmed succesfully for the post of '.$career->apply_for.'',
                    'body3' => 'Your Application id is :  '.$career->booking_id.'',
                    'body4' => 'Your slot date and time for the interview is'.$career->slotdate.' & '.$career->slottiming.'',
                    'body5' => 'Your interview location is :'.$center->location.' ,'.$center->name.'',
                    'body6' => 'Your razorpay orderid is:'.$career->orderidrazor.'',
                    'body7' => 'Your razorpay payment id id :  '.$career->paymentidrazor.'',
                ];
            Mail::to($career->email)->send(new \App\Mail\MyTestMail($details));

            return redirect()->route('payment.success')->with('success','Your Application Payment is accepted and a mail is sent to you regarding your information');

        }




}
