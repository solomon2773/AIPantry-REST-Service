<?php
/**
 * * www.aipantry.com
 * Created by Solomon Tsao.
 * Date: 01/02/15
* V1.1.0
 * admin@aipantry.com
 */
/* Your API Key set, you can get it from your user account page. ///http://www.aipantry.com/user/user_keyset/0/
* You can set Permissions for each API key set and/or lock it to a specific server IP. All setting cat be done under your user_account=>API_key_set page.
*/
$api_id = '42Jeb42JebGSwx3mE047d';
$api_key = '4f991db8c901763344262c6a8ff477a9f598399f0cf152888755967c5d7e4cfabf16e8ac0a632ec0237e9f50f4ca2ac4552cafe4922426a6dc812a8a61401f23';


$columnsArray = array(  "select_all_columns" => 'NO', //// YES ////NO////default will be YES
                        "column_name_set" => array('col2','col3'), ///Column name to be select//// This parameter will not  be used if  "select_all_columns" => 'YES' ///////
                        "group" => '', ///// you can group up your output data using a specific column name.
                        "condition" => '|col2|=|werdsadsdsdsadfsadf|_*_OR_*_|col2|=|wadsdsdsadfsadf|_*_OR_*_|col1|=|wadsdsdsadfsadf|',  //////SQL like syntax. single quotes , double quotes, and semicolons are not allowed.
                                            ///// Format :  |column_name|operators|values|_*_AND and OR Conjunctive Operators_*_|column_name|operators|values|  ///
                                           ////////example : |col1|=|1| and |col2|=|5|      //////////
                        "order_by" => '', ////order by specific column. /// default will be order by "id" column///
                        "asc_desc" => 'DESC', ////ASC///DESC/// default will be    DESC///
                        "limit" => '|0|20|');  ///Limit returing rows. ////////Format : /from_row_number/to_row_number/  ////// example : |0|20| /////This will return rows from row 0 to row 20.
///////////// select columns  array ////////////
$select_data_array["timestamp"] = time();
$select_data_array["table_name"] = 'testing_table_u';  //// You table name.
$select_data_array["columns_json_query"] = $columnsArray;
$json_encode_query = urlencode(json_encode($select_data_array));
//// Get Select Columns Response/////////
$response = file_get_contents('https://dev.aipantry.com/api/select_columns/'.$json_encode_query.'/'.$api_id.'/'.$api_key.'/');

$response_decode = json_decode($response);
echo '<pre>';
echo 'This is a sample json response : <br/>';
echo $response;
echo '<br/>Print out result as an array : <br/>';
print_r($response_decode);

echo '</pre>';







