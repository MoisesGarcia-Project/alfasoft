<?php
namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

trait ContactRequest {
   

    public function ContactRequest(Request $request){

        $data = $request->all();

        $rules = array(
            'name'                => 'bail|required|string|min:5',
            'contact'             => 'bail|required|numeric|digits:9',
            'email'               => 'bail|required|email',
            'address'             => 'bail|required|string',
        );
            

        $messages = [
            'name.required'                => 'The input field name is required',
            'contact.required'             => 'The input field contact is required',
            'email.required'               => 'The input field email is required',
            'address.required'             => 'The input field address is required',
           
        ];
        


        $validator = Validator::make($data, $rules, $messages);
        if ($validator->stopOnFirstFailure()->fails()) {
            return [ 'validated' => false, 'message' => $validator->errors()->first() ];
        }

        try{
            return [ 'validated' => true, 'message' => 'successful', 'data' => $request];
        }
        catch(\Exception $e) {
            return [ 'validated' => false, 'message' => $e->getMessage() ];
        }
    }

}
