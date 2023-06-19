<?php
$GameVersion = "1.5";
$hostName    = 'localhost';
$dbName      = 'MyCompanyDB';
$dbUser      = 'root';
$dbPassworld = '';
$secretKey   = "";
$base_url    = 'http://127.0.0.1/MyCompany/';
$emailFrom   = 'example@gmail.com';
$GameName    = "";

function dbConnect()
{
    global $dbName;
    global $secretKey;
    global $hostName;
    global $dbUser;
    global $dbPassworld;
    
    $link = mysqli_connect($hostName, $dbUser, $dbPassworld, $dbName);
    
    if (!$link) {
        fail("Couldn´t connect to database server");
    }
    
    return $link;
}

function TrydbConnect()
{
    global $dbName;
    global $secretKey;
    global $hostName;
    global $dbUser;
    global $dbPassworld;
    
    $link = @mysqli_connect($hostName, $dbUser, $dbPassworld, $dbName) or die("2");
    return $link;
}

function safe($variable)
{
    $variable = addslashes(trim($variable));
    return $variable;
}

function fail($errorMsg)
{
    print $errorMsg;
    exit;
}

?>