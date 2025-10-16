<?php

namespace App\Traits;

use Carbon\Carbon;
use DB;
use App\Models\{User};
use Mail;

trait ApiResponser{
	
    protected function isValidUser($api_token)
    {
        try
        {          
            $user = User::where('api_token',$api_token)->first();
            if($user){
                return $user->id;
            }else{
                return 0;
            }
            
        } catch(\Exception $e) {
            return $e;
        }
    } 
    protected function success($data, $message = null, $code = 200)
    {
        return response()->json(
            [
                'status'=> 'Success', 
                'message' => $message,
                'code' => $code,
                'data' => $data
            ], $code);
    }

    protected function error($message = null, $code,$type=null)
    {
        return response()->json([
            'status'=>'Error',
            'message' => $message,
            'code' => $code,
            'data' => ($type != '') ? json_decode('{}') : json_decode('[]')
        ], $code);
    }
    protected function makeUrlSafe($value)
    {
       return preg_replace('/[^A-Za-z0-9\-_.~]/', '', $value);
    }
}
