<?php

class new_employee_detail extends dbObject {

 public static $table_name = "new_employee_detail";
 public static $primary_column = "detail_id";
 public static $parent_primary_column = "line_id";
 public static $key_column = 'phone_number';
 public static $module = "new";
 public $field_a = [
  'detail_id',
  'line_id',
  'phone_number',
  'city',
  'state',
  'created_by',
  'creation_date',
  'last_update_by',
  'last_update_date',
 ];

 public $requiredField = [
 
 ];
 public $detail_id;
 public $line_id;
 public $phone_number;
 public $city;
 public $state;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;

 

}

//end of bom_detail_line class
?>