<?php
// output headers so that the file is downloaded rather than displayed
header('Content-Type: application/json; charset=utf-8');
header('Content-Disposition: attachment; filename=data.json');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('OID','HOSPCODE','HOSPNAME','HOSPTYPENAME','PID','CID','NAME','ADDRESS','YEAR_RPT','BIRTH','AGE','SEX','IS_HT_NONREGISTER','IS_HT','IS_HT_FIRST','DATE_DIAG_HT','DATE_SCREEN_HT','HT_SBP','HT_DBP','HT_RESULT','IS_DM_NON_REGISTER','IS_DM','IS_DM_FIRST','DATE_DIAG_DM','DATE_SCREEN_DM','BSLEVEL','DM_RESULT','DATE_CHANGE','MONTH_CHANGE','HT_GROUP','DM_GROUP','HT_REFER_DATE','DM_REFER_DATE','DATE_LAST_HBA1C','LABRESULT_HBA1C','IS_HT_CONTROL','HT_CONTROL_DATE','IS_DM_CONTROL','DM_CONTROL_DATE','HOSPCODE_RX','HOME_VISIT','HT_COM_EYE','HT_COM_KIDNEY','HT_COM_HEART','HT_COM_BRAIN','HT_COM_FOOT','HT_COM_OTHER','DM_COM_EYE','DM_COM_KIDNEY','DM_COM_HEART','DM_COM_BRAIN','DM_COM_FOOT','DM_COM_OTHER','LABTEST01_DATE','LABTEST01_RESULT','LABTEST05_DATE','LABTEST05_RESULT','LABTEST07_DAT','LABTEST07_RESULT','LABTEST09_DATE','LABTEST09_RESULT','LABTEST12_DATE','LABTEST12_RESULT','ASPIRIN_DATE','RETINA_DATE','WORKING01','WORKING02','WORKING03','WORKING04','WORKING05','WORKING06'));

// fetch the data
$dbhost = "localhost:3300";
$dbuser = "root";
$dbpass = "123456";
$dbname = "data_hinfo_backup";
$dbc = mysql_connect($dbhost,$dbuser,$dbpass)or die ("Cannot Connect Mysql") ;
$dbs = mysql_select_db($dbname)or die ("Cannot Connect Db");
mysql_db_query($dbname,"SET NAMES UTF8");
$rows = mysql_query('SELECT * FROM mas_person_onerecord_chronic_demo');
 
// loop over the rows, outputting them

 while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
$json = json_encode($rows);
echo $json;
?>