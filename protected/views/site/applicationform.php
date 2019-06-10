<?php
/* @var $this ApplicantController */
/* @var $applicant Applicant */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'applicant-applicationform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handing ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
    'htmlOptions'=>array(
      'class'=>'form-horizontal',
      'onsubmit'=>'return entryok()'
    ),
)); ?>

	
	<div class="clear"></div>
	

	<fieldset>
	<legend>Personal Summary</legend>
	<div class="row">
		<div class="col-md-3">
    		<div class="form-group">
        		<?php echo $form->labelEx($applicant,'last_name'); ?>
        		<?php echo $form->textField($applicant,'last_name'); ?>
        		<?php echo $form->error($applicant,'last_name'); ?>
    		</div>
    	</div>
    	<div class="col-md-3">
    		<div class="form-group">
        		<?php echo $form->labelEx($applicant,'first_name'); ?>
        		<?php echo $form->textField($applicant,'first_name'); ?>
        		<?php echo $form->error($applicant,'first_name'); ?>
    		</div>
		</div>
    	<div class="col-md-3">
        	<div class="form-group">
        		<?php echo $form->labelEx($applicant,'mid_initial'); ?>
        		<?php echo $form->textField($applicant,'mid_initial'); ?>
        		<?php echo $form->error($applicant,'mid_initial'); ?>
        	</div>
    	</div>
    	<div class="col-md-3">
        	<div class="form-group">
        		<?php echo $form->labelEx($applicant,'created_date'); ?>
        		<?php echo $form->textField($applicant,'created_date', array('value'=>date('m/d/Y'), 'onkeypress'=>'return false;')); ?>
        		<?php echo $form->error($applicant,'created_date'); ?>
    		</div>
    	</div>
	</div>
	
	<div class="row">
    	<div class="col-md-4">
        	<div class="form-group">
        		<?php echo $form->labelEx($applicant,'email'); ?>
        		<?php echo $form->textField($applicant,'email'); ?>
        		<?php echo $form->error($applicant,'email'); ?>
        	</div>
        </div>

    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'home_phone'); ?>
    		<?php echo $form->textField($applicant,'home_phone'); ?>
    		<?php echo $form->error($applicant,'home_phone'); ?>
        	</div>
        </div>
        
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'cell_phone'); ?>
    		<?php echo $form->textField($applicant,'cell_phone'); ?>
    		<?php echo $form->error($applicant,'cell_phone'); ?>
        	</div>
        </div>
	</div>
	<div class="row">
		<?php echo $form->labelEx($applicant,'is_usa_eligible'); ?>
		&nbsp;
		&nbsp;
		<?php 
		echo $form->radioButton($applicant, 'is_usa_eligible', array(
		    'value'=>'Yes',
		    'uncheckValue'=>null
		));
		?>
		Yes
		&nbsp;
		
		<?php
		echo $form->radioButton($applicant, 'is_usa_eligible', array(
		    'value'=>'No',
		    'uncheckValue'=>null
		));
		?>
		No
		&nbsp;
		<?php echo $form->error($applicant,'is_usa_eligible'); ?>
		<p class="note">Any offer of employment is subject to the completion of an I-9 form including the proper documentation.</p>
	</div>
	
	<div class="row">
    	<div class="col-md-6">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'position_applying_for'); ?>
    		<?php echo $form->textField($applicant,'position_applying_for'); ?>
    		<?php echo $form->error($applicant,'position_applying_for'); ?>
    		</div>
    	</div>
    	<div class="col-md-6">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'date_can_start'); ?>
    		<?php echo $form->textField($applicant,'date_can_start', array('class'=>'dtpicker')); ?>
    		<?php echo $form->error($applicant,'date_can_start'); ?>
    		</div>
    	</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($applicant,'preferred_employ_status'); ?>
		&nbsp;
		&nbsp;
		<?php 
		echo $form->radioButton($applicant, 'preferred_employ_status', array(
		    'value'=>'Full Time',
		    'uncheckValue'=>null
		));
		?>
		Full Time
		&nbsp;
		
		<?php
		echo $form->radioButton($applicant, 'preferred_employ_status', array(
		    'value'=>'Part Time',
		    'uncheckValue'=>null
		));
		?>
		Part Time
		&nbsp;
		<?php echo $form->error($applicant,'preferred_employ_status'); ?>
	</div>
	<br>
	<div class="row">
    	<table class="table-stack">
    		<tr>
    			<td colspan="11"><label>Your Availability for Work:</label></td>
    		</tr>
    		<tr class="table-stack-label" style="color: orange;">
    			<td></td>
    			<td><?php echo $form->labelEx($applicant,'from_sun'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_mon'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_tue'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_wed'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_thu'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_fri'); ?></td>
    			<td><?php echo $form->labelEx($applicant,'from_sat'); ?></td>
    		</tr>
    		<tr>
    			<td><label style="text-align: right;">From:</label></td>
    			<td><?php echo $form->textField($applicant,'from_sun',array('placeholder'=>'Sunday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_mon',array('placeholder'=>'Monday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_tue',array('placeholder'=>'Tuesday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_wed',array('placeholder'=>'Wednesday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_thu',array('placeholder'=>'Thursday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_fri',array('placeholder'=>'Friday')); ?></td>
    			<td><?php echo $form->textField($applicant,'from_sat',array('placeholder'=>'Saturday')); ?></td>
    		</tr>
    		<tr>
    			<td><label style="text-align: right;">To:</label></td>
    			<td><?php echo $form->textField($applicant,'to_sun',array('placeholder'=>'Sunday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_mon',array('placeholder'=>'Monday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_tue',array('placeholder'=>'Tuesday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_wed',array('placeholder'=>'Wednesday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_thu',array('placeholder'=>'Thursday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_fri',array('placeholder'=>'Friday')); ?></td>
    			<td><?php echo $form->textField($applicant,'to_sat',array('placeholder'=>'Saturday')); ?></td>
    		</tr>
    	</table>
    	<br>
	</div>
	
	<div class="row">
    	<div class="col-md-6">
        	<div class="form-group">
        		<?php echo $form->labelEx($applicant,'special_sched_request'); ?>
        		<?php echo $form->textField($applicant,'special_sched_request', array('class'=>'dtpicker')); ?>
        		<?php echo $form->error($applicant,'special_sched_request'); ?>
			</div>
		</div>
    	<div class="col-md-6">
        	<div class="form-group">
        	&nbsp;
			</div>
		</div>
	</div>
	</fieldset>
	
	<hr>

	<!-- Education Section -->
	<fieldset>
	<legend>Education</legend>
	<div class="row">
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'hs_attended'); ?>
    		<?php echo $form->textField($applicant,'hs_attended'); ?>
    		<?php echo $form->error($applicant,'hs_attended'); ?>
			</div>
		</div>
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'hs_city_state'); ?>
    		<?php echo $form->textField($applicant,'hs_city_state'); ?>
    		<?php echo $form->error($applicant,'hs_city_state'); ?>
			</div>
		</div>
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'hs_is_graduated'); ?>
    		&nbsp;
    		&nbsp;
    		<?php 
    		echo $form->radioButton($applicant, 'hs_is_graduated', array(
    		    'value'=>'Yes',
    		    'uncheckValue'=>null
    		));
    		?>
    		Yes
    		&nbsp;
    		
    		<?php
    		echo $form->radioButton($applicant, 'hs_is_graduated', array(
    		    'value'=>'No',
    		    'uncheckValue'=>null
    		));
    		?>
    		No
    		&nbsp;
    		
    		<?php
    		echo $form->radioButton($applicant, 'hs_is_graduated', array(
    		    'value'=>'GED',
    		    'uncheckValue'=>null
    		));
    		?>
    		GED
    		&nbsp;
    		
    		<?php echo $form->error($applicant,'hs_is_graduated'); ?>
			</div>
		</div>
	</div>

	<div class="row">
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'college_attended'); ?>
    		<?php echo $form->textField($applicant,'college_attended'); ?>
    		<?php echo $form->error($applicant,'college_attended'); ?>
			</div>
		</div>
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'college_city_state'); ?>
    		<?php echo $form->textField($applicant,'college_city_state'); ?>
    		<?php echo $form->error($applicant,'college_city_state'); ?>
			</div>
		</div>
    	<div class="col-md-4">
        	<div class="form-group">
    		<?php echo $form->labelEx($applicant,'college_major'); ?>
    		<?php echo $form->textField($applicant,'college_major'); ?>
    		<?php echo $form->error($applicant,'college_major'); ?>
			</div>
		</div>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($applicant,'education_status'); ?>
    		&nbsp;
    		&nbsp;
    		<?php 
    		echo $form->radioButton($applicant, 'education_status', array(
    		    'value'=>'Enrolled',
    		    'uncheckValue'=>null
    		));
    		?>
    		Enrolled
    		&nbsp;
    		
    		<?php
    		echo $form->radioButton($applicant, 'education_status', array(
    		    'value'=>'Not Enrolled',
    		    'uncheckValue'=>null
    		));
    		?>
    		Not Enrolled
    		&nbsp;
    		
    		<?php
    		echo $form->radioButton($applicant, 'education_status', array(
    		    'value'=>'Graduated',
    		    'uncheckValue'=>null
    		));
    		?>
    		Graduated
    		&nbsp;
    		
    		<?php
    		echo $form->radioButton($applicant, 'education_status', array(
    		    'value'=>'Degree',
    		    'uncheckValue'=>null
    		));
    		?>
    		Degree:
    		&nbsp;
		<?php echo $form->error($applicant,'education_status'); ?>
	</div>
	</fieldset>
	<br>
	
	<fieldset>
    	<div class="row">
    		<?php echo $form->labelEx($applicant,'list_of_accomplishment'); ?>
    		<?php echo $form->textArea($applicant,'list_of_accomplishment'); ?>
    		<?php echo $form->error($applicant,'list_of_accomplishment'); ?>
    	</div>
    
    	<div class="row">
    		<?php echo $form->labelEx($applicant,'how_do_hear_engagex'); ?>
    		<?php echo $form->textArea($applicant,'how_do_hear_engagex'); ?>
    		<?php echo $form->error($applicant,'how_do_hear_engagex'); ?>
    	</div>
	</fieldset>
	
	<p>&nbsp;</p>
	
	<fieldset>
		<legend>Employment History</legend>
		
		<!-- Number #1 -->
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'employer1'); ?>
            		<?php echo $form->textField($applicant,'employer1'); ?>
            		<?php echo $form->error($applicant,'employer1'); ?>
    			</div>
    		</div>
    		
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'job_title1'); ?>
            		<?php echo $form->textField($applicant,'job_title1'); ?>
            		<?php echo $form->error($applicant,'job_title1'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<?php echo $form->labelEx($applicant,'street_address1'); ?>
    		<?php echo $form->textField($applicant,'street_address1'); ?>
    		<?php echo $form->error($applicant,'street_address1'); ?>
    	</div>
    	<br>
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'city_state_zip1'); ?>
            		<?php echo $form->textField($applicant,'city_state_zip1'); ?>
            		<?php echo $form->error($applicant,'city_state_zip1'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
					<label>Dates of Employment</label>
					<table>
					<tr style="color: orange;">
						<td><?php echo $form->labelEx($applicant,'emp_from_date1'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_from_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_from_date1'); ?>
						</td>
						<td>&nbsp;&nbsp;</td>
						<td><?php echo $form->labelEx($applicant,'emp_to_date1'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_to_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_to_date1'); ?>
						</td>
					</tr>
					</table>            		
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'phone1'); ?>
            		<?php echo $form->textField($applicant,'phone1'); ?>
            		<?php echo $form->error($applicant,'phone1'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'reason1'); ?>
            		<?php echo $form->textField($applicant,'reason1'); ?>
            		<?php echo $form->error($applicant,'reason1'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'starting_pay_amount1'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_amount1'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_amount1'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_per1'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_per1'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'ending_pay_amount1'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_amount1'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_amount1'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_per1'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_per1'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    	</div>
    	<hr style="height:1px;border:none;color:#333;background-color:#333;" /><!-- End: Number#1 -->
    	
		<!-- Number #2 -->
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'employer2'); ?>
            		<?php echo $form->textField($applicant,'employer2'); ?>
            		<?php echo $form->error($applicant,'employer2'); ?>
    			</div>
    		</div>
    		
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'job_title2'); ?>
            		<?php echo $form->textField($applicant,'job_title2'); ?>
            		<?php echo $form->error($applicant,'job_title2'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<?php echo $form->labelEx($applicant,'street_address2'); ?>
    		<?php echo $form->textField($applicant,'street_address2'); ?>
    		<?php echo $form->error($applicant,'street_address2'); ?>
    	</div>
    	<br>
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'city_state_zip2'); ?>
            		<?php echo $form->textField($applicant,'city_state_zip2'); ?>
            		<?php echo $form->error($applicant,'city_state_zip2'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
					<label>Dates of Employment</label>
					<table>
					<tr style="color: orange;">
						<td><?php echo $form->labelEx($applicant,'emp_from_date2'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_from_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_from_date2'); ?>
						</td>
						<td>&nbsp;&nbsp;</td>
						<td><?php echo $form->labelEx($applicant,'emp_to_date2'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_to_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_to_date2'); ?>
						</td>
					</tr>
					</table>            		
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'phone2'); ?>
            		<?php echo $form->textField($applicant,'phone2'); ?>
            		<?php echo $form->error($applicant,'phone2'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'reason2'); ?>
            		<?php echo $form->textField($applicant,'reason2'); ?>
            		<?php echo $form->error($applicant,'reason2'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'starting_pay_amount2'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_amount2'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_amount2'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_per2'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_per2'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'ending_pay_amount2'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_amount2'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_amount2'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_per2'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_per2'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    	</div>
    	<hr style="height:1px;border:none;color:#333;background-color:#333;" /><!-- End: Number #2 -->
    	
		<!-- Number #3 -->
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'employer3'); ?>
            		<?php echo $form->textField($applicant,'employer3'); ?>
            		<?php echo $form->error($applicant,'employer3'); ?>
    			</div>
    		</div>
    		
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'job_title3'); ?>
            		<?php echo $form->textField($applicant,'job_title3'); ?>
            		<?php echo $form->error($applicant,'job_title3'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<?php echo $form->labelEx($applicant,'street_address3'); ?>
    		<?php echo $form->textField($applicant,'street_address3'); ?>
    		<?php echo $form->error($applicant,'street_address3'); ?>
    	</div>
    	<br>
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'city_state_zip3'); ?>
            		<?php echo $form->textField($applicant,'city_state_zip3'); ?>
            		<?php echo $form->error($applicant,'city_state_zip3'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
					<label>Dates of Employment</label>
					<table>
					<tr style="color: orange;">
						<td><?php echo $form->labelEx($applicant,'emp_from_date3'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_from_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_from_date3'); ?>
						</td>
						<td>&nbsp;&nbsp;</td>
						<td><?php echo $form->labelEx($applicant,'emp_to_date3'); ?>&nbsp;</td>
						<td>
							<?php echo $form->textField($applicant,'emp_to_date1', array('class'=>'dtpicker')); ?>
							<?php echo $form->error($applicant,'emp_to_date3'); ?>
						</td>
					</tr>
					</table>            		
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'phone3'); ?>
            		<?php echo $form->textField($applicant,'phone3'); ?>
            		<?php echo $form->error($applicant,'phone3'); ?>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="form-group">
            		<?php echo $form->labelEx($applicant,'reason3'); ?>
            		<?php echo $form->textField($applicant,'reason3'); ?>
            		<?php echo $form->error($applicant,'reason3'); ?>
    			</div>
    		</div>
    	</div>
		<div class="row">
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'starting_pay_amount3'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_amount3'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_amount3'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'starting_pay_per3'); ?>
                    		<?php echo $form->error($applicant,'starting_pay_per3'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    		<div class="col-md-6">
				<table>
					<tr>
						<td><?php echo $form->labelEx($applicant,'ending_pay_amount3'); ?>&nbsp;&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_amount3'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_amount3'); ?>						
						</td>
						<td>&nbsp;/&nbsp;</td>
						<td>
                    		<?php echo $form->textField($applicant,'ending_pay_per3'); ?>
                    		<?php echo $form->error($applicant,'ending_pay_per3'); ?>						
						</td>						
					</tr>
				</table>
    		</div>
    	</div>
    	<hr style="height:1px;border:none;color:#333;background-color:#333;" /><!-- End: Number #3 -->
    	
	</fieldset>
	
	
	<fieldset>
		<div class="row">
            <p>I certify that all my answers given provided in this employment application are true and complete to the best of my knowledge.
            I understand that any false or incomplete information may disqualify me from further consideration for employment and may result in my immediate discharge if discovered at a later date.
            </p>
            
            <p>I authorize the investigation of any and all statements contained in this application. I authorize any person, school, current employers and other organization to provided information concerning my previous employment and other relevant information that may be useful in making a hiring decision. I release such persons and organizations from any legal liability in making such statements.
            </p>
            
            <p>I understand and acknowledge that unless otherwise defined by applicable law or written agreement with ENGAGEX, any employment relationship with ENGAGEX is considered "employment at will." This means that I may resign my employment at any time without notice and without reason or justification. Similarly, ENGAGEX may end my employment at any time without notice and for any reason not prohibited by law, or for no reason.
            </p>
		</div>
    	<div class="row">
    		<div class="col-md-6">
    		<?php echo $form->labelEx($applicant,'applicant_signature'); ?>
    		<?php echo $form->textField($applicant,'applicant_signature'); ?>
    		<?php echo $form->error($applicant,'applicant_signature'); ?>
    		</div>
    		<div class="col-md-6">
    		<?php echo $form->labelEx($applicant,'applicant_signature_date'); ?>
    		<?php echo $form->textField($applicant,'applicant_signature_date', array('class'=>'dtpicker')); ?>
    		<?php echo $form->error($applicant,'applicant_signature_date'); ?>
    		</div>
    	</div>
	</fieldset>
	<br>
    <br>    
	<div class="row buttons text-center">
		<?php echo CHtml::submitButton('Submit Application', array('class'=>'btn btn-primary btn-lg')); ?>
	</div>
	
<?php $this->endWidget(); ?>

<script>
function entryok()
{
	var s = "************************ REVIEW & CONFIRM ***************************  \n\n";
	s +=    "     Are you sure all information entered on this form are correct?    \n\n\n";
	s +=    "     REMINDER: You will not able to modify this after submission.      \n\n\n";
	s +=    "*********************************************************************  \n\n";
	return confirm(s);
}

(function() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		 $('.table-stack td').css('display', 'block');
		 $('.table-stack-label').hide();
		 $('.head-label').removeClass('pull-right');
		 $('input[id^="Applicant_from_"]').removeClass('form-control');
		 $('input[id^="Applicant_to_"]').removeClass('form-control');
		 $('input[id^="Applicant_from_"]').addClass('form-control');
		 $('input[id^="Applicant_to_"]').addClass('form-control');
	}
})();
</script>

