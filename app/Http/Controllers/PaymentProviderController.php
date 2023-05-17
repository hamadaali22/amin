<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use DB;
use Crypt;
use App\Story;
use App\Category;   
use Hash;
use Session;
use Auth;
use App\Subscription;
use DateTime;
use Carbon\Carbon;
use App\Country;
use App\Transaction;
use App\Instructor;
use App\Course;
use App\ContactInfo;
use App\Certificate;
use App\Wallet;
use App\Consulting;
use App\Straight;
use App\Courses_joined;
use App\Tutorial;
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
    

    
    
    public function getCheckOutIdCertificate($typeCourse,$id,Request $request)
    {
        // return redirect('/'); 
        // dd($typeCourse);
        // create ,renew , courseCertificate, liveCertificate 
        $contactInfo=ContactInfo::first();
        
        $user = Auth::guard('instructors')->user();  
        if(!$user)
            return redirect('login/user'); 
        $number = rand(100,100000);
        $t=time();
        $random = $number.''.$t;
        $merchantTransactionId=$random.'444';
        if($typeCourse=="course-certificate"){
            // شراء شهادة دورة مسجلة 
            $course=Course::where('id',$id)->first();
            $price= $contactInfo->certificate_price;
            Session::put('payCreateOrCertificateOrRenew','courseCertificate');
        }elseif($typeCourse=="live-certificate"){
            // شراء شهادة دورة تفاعلية
            $course=Straight::where('id',$id)->first(); 
            $price= $contactInfo->live_certificate;
            Session::put('payCreateOrCertificateOrRenew','liveCertificate');
        }elseif($typeCourse=="consultings"){
            $course=Consulting::where('id',$id)->first();
             $price= $course->price;
            Session::put('payCreateOrCertificateOrRenew','consultings');
        }elseif($typeCourse=="signin-tutorial"){
            // التسجيل دورة تفاعلية
            $course=Tutorial::where('id',$id)->first();    
            $price= $course->price;
            Session::put('payCreateOrCertificateOrRenew','tutorials');
        }else{
            // التسجيل دورة تفاعلية
            $course=Straight::where('id',$id)->first();    
            $price= $course->price;
            Session::put('payCreateOrCertificateOrRenew','signinLive');
        }
        
        Session::put('courseId', $course->id);
        $user = Auth::guard('instructors')->user(); 
        if($user){
            $country = Country::where("id" , $user->countryId)->first();
           
            
            $url = "https://eu-prod.oppwa.com/v1/checkouts";
            $data = "entityId=8acda4c782aad9470182e30dfec203f9" .
                        "&amount=". $price .
                        "&currency=USD" .
                        "&paymentType=DB".
                        "&merchantTransactionId=". $merchantTransactionId .
                        "&customer.email=". $user->email .
                        "&billing.street1=". $user->street1 .
                        "&billing.city=". $user->city .
                        "&billing.state=". $user->state .
                        "&billing.country=". $country->iso .
                        "&billing.postcode=". $user->postal_code .
                        "&customer.givenName=". $user->first_name .
                        "&customer.surname=". $user->last_name;

        }
            
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
           
            return view('front.payment',compact('res'));
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
