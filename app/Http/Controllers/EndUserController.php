<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
class EndUserController extends Controller
{
    public function GetDriverInfo(Request $request)
    {
        session()->forget('DriverInfo');
        $messages = [
            'id_number.required' => 'الرقم التسلسلي مطلوب',
            'id_number.max' => 'رقم الهوية لا يجب ان يتجاوز 10 خانات',
            'id_number.min' => 'رقم الهوية لا يجب ان يقل عن 10 خانات',
            'id_number.numeric' => 'الرقم الهوية لا يمكن ان يحتوي على احرف',
            'start_date.required' => 'يرجى اختيار تاريخ بدء الوثيقة',
            'code.required' => 'رمز التحقق مطلوب',
        ];
        $validator = Validator::make($request->all(), [
            'id_number'           => 'required|numeric',
            'start_date'          => 'required',
            'code'        => 'required',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors(), 401]);
        }

        $videos_sessions = session()->get('DriverInfo');
        if(!$videos_sessions) {
            $driver_nfo =[
                "id_number" => $request->id_number,
                "start_date" => $request->start_date,
                "code" => $request->code,
            ];
            // $driver_nfo['name']="hamada";
            session()->put('DriverInfo', $driver_nfo);
        }

        return response()->json(['success' => 'Form is successfully submitted!']);
    }
    public function GetCarInfo(Request $request)
    {
        
        if ($request['Vehicle_document_type'] == 'الإستمارة') {
            $messages = [
                'customs_serial_number.required' => 'الرقم التسلسلي مطلوب',
                'customs_serial_number.numeric' => 'الرقم التسلسلي لا يمكن ان يحتوي على احرف',
                'customs_serial_number.max' => 'الرقم التسلسلي لا يجب ان يتجاوز 20 خانات',
                'customs_serial_number.min' => 'الرقم التسلسلي لا يجب ان يقل عن 20 خانات',
                'vehicle_value.required'=>'قيمة المركبة مطلوبة',
                'vehicle_value.numeric' => 'يمة المركبة لا يمكن ان يحتوي على أحرف ',
                'use_purpose.required' => 'الغرض من استخدام المركبة مطلوب',
                'production_year.required' => 'سنة الصنع للمركبة مطلوبة',
                'Date_of_Birth.required' => 'يرجى ادخال تاريخ الميلاد',
            ];
            if ($request['Ownership'] == 'false') {
            
                $validator = Validator::make($request->all(), [
                    'customs_serial_number'           => 'required|numeric',
                    'vehicle_value'           => 'required|numeric',
                    'use_purpose'          => 'required',
    
                ], $messages);
            } elseif ($request['Ownership'] == 'true') {
    
              
                $validator = Validator::make($request->all(), [
                    'customs_serial_number'           => 'required|numeric',
                    'vehicle_value'           => 'required|numeric',
                    'use_purpose'          => 'required',
                    'production_year'          => 'required',
                    'Date_of_Birth'          => 'required',
    
                ], $messages);
            }
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors(), 401]);
            }
        }else {
            $messages = [
                'customs_form_number.required' => 'رقم البطاقة الجمركية مطلوب',
                'customs_form_number.max' => 'رقم البطاقة الجمركية لا يجب ان يتجاوز 20 خانات',
                'customs_form_number.min' => 'رقم البطاقة الجمركية لا يجب ان يقل عن 20 خانات',
                'customs_form_number.numeric' => 'الرقم البطاقة الجمركية لا يمكن ان يحتوي على احرف',

                'use_purpose.required' => 'الغرض من استخدام المركبة مطلوب',
                'production_year.required' => 'سنة الصنع للمركبة مطلوبة',
                'Date_of_Birth.required' => 'يرجى ادخال تاريخ الميلاد',
            ];
            
                $validator = Validator::make($request->all(), [
                    'customs_form_number'           => 'required|numeric',
                    'use_purpose'          => 'required',
                    'production_year'          => 'required',
                    'Date_of_Birth'          => 'required',
                ], $messages);
            
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors(), 401]);
            }
        }

        $videos_sessions = session()->get('DriverInfo');
        if($videos_sessions) {
            $videos_sessions['serial_number']= $request->customs_serial_number;
            $videos_sessions['vehicle_value']= $request->vehicle_value;
            $videos_sessions['use_purpose']= $request->use_purpose;
            session()->put('DriverInfo', $videos_sessions);
        }

        return response()->json(['success' => 'Form is successfully submitted!']);
    }

    
    public function sendLink(Request $request)
    {
        $d_sessions = session()->get('DriverInfo');
        // if($d_sessions) {
        //     $d_sessions['company_id']=$request->company_id;
        //     $d_sessions['company_name']=$request->company_name;
        //     $d_sessions['phone']=$request->phone;
        //     session()->put('DriverInfo', $videos_sessions);
        // }
        // return $d_sessions;
        // dd(getType($d_sessions));
        $to_sring=json_encode($d_sessions);
        // dd(getType($to_sring));
        $to_obj = json_decode($to_sring);
        // dd(getType($to_obj));
        $ggf='ll';
        // $path='http://127.0.0.1:8000/send-link-mobile/'.$obj->start_date;
        $path='http://127.0.0.1:8000/purchase_flow/checkout/'.$to_obj->id_number.'/'
                .$to_obj->start_date.'/'
                .$to_obj->code.'/'
                .$to_obj->serial_number.'/'
                .$to_obj->vehicle_value.'/'
                .$to_obj->use_purpose.'/'
                .$request->company_id.'/'
                .$request->company_name.'/'
                .$request->phone;
        return $path;
    }

    public function checkoutFromPc(Request $request)
    {
        // if($videos_sessions){
        //     $videos_sessions['company_id']=$request->company_id;
        //     $videos_sessions['company_name']=$request->company_name;
        //     $videos_sessions['phone']=$request->phone;
        //     session()->put('DriverInfo', $videos_sessions);
        // }
        return view('website.checkout');
    }
    public function checkoutFromMobile($id_number,$start_date,$code,$serial_number,$vehicle_value,$use_purpose,$company_id,$company_name,$phone)
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
            // return view('front.payment',compact('res'));
            
        // dd($company_name);
        // $videos_sessions = session()->get('DriverInfo');
        // if(!$videos_sessions) {
        //     if($videos_sessions){
        //         $videos_sessions['company_id']=$request->company_id;
        //         $videos_sessions['company_name']=$request->company_name;
        //         $videos_sessions['phone']=$request->phone;
        //         session()->put('DriverInfo', $videos_sessions);
        //     }
        //     session()->put('DriverInfo', $driver_nfo);
        // }
        return view('website.checkout',compact('res'));
        
    }
    public function GetCompanyInfo(Request $request)
    {
        $messages = [
            'phone.required' => 'رقم الهاتق مطلوب',
            // 'phone.numeric' => 'ارقم الهاتف لا يمكن ان يحتوي على احرف',
        ];
        $validator = Validator::make($request->all(), [
            'phone'           => 'required|',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors(), 401]);
        }

        $videos_sessions = session()->get('DriverInfo');
        if($videos_sessions) {
            $videos_sessions['company_id']=$request->company_id;
            $videos_sessions['company_name']=$request->company_name;
            $videos_sessions['phone']=$request->phone;
            session()->put('DriverInfo', $videos_sessions);
        }
        return response()->json(['success' => 'Form is successfully submitted!']);
    }
}
