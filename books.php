<?php
include('inc/dataTables_object.php');

$dataTables_obj = new Datatable_Example();

$book_info = $dataTables_obj->fetch_book_info();

foreach($book_info as $key=>$value){
	echo $key . " - " . $value;
}
