<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Exceptions\BadResponse;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WaController extends Controller
{
    public function sendText(Request $request)
    {
        $token = env("API_KEY_WA");
        $phone = "6281514745954";
        $message = "test get";

        $client = new Client();
        $response = $client->get("https://jogja.wablas.com/api/send-message?phone=$phone&message=$message&token=$token");

        $res = json_decode($response->getBody());

        dd($res);

    }
}
