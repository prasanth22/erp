<div id ="form_header" class="erp-form"><span class="heading"><?php echo gettext('Membership Application') ?></span>
 
 <form  method="post" id="new1_user_form"  name="new1_user_form">
  <div id="tabsHeader">
   <ul class="tabMain">
    <li><a href="#tabsHeader-1"><?php echo gettext('user form') ?></a></li>
   </ul>
   <div class="tabContainer">
    <div id="tabsHeader-1" class="tabContent">
     <ul class="column header_field">
      <li><?php $f->l_text_field_dr('form_id'); ?></li> 
      <li><?php $f->l_text_field_d('first_name'); ?></li>
      <li><?php $f->l_text_field_d('last_name'); ?></li>
      <li><?php $f->l_text_field_d('password'); ?></li>
      <li><?php $f->l_select_field_from_object('gender', hr_employee::gender(), 'option_line_code', 'option_line_value', $$class->gender, '', 'gender', '', $readonly); ?>              </li>
      <li><?php $f->l_text_field_d('nationality'); ?></li>
      <li><?php $f->l_checkBox_field_d('active', $$class->active_cb); ?></li>
      <li><?php echo gettext('likes playing?')?></li>	  
     </ul>
    </div>
   </div>
  </div>
 </form>

</div> 

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="new1_user_form" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="form_id" ></li>
  <li class="form_header_id" data-form_header_id="new1_user_form" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="form_id" ></li>
  <li class="btn1DivId" data-btn1DivId="new1_user_form"></li>
 </ul>
</div>
