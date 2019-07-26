<?php


class new_employee_header extends dbObject {

 public $pageTitle = "employee details"; //page Title

 
 public static $table_name = "new_employee_details";
 public static $dependent_classes = ['new_employee_line','new_employee_detail'];
 public static $primary_column = "emp_id";
 public static $key_column = 'first_name';
 public static $module = "new";
 
 public static $system_info = [
		 'name' => 'new_employee_header',
		 'number' => '8001',
		 'description' => 'Save employee data',
		 'version' => '0.1.1',
		 'db_version' => '1001',
		 'mod_version' => '1.1.1',
		 'primary_entity_cb' => '',
		 'module_name' => 'new',
		 'weight' => 1
 ];
 
 public $field_a = [
    'emp_id',
	'first_name',
	'last_name',
	'gender',
	'date_of_birth',
	'phone_number',
	'nationality',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
 public $emp_id;
 public $first_name;
 public $last_name;
 public $gender;
 public $date_of_birth;
 public $phone_number;
 public $nationality;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 
 public $search = [
  '_show_update_path' => 1,
  '_show_view_path' => 1,
 ];
 
 public $requiredField = [
    'first_name',
 ];
 
 
}
?>