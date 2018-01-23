<?php
/**
 * Created by PhpStorm.
 * User: Jose Barrios
 * Date: 2018/01/23
 * Time: 10:34 AM
 */

require_once('ontraport/Ontraport.php');
require_once('ontraport/ObjectType.php');


$client = new OntraportAPI\Ontraport("2_166816_DCq2c7xUg","URyco5AT8E799Bu");

$requestParams = array(
    "contactId" => 60
);
$response = $client->contact()->retrieveSingle($requestParams);

echo '<pre>';
print_r($response);
echo '<pre>';