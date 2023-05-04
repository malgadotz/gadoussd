<?php

$sessionId=$_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

if ($text = "")
{
    $response="CON what would you want to check \n";
    $response .="1. My Account No \n";
    $response="2. My Phone Number ";
}
else if($text="1")
{
    $response="CON what account Information you want to check \n";
    $response .="1. Account Number \n";
    $response .="2. Account Balance \n";
}
else if($text="2")
{
    $response="CON your Phone Number is ".$phoneNumber;
}
else if($text="1*1")
{
    $accountnumber="AC123786534 \n";
    $response ="END YourAccount Number is ".$accountNumber;
}
else if($text="1*2")
{
    $balance="TZS 20000 \n";
    $response ="END YourAccount Number is ".$accountNumber;
}

header('Content-type; text/plain');
echo $response;
