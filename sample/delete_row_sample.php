<?php
/**
 * * www.aipantry.com
 * Created by Solomon Tsao.
 * Date: 10/14/14
* V1.0.2
 * admin@aipantry.com
 */
/* Your API Key set, you can get it from your user account page. ///http://www.aipantry.com/user/user_keyset/0/
* You can set Permissions for each API key set and/or lock it to a specific server IP. All setting cat be done under your user_account=>API_key_set page.
*/
$api_id = '42Jeb42JebGSwx3mE047d';
$api_key = '4f991db8c901763344262c6a8ff477a9f598399f0cf152888755967c5d7e4cfabf16e8ac0a632ec0237e9f50f4ca2ac4552cafe4922426a6dc812a8a61401f23';
//The name for your table.
$create_table_name = 'testing_table';
// Let our system knows how many columns you would like to create for this table.
//If you wnat to create two columns named 'col1' and 'col2' , then $how_many_columns_to_be_create will be '2' .
$how_many_columns_to_be_create = '2';
// There will be a default column named 'id' with unique index and auto increment for each table you create. This string will be a sql like syntax.
//Let's create columns 'col1' and 'col2'. You can use regular MySQL, SQL like syntax shown as below.
$columns_sql = urlencode('`col1` int(10) NOT NULL,`col2` char(128) NOT NULL');
//// List ALL TABLEs
$response = file_get_contents('https://dev.aipantry.com/api/create_table/'.$create_table_name.'/'.$how_many_columns_to_be_create.'/'.$columns_sql.'/'.$api_id.'/'.$api_key.'/');
$response_decode = json_decode($response);
echo '<pre>';
echo 'This is a sample json response : <br/>';
echo $response;
echo '<br/>Print out result as an array : <br/>';
print_r($response_decode);
echo '</pre>';







