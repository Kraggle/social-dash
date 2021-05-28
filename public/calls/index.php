<?php

/**
 * This is a file that contains callbacks  for any purpose.
 *
 * @author Kraggle
 */

require __DIR__ . '/../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

if (!key_exists('action', $_REQUEST)) {
    echo json_encode([
        'success' => false,
        'message' => 'There was no action specified!'
    ]);
    exit;
}

$function = $_REQUEST['action'];
if (!function_exists($function)) {
    echo json_encode([
        'success' => false,
        'message' => 'That action was not valid!'
    ]);
    exit;
}

$function();

function igAccountExists() {

    $ch = curl_init(env('SERVER_URL'));
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_REQUEST));
    $res = curl_exec($ch);
    curl_close($ch);

    if (!$res) {
        echo json_encode([
            'success' => false,
            'message' => 'There was a problem with that request!'
        ]);
        return;
    }

    echo $res;
}
