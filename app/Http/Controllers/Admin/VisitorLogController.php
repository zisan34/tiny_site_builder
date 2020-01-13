<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\VisitorLog;
class VisitorLogController extends Controller
{
    //
    function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }
    public function store(Request $request)
    {

    	//id  visitor_ip  request_url  city    region  country  postal  timezone  created_at
    	$visitorlog = new VisitorLog;
    	
    	$public_ip = $this->get_client_ip();
    	$json     = file_get_contents("http://ipinfo.io/$public_ip/geo");
    	$json     = json_decode($json, true);
    	$visitorlog->visitor_ip  = $public_ip;
    	$visitorlog->request_url  = $request->curent_url;
    	$visitorlog->country  = isset($json['country']) ? $json['country'] : '';
    	$visitorlog->region   = isset($json['region']) ? $json['region'] : '';
    	$visitorlog->city     = isset($json['city']) ? $json['city'] : '';
    	$visitorlog->postal     = isset($json['postal']) ? $json['postal'] : '';
    	$visitorlog->timezone     = isset($json['timezone']) ? $json['timezone'] : '';
    	$visitorlog->save();
    }

}
