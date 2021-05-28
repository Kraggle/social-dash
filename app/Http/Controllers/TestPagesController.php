<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use GuzzleHttp\Client;
// use GuzzleHttp\Psr7\Request;

class TestPagesController extends Controller {
    /**
     * Display the likes page
     *
     * @return \Illuminate\View\View
     */
    public function auth(ServerRequestInterface $request) {
        $params = $request->getQueryParams();

        if (key_exists('code', $params)) {
            // After the authorize with Instagram button is clicked, it is redirected
            // here and this will get an access token and save it to the server database.
            $url = 'https://api.instagram.com/oauth/access_token';
            $data = query_params([
                'client_id' => 476627210291548,
                'client_secret' => '4225c8494e335b2b1628fad0dd0332c7',
                'grant_type' => 'authorization',
                'redirect_url' => 'https://dashboard.shadow-social.com/auth',
                'code' => substr($params['code'], 0, -2)
            ]);

            $client = new Client();
            $response = $client->request('GET', "$url?$data");

            echo $response->getStatusCode(); // 200
            echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
            echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

            // Send an asynchronous request.
            // $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
            // $promise = $client->sendAsync($request)->then(function ($response) {
            //     echo 'I completed! ' . $response->getBody();
            // });

            // $promise->wait();


            // $result = json_decode(file_get_contents("$url?$data"), true);

            // $ch = curl_init($url);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            //     'client_id' => 476627210291548,
            //     'client_secret' => '4225c8494e335b2b1628fad0dd0332c7',
            //     'grant_type' => 'authorization',
            //     'redirect_url' => 'https://dashboard.shadow-social.com/auth',
            //     'code' => substr($params['code'], 0, -2)
            // ]));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


            // $result = curl_exec($ch);
            // curl_close($ch);

            // error_log(json_encode($result));

            // if ($result) {
            //     $result['action'] = 'addAccessToken';

            //     $ch = curl_init($_ENV['SERVER_URL']);
            //     curl_setopt($ch, CURLOPT_HEADER, false);
            //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //     curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
            //     curl_setopt($ch, CURLOPT_POST, true);
            //     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($result));
            //     curl_exec($ch);
            //     curl_close($ch);

            //     // TODO:: Check response and see if they used the correct account.
            //     // TODO:: If the account was different, ask if they want to add it.
            // }
        }

        return view('test.auth', $params);
    }
}

/**
 * Build a query string from key value pairs.
 *
 * @param array|object $array The assoc array or object.
 * @param string       $sep   The separator.
 * @return string The query string.
 */
function query_params($array, $sep = '&') {
    $temp = [];
    foreach ($array as $key => $value)
        if ($value) $temp[] = "$key=$value";
    return implode($sep, $temp);
}
