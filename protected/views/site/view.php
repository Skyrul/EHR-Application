<?php 
function trimtext($longString, $length = 18) {
    $array = str_split($longString, $length); 

    return implode("<br>",$array);
}
function dtt($d)
{
	return ($d == '1969-12-31') ? '':date('m/d/Y', strtotime($d));
}
?>
<html>
<head>
<style>
	body {
		font-size: 14px;	
    font-family: Verdana, Tahoma, Arial, sans-serif;
	}
	
.text-center {
    text-align: center;
}
.text-left {
    text-align: left;
}
.text-right {
    text-align: right;
}
.box {
	border: 1px solid gray;
}
.box-text {
	border: 1px solid gray;
	font-size: 12px;
}
.br-l {
	border-left: 1px solid gray;
}
.br-r {
	border-right: 1px solid gray;
}
span {
    word-wrap: break-word;
		font-weight: bold;
}
</style>
</head>
<body>

<table border="0" width="100%">
<tr>
	<td>
        <table width="100%">
        <tr>
        	<td><img src="<?php echo $this->programURL(); ?>/eapplication/images/company-cropped.png"></td>
        	<td><h3 style="float: right !important;" class="text-right">&nbsp;&nbsp;APPLICATION FOR EMPLOYMENT</h3></td>
        </tr>
        </table>
	</td>
</tr>
<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>Last Name<br><span><?php echo $model->last_name; ?></span></td>
            	<td>First Name<br><span><?php echo $model->first_name; ?></span></td>
            	<td class="text-left">Middle Initial<br><span><?php echo $model->mid_initial; ?></span></td>
            	<td class="text-center br-l">Today's Date<br><span><?php echo date('m/d/Y', strtotime($model->created_date)); ?></span></td>
            </tr>
        </table>
	</td>
</tr>
<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>Email Address: <span><?php echo $model->email; ?></span></td>
            </tr>
        </table>
	</td>
</tr>
<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>Home Phone: <span><?php echo $model->home_phone; ?></span></td>
            	<td>Cell Phone: <span><?php echo $model->cell_phone; ?></span></td>
            </tr>
        </table>
				<br>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" height="80px" class="box">
            <tr>
            	<td>
            	Are you legally eligible to work in the United States?<br>
            	<span style="font-size: 12px;">&nbsp;&nbsp;Any offer of employment is subject to the completion of an I-9 form including the proper documentation.</span>
            	</td>
            	<td>
            		<input type="checkbox" <?php if ($model->is_usa_eligible == 'Yes') { echo 'checked'; } ?> class="chkbox"> Yes &nbsp;&nbsp;
            		<input type="checkbox" <?php if ($model->is_usa_eligible == 'No') { echo 'checked'; } ?> class="chkbox"> No
            	</td>
            </tr>
        </table>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%"  height="50px" class="box">
            <tr>
            	<td>
            		Position applying for: <span><?php echo $model->position_applying_for; ?></span>
            	</td>
            	<td>
            		Date you can start:  <span><?php echo dtt($model->date_can_start); ?></span>
            	</td>
            </tr>
        </table>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" height="50px" class="box">
            <tr>
            	<td>
            		Preferred Employment Status:
            	</td>
            	<td>
            		<input type="checkbox" <?php if ($model->preferred_employ_status == 'Full Time') { echo 'checked'; } ?> class="chkbox"> Full Time &nbsp;&nbsp;
            		<input type="checkbox" <?php if ($model->preferred_employ_status == 'Part Time') { echo 'checked'; } ?> class="chkbox"> Part Time
            	
            	</td>
            </tr>
        </table>
	</td>
</tr>

<tr>
	<td>
    	<table width="100%" class="box">
    		<tr>
    			<td colspan="11"><label>Your Availability for Work:</label></td>
    		</tr>
    		<tr style="color: orange;">
    			<td></td>
    			<td>Sunday</td>
    			<td>Monday</td>
    			<td>Tuesday</td>
    			<td>Wednesday</td>
    			<td>Thursday</td>
    			<td>Friday</td>
    			<td>Saturday</td>
    		</tr>
    		<tr>
    			<td><label style="text-align: right;">From:</label></td>
    			<td class="box-text"><?php echo $model->from_sun; ?></td>
    			<td class="box-text"><?php echo $model->from_mon; ?></td>
    			<td class="box-text"><?php echo $model->from_tue; ?></td>
    			<td class="box-text"><?php echo $model->from_wed; ?></td>
    			<td class="box-text"><?php echo $model->from_thu; ?></td>
    			<td class="box-text"><?php echo $model->from_fri; ?></td>
    			<td class="box-text"><?php echo $model->from_sat; ?></td>
    		</tr>
    		<tr>
    			<td><label style="text-align: right;">To:</label></td>
    			<td class="box-text"><?php echo $model->to_sun; ?></td>
    			<td class="box-text"><?php echo $model->to_mon; ?></td>
    			<td class="box-text"><?php echo $model->to_tue; ?></td>
    			<td class="box-text"><?php echo $model->to_wed; ?></td>
    			<td class="box-text"><?php echo $model->to_thu; ?></td>
    			<td class="box-text"><?php echo $model->to_fri; ?></td>
    			<td class="box-text"><?php echo $model->to_sat; ?></td>
    		</tr>
    	</table>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>
            		Special Schedule Requests: <span><?php echo dtt($model->special_sched_request);  ?></span>
            	</td>
            </tr>
        </table>
		   <br>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>
            		High School Attended: <br><span><?php echo $model->hs_attended;  ?></span>
            	</td>
            	<td>
            		City & State: <br><span><?php echo $model->hs_city_state;  ?></span>
            	</td>
            	<td>
            		Graduated? <br><span><?php echo $model->hs_is_graduated;  ?></span>
            	</td>
            </tr>
			</table>
			<table border="0" width="100%" class="box">
            <tr>
            	<td>
            		College or Tech School Attended: <br><span><?php echo $model->college_attended;  ?></span>
            	</td>
            	<td>
            		City & State: <br><span><?php echo $model->college_city_state;  ?></span>
            	</td>
            	<td>
            		Major: <br><span><?php echo $model->college_major;  ?></span>
            	</td>
            </tr>
        </table>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" class="box">
            <tr>
            	<td>
            	Status: &nbsp;&nbsp; <span><?php echo $model->education_status;  ?></span>
            	</td>
            </tr>
        </table>
	</td>
</tr>

<tr>
	<td>
        <table border="0" width="100%" height="200px" class="box">
            <tr valign="top">
            	<td>
            	 List any accomplishments that you feel would benefit you in the position for which you are applying:<br><br>
            	 <span><?php echo trimtext($model->list_of_accomplishment, 70);  ?></span>
            	</td>
            </tr>
        </table>
	</td>
</tr>
<tr>
	<td>
        <table border="0" width="100%" height="180px" class="box">
            <tr valign="top">
            	<td>
            	How did you hear about Engagex? (If someone referred you, please write their name):<br><br>
            	 <span><?php echo trimtext($model->how_do_hear_engagex, 70);  ?></span>
            	</td>
            </tr>
        </table>
	</td>
</tr>

</table>

<?php
for($i=0;$i<18;$i++) {
echo '<p>&nbsp;</p>';
}
?>

	
<div class="text-center" style="font-size:18px;font-weight:bold;">Employment History</div>
<br>
<!-- ONE -->
<table width="100%">
<tr>
	<td>
        <table border="0" width="100%">
            <tr>
							<td class="box">Employer:  <span><?php echo $model->employer1;  ?></span></td>
							<td class="box">Job Title:  <span><?php echo $model->job_title1;  ?></span></td>
            </tr>
            <tr>
							<td class="box">
								Street Address:  <span><?php echo $model->street_address1;  ?></span><br>
								City, State, Zip: <span><?php echo $model->city_state_zip1;  ?></span>
							</td>
							<td class="box">
							Dates of Employment:  <br>
							From:&nbsp;<span><?php echo dtt($model->emp_from_date1);  ?></span>
							To:&nbsp;<span><?php echo dtt($model->emp_to_date1);  ?></span>
							</td>
            </tr>
            <tr>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>Phone Number:&nbsp;<span><?php echo $model->phone1;  ?></span></td>
						</tr>
						<tr>
							<td>Reason for Leaving:&nbsp;<span><?php echo $model->reason1;  ?></span></td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>
								Starting Pay:&nbsp;<span>$<?php echo $model->starting_pay_amount1; ?> Per <?php echo $model->starting_pay_per1; ?></span><br>
							</td>
						</tr>
						<tr>
							<td>
								Ending Pay:&nbsp;
								<span>$<?php echo $model->ending_pay_amount1; ?> Per <?php echo $model->ending_pay_per1; ?></span><br>
							</td>
						</tr>
					</table>
				</td>
            </tr>
        </table>
	</td>
</tr>
</table>
<!-- end: ONE -->
<br>
<!-- TWO -->
<table width="100%">
<tr>
	<td>
        <table border="0" width="100%">
            <tr>
							<td class="box">Employer:  <span><?php echo $model->employer2;  ?></span></td>
							<td class="box">Job Title:  <span><?php echo $model->job_title2;  ?></span></td>
            </tr>
            <tr>
							<td class="box">
								Street Address:  <span><?php echo $model->street_address2;  ?></span><br>
								City, State, Zip: <span><?php echo $model->city_state_zip2;  ?></span>
							</td>
							<td class="box">
							Dates of Employment:  <br>
							From:&nbsp;<span><?php echo dtt($model->emp_from_date2);  ?></span>
							To:&nbsp;<span><?php echo dtt($model->emp_to_date2);  ?></span>
							</td>
            </tr>
            <tr>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>Phone Number:&nbsp;<span><?php echo $model->phone2;  ?></span><br></td>
						</tr>
						<tr>
							<td>Reason for Leaving:&nbsp;<span><?php echo $model->reason2;  ?></span></td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>
								Starting Pay:&nbsp;
								<span>$<?php echo $model->starting_pay_amount2; ?> Per <?php echo $model->starting_pay_per2; ?></span><br>
							</td>
						</tr>
						<tr>
							<td>
								Ending Pay:&nbsp;
								<span>$<?php echo $model->ending_pay_amount2; ?> Per <?php echo $model->ending_pay_per2; ?></span>
							</td>
						</tr>
					</table>
				</td>
            </tr>
        </table>
	</td>
</tr>
</table>
<!-- end: TWO-->
<br>
<!-- THREE -->
<table width="100%">
<tr>
	<td>
        <table border="0" width="100%">
            <tr>
							<td class="box">Employer:  <span><?php echo $model->employer3;  ?></span></td>
							<td class="box">Job Title:  <span><?php echo $model->job_title3;  ?></span></td>
            </tr>
            <tr>
							<td class="box">
								Street Address:  <span><?php echo $model->street_address3;  ?></span><br>
								City, State, Zip: <span><?php echo $model->city_state_zip3;  ?></span>
							</td>
							<td class="box">
							Dates of Employment:  <br>
							From:&nbsp;<span><?php echo dtt($model->emp_from_date3);  ?></span>
							To:&nbsp;<span><?php echo dtt($model->emp_to_date3);  ?></span>
							</td>
            </tr>
            <tr>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>Phone Number:&nbsp;<span><?php echo $model->phone3;  ?></span></td>
						</tr>
						<tr>
							<td>Reason for Leaving:&nbsp;<span><?php echo $model->reason3;  ?></span></td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" class="box">
						<tr>
							<td>
								Starting Pay:&nbsp;
								<span>$<?php echo $model->starting_pay_amount3; ?> Per <?php echo $model->starting_pay_per3; ?></span><br>
							</td>
						</tr>
						<tr>
							<td>
								Ending Pay:&nbsp;
								<span>$<?php echo $model->ending_pay_amount3; ?> Per <?php echo $model->ending_pay_per3; ?></span>
							</td>
						</tr>
					</table>
				</td>
            </tr>
        </table>
	</td>
</tr>
</table>
<!-- end: THREE -->

<div class="text-center">
    <p>I certify that all my answers given provided in this employment application are true and complete to the best of my knowledge.
    I understand that any false or incomplete information may disqualify me from further consideration for employment and may result in my immediate discharge if discovered at a later date.
    </p>
    
    <p>I authorize the investigation of any and all statements contained in this application. I authorize any person, school, current employers and other organization to provided information concerning my previous employment and other relevant information that may be useful in making a hiring decision. I release such persons and organizations from any legal liability in making such statements.
    </p>
    
    <p>I understand and acknowledge that unless otherwise defined by applicable law or written agreement with ENGAGEX, any employment relationship with ENGAGEX is considered "employment at will." This means that I may resign my employment at any time without notice and without reason or justification. Similarly, ENGAGEX may end my employment at any time without notice and for any reason not prohibited by law, or for no reason.
    </p>
</div>

<p>&nbsp;</span>
<p>&nbsp;</span>
	
<table width="100%">
<tr>
	<td>
        <table border="0" width="100%">
            <tr>
            	<td style="text-align:center;"><span><?php echo $model->applicant_signature; ?></span></td>
							<td>&nbsp;</td>
            	<td style="text-align:center;"><?php echo date('m/d/Y', strtotime($model->applicant_signature_date)); ?></span></td>
            </tr>
            <tr>
            	<td style="text-align:center;border-top:1px solid">Applicant Signature</td>
							<td>&nbsp;</td>
            	<td style="text-align:center;border-top:1px solid">Date</td>
            </tr>
        </table>
	</td>
</tr>
</table>


</body>
</html>