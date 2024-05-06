<?php

function redirectToHome():void
{
    header('Location: sheets.php');
    exit();
}

ob_start();
if(false===isset($_POST['email'],$_POST['category'],$_POST['name'],$_POST['description']))
{
    redirectToHome();
}
$category = $_POST['category'];
$name = $_POST['name'];
$desc = $_POST['description'];
$email = $_POST['email'];

require '../vendor/autoload.php';
$client = new \Google_Client();
$client->setApplicationName('weblab4');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
try
{
    $client->setAuthConfig( '../credentials.json');
}
catch (\Google\Exception $e)
{
    echo "ERROR!\n";
}
$service = new Google_Service_Sheets($client);
$sheetID = "19A8ccVHzC4npn_rW6H6wFMu_QN01HJJ8VZVNXxvItp0";

$range = "Sheet1";
$values = [[$category, $name, $email, $desc],];
$body = new Google_Service_Sheets_ValueRange(['values' => $values]);
$row = sizeof(($service->spreadsheets_values->get($sheetID, $range))->getValues()) + 1;
$params = ['valueInputOption'=>'RAW'];
try
{
    $service->spreadsheets_values->update($sheetID, 'Sheet1!A'.($row), $body, $params);
}
catch (\Google\Service\Exception $e)
{
    echo "ERROR!\n";
}
redirectToHome();