<?php

/**
 * inoERP
 *
 * @copyright   2014 Nishit R. Das
 * @license     https://www.mozilla.org/MPL/2.0/
 * @link        http://inoideas.org
 * @source code https://github.com/inoerp/inoERP
 */

/**
 * new_user_form
 *
 */
class new_user_form extends dbObject {

 public $pageTitle = "User form"; //page Title

 
 public static $table_name = "new_user_form";
 public static $primary_column = "form_id";
 public static $key_column = 'first_name';
 public static $module = "new";
 
 public static $system_info = [
		 'name' => 'new_user_form',
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
	'created_by',
    'creation_date',
    'last_update_by',
    'last_update_date',
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