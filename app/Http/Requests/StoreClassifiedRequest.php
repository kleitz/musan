<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreClassifiedRequest extends Request {
    
    /*
    *   Determine if the user is authorized to make this request.
    *
    *   @return boolean
    */
    public function authorize() {
        return true;
    }
    
    
    
    /*
    *   Get the validation rules that apply to the request.
    *
    *   @return array
    */
    
    
    
}