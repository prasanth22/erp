<div id ="form_header" class="erp-form"><span class="heading"><?php echo gettext('Class Details') ?></span>
 
 <form  method="post" id="new1_details_header"  name="new1_details_header">
  <div id="tabsHeader">
   <ul class="tabMain">
    <li><a href="#tabsHeader-1"><?php echo gettext('class details') ?></a></li>
   </ul>
   <div class="tabContainer">
    <div id="tabsHeader-1" class="tabContent">
     <ul class="column header_field">
      <li><?php $f->l_text_field_dr('class_id'); ?><a name="show" href="form.php?class_name=new1_details_header&<?php echo "mode=$mode"; ?>" class="show document_id class_id"><i class="fa fa-refresh"></i></a> </li> 
      <li><?php $f->l_text_field_d('class'); ?></li>
      <li><?php $f->l_text_field_d('section'); ?></li>
      <li><?php $f->l_text_field_d('class_teacher_name'); ?></li>
      <li><?php $f->l_text_field_d('no_of_students'); ?></li>
     </ul>
    </div>
   </div>
  </div>
 </form>
 </div>

<div id="form_line" class="form_line">
 <span class="heading"><?php echo gettext('Student details') ?></span>
 <form action=""  method="post" id="new1_details_line"  name="student_details_line">
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1"><?php echo gettext('Marks') ?></a></li>   
   </ul>
   <div class="tabContainer">
    <div id="tabsLine-1" class="tabContent">
     <table class="form_line_data_table">
      <thead> 
       <tr>
        <th><?php echo gettext('Action') ?></th>
		<th><?php echo gettext('student name') ?></th>
        <th><?php echo gettext('subj1') ?></th>
		<th><?php echo gettext('subj2') ?></th>
		<th><?php echo gettext('subj3') ?></th>
		<th><?php echo gettext('subj4') ?></th>
		<th><?php echo gettext('subj5') ?></th>
		<th><?php echo gettext('subj6') ?></th>
        <th><?php echo gettext('percentage % ') ?></th>
       </tr>
      </thead>
	  <tbody class="form_data_line_tbody">
							<?php 
							$f = new inoform();
							$count = 1;
							foreach ($new1_details_line_object as $new1_details_line) {
							?>         
								<tr class="new1_details_line<?php echo $count ?>">
									<td><ul class="inline_action" style="padding-left: 0px;">
										<li class="add_row_img"><i class="fa fa-plus-circle"></i></li>
										<li class="remove_row_img"><i class="fa fa-minus-circle"></i></li>
										<li><input type="checkbox" name="line_id_cb" value="<?php echo htmlentities($new1_details_line->student_id); ?>"></li>
										<li><?php echo form::hidden_field('class_id', $$class->class_id);
										?></li>
										</ul>
									</td>
									 <td><?php $f->text_field_d2s('student_name'); ?></td>
									 <td><?php $f->text_field_d2s('subj1'); ?></td>
									 <td><?php $f->text_field_d2s('subj2'); ?></td>
									 <td><?php $f->text_field_d2s('subj3'); ?></td>
									 <td><?php $f->text_field_d2s('subj4'); ?></td>
									 <td><?php $f->text_field_d2s('subj5'); ?></td>
									 <td><?php $f->text_field_d2s('subj6'); ?></td>
									 <td><?php $f->text_field_d2s('percentage'); ?></td>
															</tr>
								<?php
									$count = $count + 1;
							}
							?>
						</tbody>
     
     </table>
    </div>
   </div>
  </div>
 </form>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="new1_details_header" ></li>
  <li class="lineClassName" data-lineClassName="new1_details_line" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="class_id" ></li>
  <li class="form_header_id" data-form_header_id="new1_details_header" ></li>
  <li class="line_key_field" data-line_key_field="student_id" ></li>
  <li class="single_line" data-single_line="false" ></li>
  <li class="form_line_id" data-form_line_id="new1_details_line" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="class_id" ></li>
  <li class="docLineId" data-docLineId="student_id" ></li>
  <li class="btn1DivId" data-btn1DivId="new1_details_header" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="1" ></li>
 </ul>
</div>

