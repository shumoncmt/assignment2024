<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{

    public function index(Request $request, $id){
        $name ="Donald Trump";
        $age= "78";

        $data=[
        
            "id" => $id,
            "name"=> $name,
            "age"=> $age
        ];
        return response()->json($data);

        //Cookie set application ->cookie
        $cookie_name = "access_tokan";
        $cookie_value = "123_XYZ";
        $cookie_expiry= time() + 0;
        $cookie_path = "/";
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;
        $cookie_httponly = true;
        $returnCookie = setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);

        return response()->json($returnCookie);



    }
    
}
