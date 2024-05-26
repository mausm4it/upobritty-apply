<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    public function index(){
        return view('admin.sms.index');
    }
    
    
    
    public function sendSms(Request $request)
   {
        $client = new Client();
        $response = $client->post('http://sms.insafhost.com/api/v2/SendSMS', [
            'json' => [
                'SenderId' => '8809617611899',
                'ApiKey' => 'mPHNEo5pvdzYOfj7cyLJczoNyrSMZB4g0DGuAzBExOo=',
                'ClientId' => '37574055-f638-4736-87af-c995ad7200ff',
                'Message' => 'Hello Bangladesh',
                'MobileNumbers' => '8801789808879,1567995604'
            ]
        ]);

        // Check if the response is successful
        if ($response->getStatusCode() == 200) {
            $responseData = json_decode($response->getBody(), true);
            return response()->json($responseData);
        } else {
            return response()->json(['error' => 'Failed to send SMS'], $response->getStatusCode());
        }
    }
}