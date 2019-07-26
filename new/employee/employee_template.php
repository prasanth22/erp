<div id ="form_header" class="erp-form"><span class="heading"><?php echo gettext('Employee Details') ?></span>
 
 <form  method="post" id="new_employee_header"  name="new_employee_header">
  <div id="tabsHeader">
   <ul class="tabMain">
    <li><a href="#tabsHeader-1"><?php echo gettext('employee form') ?></a></li>
   </ul>
   <div class="tabContainer">
    <div id="tabsHeader-1" class="tabContent">
     <ul class="column header_field">
      <li><?php $f->l_text_field_dr('emp_id'); ?></li> 
      <li><?php $f->l_text_field_d('first_name'); ?></li>
      <li><?php $f->l_text_field_d('last_name'); ?></li>
      <li><?php $f->l_select_field_from_object('gender', hr_employee::gender(), 'option_line_code', 'option_line_value', $$class->gender, '', 'gender', '', $readonly); ?></li>
	  <li><?php $f->l_date_fieldAnyDay('date_of_birth', $$class->requsted_date); ?></li>
	  <li><?php $f->l_text_field_d('phone_number'); ?></li>
      <li><?php $f->l_text_field_d('nationality'); ?></li>
     </ul>
    </div>
   </div>
  </div>
 </form>
 </div>

<div id="form_line" class="form_line">
 <span class="heading"><?php echo gettext('family details') ?></span>
 <form action=""  method="post" id="employee_line"  name="employee_line">
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1"><?php echo gettext('family form') ?></a></li>   
   </ul>
   <div class="tabContainer">
    <div id="tabsLine-1" class="tabContent">
     <table class="form_line_data_table">
      <thead> 
       <tr>
        <th><?php echo gettext('Action') ?></th>
		<th><?php echo gettext('line_id') ?></th>
		<th><?php echo gettext('name') ?></th>
        <th><?php echo gettext('relation') ?></th>
		<th><?php echo gettext('occupation') ?></th>
		<th><?php echo gettext('gender') ?></th>
		<th><?php echo gettext('details') ?></th>
	   </tr>
      </thead>
	  <tbody class="form_data_line_tbody">
		<?php 
			$f = new inoform();
			$count = 1;
			foreach ($new_employee_line_object as $new_employee_line) {
		?>         
	   <tr class="new_employee_line<?php echo $count ?>">
		<td>
		<ul class="inline_action" style="padding-left: 0px;">
		<li class="add_row_img"><i class="fa fa-plus-circle"></i></li>
		<li class="remove_row_img"><i class="fa fa-minus-circle"></i></li>
		<li><input type="checkbox" name="line_id_cb" value="<?php echo htmlentities($new_employee_line->line_id); ?>"></li>
		<li><?php echo form::hidden_field('emp_id', $$class->emp_id);?></li>
		</ul>
		</td>
		<td><?php $f->text_field_dr('line_id'); ?></td>
		<td><?php $f->text_field_d2s('name'); ?></td>
		<td><?php $f->text_field_d2s('relation'); ?></td>
		<td><?php $f->text_field_d2s('occupation'); ?></td>
		<td><?php echo $f->select_field_from_array('gender', new_employee_line::$gender_a, $$class_second->gender, '', 'uom_id medium'); ?></td>
		<td class="add_detail_values"><i class="fa fa-arrow-circle-down add_detail_values_img"></i>
          <div class="class_detail_form">
           <fieldset class="form_detail_data_fs">
            <div class="tabsDetail">
             <ul class="tabMain">
              <li class="tabLink"><a href="#tabsDetail-1-<?php echo $count ?>"><?php echo gettext('family details') ?></a></li>
             </ul>
             <div class="tabContainer">
              <div id="tabsDetail-1-<?php echo $count ?>" class="tabContent">
               <table class="form form_detail_data_table detail">
                <thead>
                 <tr>
				  <th><?php echo gettext('detail_id') ?></th>
                  <th><?php echo gettext('phone number') ?></th>
                  <th><?php echo gettext('city') ?></th>
                  <th><?php echo gettext('state') ?></th>
                 </tr>
                </thead>
                <tbody class="form_data_detail_tbody">        
	               <tr class="new_employee_detail<?php echo $count ?>">
                   <td><?php $f->text_field_dr('detail_id'); ?></td>
		           <td><?php $f->text_field_d2s('phone_number'); ?></td>
		           <td><?php $f->text_field_d2s('city'); ?></td>
		           <td><?php $f->text_field_d2s('state'); ?></td>
                  </tr>
                </tbody>
               </table>
              </div>
             </div>
            </div>
           </fieldset>
          </div>
		 </td>
	    </tr>
	<?php
	$count = $count + 1;
	}?>
	  </tbody>
     </table>
    </div>
   </div>
  </div>
 </form>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="new_employee_header" ></li>
  <li class="lineClassName" data-lineClassName="new_employee_line" ></li>
  <li class="detailClassName" data-detailClassName="new_employee_detail" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="emp_id" ></li>
  <li class="form_header_id" data-form_header_id="new_employee_header" ></li>
  <li class="line_key_field" data-line_key_field="line_id" ></li>
  <li class="single_line" data-single_line="false" ></li>
  <li class="form_line_id" data-form_line_id="new_employee_line" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="emp_id" ></li>
  <li class="docLineId" data-docLineId="line_id" ></li>
  <li class="docDetailId" data-docDetailId="detail_id" ></li>
  <li class="btn1DivId" data-btn1DivId="new_employee_header" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="1" ></li>
 </ul>
</div>
