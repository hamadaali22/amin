<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EndUserController extends Controller
{
    public function GetDriverInfo(Request $request)
    {
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
                'use_purpose.required' => 'الغرض من استخدام المركبة مطلوب',
                'production_year.required' => 'سنة الصنع للمركبة مطلوبة',
                'Date_of_Birth.required' => 'يرجى ادخال تاريخ الميلاد',
            ];
            if ($request['Ownership'] == 'false') {
            
                $validator = Validator::make($request->all(), [
                    'customs_serial_number'           => 'required|numeric',
                    'use_purpose'          => 'required',
    
                ], $messages);
            } elseif ($request['Ownership'] == 'true') {
    
              
                $validator = Validator::make($request->all(), [
                    'customs_serial_number'           => 'required|numeric',
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
     
        return response()->json(['success' => 'Form is successfully submitted!']);
    }
}
