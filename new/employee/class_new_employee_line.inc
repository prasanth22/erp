<?php

class new_employee_line extends dbObject {

 public static $table_name = "new_employee_family";
 public static $primary_column = "line_id";
 public static $parent_primary_column = "emp_id";
 public static $key_column = 'name';
 public static $module = "new";
 
 public static $system_info = [
		 'name' => 'new_employee_line',
		 'number' => '8001',
		 'description' => 'Save employee family data',
		 'version' => '0.1.1',
		 'db_version' => '1001',
		 'mod_version' => '1.1.1',
		 'primary_entity_cb' => '',
		 'module_name' => 'new',
		 'weight' => 1
 ];
 
 public $field_a = [
    'line_id',
    'emp_id',
    'name',
    'relation',
    'occupation',
	'gender',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
  public static $gender_a = [
  'MALE' => 'male',
  'FEMALE' => 'female',
 ];
 
 public $line_id;
 public $emp_id;
 public $name;
 public $relation;
 public $occupation;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 
 public $requiredField = [
    'name',
 ];
 
 
}
?>