<?php
class Export extends BaseController{
	public function excel(){
		// print_r('tuuu1111');
		// //Excel::create('export')-> sheet('Posts')-> with($posts_array)-> export('xls');
		// $book=Book::find(1);
  //     print_r($book);
     $export = mysql_query($select); 
$fields = mysql_num_fields($export); 
for ($i = 0; $i < $fields; $i++) { 
   $header .= mysql_field_name($export, $i) . "\t"; 
} 
while($row = mysql_fetch_row($export)) { 
    $line = ''; 
    foreach($row as $value) {                                             
        if ((!isset($value)) OR ($value == "")) { 
            $value = " \t"; 
        } else {
        $value=stripcslashes($value); 
            $value = str_replace('"', '""', $value); 
            $value = '"' . $value . '"' . "\t"; 
        } 
        $line .= $value; 
    } 
    $data .= trim($line)."\n"; 
} 
$data = str_replace("\r","",$data); 
if ($data == "") { 
    $data = "\n(0) Records Found!\n";                         
} 
header("Content-type: application/x-msdownload"); 
header("Content-Disposition: attachment; filename=bridge_club_members.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
print "$header\n$data"; 
	}

	

}

?>