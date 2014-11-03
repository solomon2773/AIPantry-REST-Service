<?php
/**
 * * www.aipantry.com
 * Created by Solomon Tsao.
 * Date: 10/23/14
* V1.1
 * admin@aipantry.com
 */
/* Your API Key set, you can get it from your user account page. ///http://www.aipantry.com/user/user_keyset/0/
* You can set Permissions for each API key set and/or lock it to a specific server IP. All setting cat be done under your user_account=>API_key_set page.
*/
$api_id = '42Jeb42JebGSwx3mE047d';
$api_key = '4f991db8c901763344262c6a8ff477a9f598399f0cf152888755967c5d7e4cfabf16e8ac0a632ec0237e9f50f4ca2ac4552cafe4922426a6dc812a8a61401f23';
/*-----------------------SUPPORT DATA TYPES-----------------------
 | BIT[(length)]
  | TINYINT[(length)] [UNSIGNED] [ZEROFILL]
  | SMALLINT[(length)] [UNSIGNED] [ZEROFILL]
  | MEDIUMINT[(length)] [UNSIGNED] [ZEROFILL]
  | INT[(length)] [UNSIGNED] [ZEROFILL]
  | BIGINT[(length)] [UNSIGNED] [ZEROFILL]
  | REAL[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DOUBLE[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | FLOAT[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DECIMAL[(length[,decimals])] [UNSIGNED] [ZEROFILL]
  | NUMERIC[(length[,decimals])] [UNSIGNED] [ZEROFILL]
  | DATE
  | TIME
  | TIMESTAMP
  | DATETIME
  | YEAR
  | CHAR[(length)]
  | VARCHAR(length)
  | BINARY[(length)]
  | VARBINARY(length)
  | TINYBLOB
  | BLOB
  | MEDIUMBLOB
  | LONGBLOB
  | TINYTEXT [BINARY]
  | TEXT [BINARY]
  | MEDIUMTEXT [BINARY]
  | LONGTEXT [BINARY]
 */
$columnsArray[] = array("column_name" => 'col1',
                       "column_data_type_length" => 'INT(10)',
                       "column_default" => 'NONE',////NULL////CURRENT_TIMESTAMP////USER_DEFINED////NONE
                       "column_default_user_defined_value" => '',////This value is only needed when "column_default" is "USER_DEFINED"
                       "column_index" => 'NONE', ////PRIMARY_KEY////UNIQUE_KEY////INDEX////FULLTEXT////NONE
                       "column_auto_increment" => 'NO',  ///// YES ////NO
                       "column_attributes" => 'NONE',  ////BINARY////UNSIGNED////UNSIGNED_ZEROFILL////ON_UPDATE_CURRENT_TIMESTAMP////NONE
                       "column_comment" => 'column 1');  ///Your comment for this column
$columnsArray[] = array("column_name" => 'col2',
                        "column_data_type_length" => 'VARCHAR(256)',
                        "column_default" => 'NONE',////NULL////CURRENT_TIMESTAMP////USER_DEFINED////NONE
                        "column_default_user_defined_value" => '',////This value is only needed when "column_default" is "USER_DEFINED"
                        "column_index" => 'NONE', ////PRIMARY_KEY////UNIQUE_KEY////INDEX////FULLTEXT////NONE
                        "column_auto_increment" => 'NO',  ///// YES ////NO
                        "column_attributes" => 'NONE',  ////BINARY////UNSIGNED////UNSIGNED_ZEROFILL////ON_UPDATE_CURRENT_TIMESTAMP////NONE
                        "column_comment" => 'NONE');  ///Your comment for this column
$columnsArray[] = array("column_name" => 'col3',
                        "column_data_type_length" => 'DECIMAL(10,8)',
                        "column_default" => 'NONE',////NULL////CURRENT_TIMESTAMP////USER_DEFINED////NONE
                        "column_default_user_defined_value" => '',////This value is only needed when "column_default" is "USER_DEFINED"
                        "column_index" => 'NONE', ////PRIMARY_KEY////UNIQUE_KEY////INDEX////FULLTEXT////NONE
                        "column_auto_increment" => 'NO',  ///// YES ////NO
                        "column_attributes" => 'NONE',  ////BINARY////UNSIGNED////UNSIGNED_ZEROFILL////ON_UPDATE_CURRENT_TIMESTAMP////NONE
                        "column_comment" => 'column 3');  ///Your comment for this column

$create_array["timestamp"] = time();
$create_array["create_table_name"] = 'testing_table_u';  //// You table name.
$create_array["columns_json_query"] = $columnsArray;
$json_encode_query = urlencode(json_encode($create_array));
//// Create New Table Call/////
$response = file_get_contents('https://dev.aipantry.com/api/create_table/'.$json_encode_query.'/'.$api_id.'/'.$api_key.'/');
$response_decode = json_decode($response);
echo '<pre>';
echo 'This is a sample json response : <br/>';
echo $response;
echo '<br/>Print out result as an array : <br/>';
print_r($response_decode);
echo '</pre>';







