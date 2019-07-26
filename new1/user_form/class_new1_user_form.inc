<?php


class new1_user_form extends dbObject {

 public $pageTitle = "User form-1"; //page Title

 
 public static $table_name = "new1_user_form";
 public static $primary_column = "form_id";
 public static $key_column = 'first_name';
 public static $module = "new";
 
 public static $system_info = [
		 'name' => 'new1_user_form',
		 'number' => '8001',
		 'description' => 'Save user form data',
		 'version' => '0.1.1',
		 'db_version' => '1001',
		 'mod_version' => '1.1.1',
		 'primary_entity_cb' => '',
		 'module_name' => 'new',
		 'weight' => 1
 ];
 
 public $field_a = [
    'form_id',
    'first_name',
    'last_name',
    'password',
    'gender',
    'nationality',
	'active',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
 public $checkbox = [
  "active",
 ];
 
 public $form_id;
 public $first_name;
 public $last_name;
 public $password;
 public $gender;
 public $nationality;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 
 public $requiredField = [
    'first_name',
    'password',
 ];
 
 
}
?>