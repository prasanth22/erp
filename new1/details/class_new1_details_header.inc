<?php


class new1_details_header extends dbObject {

 public $pageTitle = "class details"; //page Title

 
 public static $table_name = "new1_classDetails_form";
 public static $dependent_classes = ['new1_details_line'];
 public static $primary_column = "class_id";
 public static $key_column = 'class';
 public static $module = "new1";
 
 public static $system_info = [
		 'name' => 'new1_details_header',
		 'number' => '8001',
		 'description' => 'Save class form data',
		 'version' => '0.1.1',
		 'db_version' => '1001',
		 'mod_version' => '1.1.1',
		 'primary_entity_cb' => '',
		 'module_name' => 'new1',
		 'weight' => 1
 ];
 
 public $field_a = [
    'class_id',
    'class',
    'section',
    'class_teacher_name',
    'no_of_students',
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
 ];
 
 public $class_id;
 public $class;
 public $section;
 public $class_teacher_name;
 public $no_of_students;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 public $search = [
  '_show_update_path' => 1,
  '_show_view_path' => 1,
 ];
 public $requiredField = [
    'class',
 ];
 
 
}
?>