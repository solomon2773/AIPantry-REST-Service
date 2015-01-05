<?php
/**
 * * www.aipantry.com
 * Created by Solomon Tsao.
 * Date: 01/04/15
* V1.1.0
 * admin@aipantry.com
 */
/* Your API Key set, you can get it from your user account page. ///http://www.aipantry.com/user/user_keyset/0/
* You can set Permissions for each API key set and/or lock it to a specific server IP. All setting cat be done under your user_account=>API_key_set page.
*/
$api_id = '42Jeb42JebGSwx3mE047d';
$api_key = '4f991db8c901763344262c6a8ff477a9f598399f0cf152888755967c5d7e4cfabf16e8ac0a632ec0237e9f50f4ca2ac4552cafe4922426a6dc812a8a61401f23';

// Let our system knows the rows you would like to delete from this table using row id or condition.
$rows_array = array(
                    "delete_all_rows"=>"YES", ////YES or NO/////If "YES" was used, both "row_ids" and  "condition" are not required.//// If "NO" was used, both "row_ids" and  "condition" are  required.////
                    "row_ids"=>array('10','11'), // row ids array
                    "condition" => '|col2|=|werdsadsdsdsadfsadf|_*_OR_*_|col2|=|wadsdsdsadfsadf|_*_OR_*_|col1|=|wadsdsdsadfsadf|',
                    //////SQL like syntax. single quotes , double quotes, and semicolons are not allowed.
                    ///// Format :  |column_name|operators|values|_*_AND and OR Conjunctive Operators_*_|column_name|operators|values|  ///
                    ////////example : |col1|=|1| and |col2|=|5|      //////////
                    );
///////////// delete rows  array ////////////
$delete_rows_data_array["timestamp"] = time();
$delete_rows_data_array["table_name"] = 'testing_table_u';  //// You table name.
$delete_rows_data_array["columns_json_query"] = $rows_array;
$json_encode_query = urlencode(json_encode($delete_rows_data_array));
//// Get  Delete Rows Response/////////
$response = file_get_contents('https://dev.aipantry.com/api/delete_rows/'.$json_encode_query.'/'.$api_id.'/'.$api_key.'/');

$response_decode = json_decode($response);
echo '<pre>';
echo 'This is a sample json response : <br/>';
echo $response;
echo '<br/>Print out result as an array : <br/>';
print_r($response_decode);
echo '</pre>';







