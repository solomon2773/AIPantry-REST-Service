<?php
/**
 * * www.aipantry.com
 * Created by Solomon Tsao.
 * Date: 10/23/14
* V1.1.0
 * admin@aipantry.com
 */
/* Your API Key set, you can get it from your user account page. ///http://www.aipantry.com/user/user_keyset/0/
* You can set Permissions for each API key set and/or lock it to a specific server IP. All setting cat be done under your user_account=>API_key_set page.
*/
$api_id = '42Jeb42JebGSwx3mE047d';
$api_key = '4f991db8c901763344262c6a8ff477a9f598399f0cf152888755967c5d7e4cfabf16e8ac0a632ec0237e9f50f4ca2ac4552cafe4922426a6dc812a8a61401f23';
///////////// insert data set array ////////////
$columnsArray[] = array("column_name_set" => array('col2','col3'), ///Column name
                        "column_data_set" => array('testing data',rand(10,99999)));  ///Your data for above column
$columnsArray[] = array("column_name_set" => array('col2','col3'), ///Column name
                        "column_data_set" => array('werdsadsdsdsadfsadf',rand(10,99999)));  ///Your data for above column
///////////// insert data set array ////////////
$insert_data_array["timestamp"] = time();
$insert_data_array["table_name"] = 'testing_table_u';  //// You table name.
$insert_data_array["columns_json_query"] = $columnsArray;
$json_encode_query = urlencode(json_encode($insert_data_array));

$response = file_get_contents('https://dev.aipantry.com/api/insert/'.$json_encode_query.'/'.$api_id.'/'.$api_key.'/');
$response_decode = json_decode($response);
echo '<pre>';
echo 'This is a sample json response : <br/>';
echo $response;
echo '<br/>Print out result as an array : <br/>';
print_r($response_decode);
echo '</pre>';







