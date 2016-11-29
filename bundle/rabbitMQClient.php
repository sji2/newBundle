#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

if( !isset($argv[1]) )
  exit("Need arguments \n");

$request = array();
$request['type'] = $argv[1];
$request['bundle'] = "BEv";
$request['bundleName'] = $argv[2];

switch($argv[1])
{
//  case "bundleRequest":
//  case "updateBundleVer":
//	$request['bundleName'] = $argv[2];
//	break;

  case "deployBundle":
	//specify which branch to deploy to
	$request['branch'] = $argv[3];
	break;
	
}



/*
$request = array();
$request['type'] = $argv[1];
$request['bundle'] = "BEv";

if(isset($argv[2]))
	$request['machine'] = $argv[2];
*/

$response = $client->send_request($request);
//$response = $client->publish($request);

print_r($response);

