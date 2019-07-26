<div id ="form_header" class="erp-form"><span class="heading"><?php echo gettext('student details') ?></span>
 <form  method="post" id="new1_student_form"  name="new1_student_form">
  <div id="tabsHeader">
   <ul class="tabMain">
    <li><a href="#tabsHeader-1"><?php echo gettext('student form ') ?></a></li>
   </ul>
   <div class="tabContainer">
    <div id="tabsHeader-1" class="tabContent">
     <ul class="column header_field">
      <li><?php $f->l_text_field_dr('student_id'); ?></li> 
      <li><?php $f->l_text_field_d('first_name'); ?></li>
      <li><?php $f->l_text_field_d('science_marks'); ?></li>  
	  <li><?php $f->l_text_field_d('mathes_marks'); ?></li> 
      <li><?php $f->l_date_fieldAnyDay('date_of_birth', $$class->requsted_date); ?>  </li>  
	  <li><?php $f->l_select_field_from_array('student_type', new1_student_form::$demand_type_a, $$class->student_type, 'student_type'); ?></li>
	  <li><?php
	     $f->l_val_field_d('class_teacher_name', 'new1_details_header', 'class_teacher_name', '', 'vf_select_class_teacher_name');
         echo $f->hidden_field_withId('class_id', $$class->class_id);
         echo $f->hidden_field_withCLass('class_id', '', 'popup_value');
         echo $f->hidden_field_withCLass('class', '', 'popup_value class');
         ?><i class="select_class_teacher_name generic select_popup clickable fa fa-search" data-class_name="new1_details_header"></i>
	  </li>
     </ul>
    </div>
   </div>
  </div>
 </form>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="new1_student_form" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="student_id" ></li>
  <li class="form_header_id" data-form_header_id="new1_student_form" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="student_id" ></li>
  <li class="btn1DivId" data-btn1DivId="new1_student_form"></li>
 </ul>
</div>
