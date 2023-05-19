<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Crypt;

use Hash;
use Session;
use Auth;

use DateTime;
use Carbon\Carbon;

class PaymentProviderController extends Controller
{
    public $module_view_folder;
    public function __construct()
    {
        $this->module_view_folder = 'website.result';
    }
    
    public function checkout()
    {
        $mytime = Carbon::now('egypt');
        $todayDate = $mytime->toDateString();
        $time = new DateTime();
        $time->modify('+3 hours');
        $timenow=$time->format("h:i");
       
        
        if (request('id') && request('resourcePath')) {
            $payment_status = $this->getPaymentStatus(request('id'), request('resourcePath'));
            // dd($payment_status['result']['code']);
            // dd($payment_status['id']);
            if(isset($payment_status['id'])) { //success payment id -> transaction bank id
                $showSuccessPaymentMessage = true;

                return view($this->module_view_folder)-> with(['success' =>  'تم الاشتراك بنجاح يمكنك الان تسجيل الدخول ومشاهدة جميع الدورات']);
                
            }else{
                $showFailPaymentMessage = true;
                 return view($this->module_view_folder )-> with(['fail'  => 'فشلت عملية الدفع']);
            }
        }


        return view($this->module_view_folder );

        // return view('front.checkout');
    }
    

    public function getCheckOutId(Request $request)
    {
        $number = rand(100,100000);
        $t=time();
        $random = $number.''.$t;
        $merchantTransactionId=$random.'444';
        
           
        
            
           
        $price=44;    
            $url = "https://eu-prod.oppwa.com/v1/checkouts";
            $data = "entityId=8acda4c782aad9470182e30dfec203f9" .
                        "&amount=". $price .
                        "&currency=USD" .
                        "&paymentType=DB".
                        "&merchantTransactionId=". $merchantTransactionId .
                        "&customer.email=". 'hamada@gmail.com' .
                        "&billing.street1=". 'cairo' .
                        "&billing.city=".'cairo' .
                        "&billing.state=". 'cairo' .
                        "&billing.country=". 'EG' .
                        "&billing.postcode=". '123456' .
                        "&customer.givenName=". 'hamada' .
                        "&customer.surname=". 'ali;' ;
        
           
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                           'Authorization:Bearer OGFjZGE0Y2E4MjYyYWY0NDAxODJlMzBjYTU1NzFjZGJ8Sm03Nlg0aHhiRQ=='));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if(curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            $res = json_decode($responseData, true); 
            // return $res;
            return view('website.pay',compact('res'));
          
    }
    

    
    private function getPaymentStatus($id, $resourcepath)
    {
        $url = "https://eu-prod.oppwa.com/";
        $url .= $resourcepath;
        $url .= "?entityId=8acda4c782aad9470182e30dfec203f9";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGFjZGE0Y2E4MjYyYWY0NDAxODJlMzBjYTU1NzFjZGJ8Sm03Nlg0aHhiRQ=='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        // return $responseData;
        return json_decode($responseData, true); 

    }










    public function getCheckoutSdad(Request $request)
    {
        return view('website.pay_sadad');
          
    }
    
    
}
