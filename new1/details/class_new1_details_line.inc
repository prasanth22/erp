<?php


class new1_details_line extends dbObject {

 public static $table_name = "new1_student_details";
 public static $primary_column = "student_id";
 public static $parent_primary_column = "class_id";
 public static $key_column = 'student_name';
 public static $module = "new1";
 
 public static $system_info = [
		 'name' => 'new1_details_line',
		 'number' => '8001',
		 'description' => 'Save student form data',
		 'version' => '0.1.1',
		 'db_version' => '1001',
		 'mod_version' => '1.1.1',
		 'primary_entity_cb' => '',
		 'module_name' => 'new1',
		 'weight' => 1
 ];
 
 public $field_a = [
    'student_id',
    'class_id',
    'student_name',
    'subj1',
	'subj2',
	'subj3',	   
	'subj4',
	'subj5',
	'subj6',
    'percentage',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
 public $student_id;
 public $class_id;
 public $student_name;
 public $subj1;
 public $subj2;
 public $subj3;
 public $subj4;
 public $subj5;
 public $subj6;
 public $percentage;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 
 public $requiredField = [
    'student_name',
 ];
 
 
}
?>