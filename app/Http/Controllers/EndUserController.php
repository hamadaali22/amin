<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Carbon\Carbon;
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
                "insurance_type"=>$request->Insurance_type,
                "id_number" => $request->id_number,
                "start_date" => $request->start_date,
                "code" => $request->code,
            ];
            // $driver_nfo['name']="hamada";
            session()->put('DriverInfo', $driver_nfo);
        }

        // $videos_sessions = session()->get('DriverInfo');
        // if($videos_sessions) {
        //     $videos_sessions['id_number']= $request->id_number;
        //     $videos_sessions['start_date']= $request->start_date;
        //     $videos_sessions['code']= $request->code;
        //     session()->put('DriverInfo', $videos_sessions);
        // }

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
        return $request->customs_serial_number;
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
        // dd($to_obj);
        $ggf='ll';
        // $path='http://127.0.0.1:8000/send-link-mobile/'.$obj->start_date;

        


        $path='https://amin-jo.net/mobile?insurance_type='.$to_obj->insurance_type.
                                                        '&id_number='.$to_obj->id_number.
                                                        '&start_date='.$to_obj->start_date.
                                                        '&code='.$to_obj->code.
                                                        '&serial_number='.$to_obj->serial_number.
                                                        '&vehicle_value='.$to_obj->vehicle_value.
                                                        '&use_purpose='.$to_obj->use_purpose.
                                                        '&company_id='.$request->company_id.
                                                        '&company_name='.$request->company_name.
                                                        '&phone='.$request->phone;

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
        $mytime = Carbon::now('egypt');
        $todayDate = $mytime->toDateString();
        $d_sessions = session()->get('DriverInfo');
        $to_sring=json_encode($d_sessions);
        $sessions_insurance = json_decode($to_sring);
        return view('website.checkout',compact('sessions_insurance','todayDate'));
    }
    public function checkoutFromMobile(Request $request)
    {
        $insurance_type=$request->query('insurance_type');
        $id_number=$request->query('id_number');
        $insurance_type=$request->query('insurance_type');
        $vehicle_value=$request->query('vehicle_value');
        return $vehicle_value;
    }
   
    public function GetSaveData(Request $request)
    {
        
         if ($request->insurance_type == 'ilzami') {

            $messages = [
                'bank_number.required'=> 'رقم الحساب البنكي',
                'email.required'=> 'البريد الالكتروني مطلوب',
                'mobile.required'=> 'رقم الهاتف مطلوب',
                'pay_type.required'=> 'حدد وسيلة الدفع',
                'agreechb.required'=>'يجب الموافقة علي الشروط',
                
            ];
            $validator = Validator::make($request->all(), [
                'bank_number'=>'required',
                'email'=>'required',
                'mobile'=>'required',
                'pay_type'=>'required',
                'agreechb'=>'required',
                
            ], $messages);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors(), 401]);
            }
        }else{
            $messages = [
                'demo1.required' => 'الصورة الامامية مطلوبة',
                'demo2.required' => 'الصورة الخلفية مطلوبه',
                'demo3.required' => 'الصورة اليمنى مطلوبة',
                'demo4.required' => 'الصورة اليسرى مطلوبة',
                'demo5.required' => 'صورة رقم الهيكل مطلوبة',
                'demo6.required' => 'يجب ارفاق فيديو',
                'declaration.required'=> 'يجب الضغط على الإقرار',
                'bank_number.required'=> 'رقم الحساب البنكي',
                'email.required'=> 'البريد الالكتروني مطلوب',
                'mobile.required'=> 'رقم الهاتف مطلوب',
                'pay_type.required'=> 'حدد وسيلة الدفع',
                'agreechb.required'=>'يجب الموافقة علي الشروط'
            ];
            $validator = Validator::make($request->all(), [
                'demo1'           => 'required',
                'demo1'           => 'required',
                'demo2'          => 'required',
                'demo3'        => 'required',
                'demo4'        => 'required',
                'demo5'        => 'required',
                'demo6'        => 'required',
                'declaration'=>'required',
                'bank_number'=>'required',
                'email'=>'required',
                'mobile'=>'required',
                'pay_type'=>'required',
                'agreechb'=>'required'
            ], $messages);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors(), 401]);
            }
        }


        
        return $request->all();
        return response()->json(['success' => 'Form is successfully submitted!']);
    }
    public function GetCompanyInfo(Request $request)
    {
        $messages = [
            'phone.required' => 'رقم الهاتق مطلوب',
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
