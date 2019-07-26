<?php


class new1_student_form extends dbObject {

 public $pageTitle = "student form"; //page Title
 public static $table_name = "new1_student_form";
 public static $primary_column = "student_id";
 public static $key_column = 'first_name';
 public static $module = "new1";
 
 public static $system_info = [
		 'name' => 'new1_student_form',
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
    'first_name',
    'science_marks',
	'mathes_marks',
	'date_of_birth',
	'student_type',
	'class_teacher_name',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
 public static $demand_type_a = [
  'HOSTLER' => 'hostler',
  'DAY-SCHOLAR' => 'Day-scholar',
 ];
 
 public $initial_search = [
  "first_name",
 ];
 
 public $search = [
  '_show_update_path' => 1,
  '_show_view_path' => 1,
 ];
 
 public $student_id;
 public $first_name;
 public $science_marks;
 public $mahtes_marks;
 public $date_of_birth;
 public $student_type;
 public $class_teacher_name;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 
 public $requiredField = [
    'first_name',
 ];
 
 
}
?>