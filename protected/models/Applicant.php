<?php

/**
 * This is the model class for table "tbl_applicant".
 *
 * The followings are the available columns in table 'tbl_applicant':
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $mid_initial
 * @property string $created_date
 * @property string $email
 * @property string $home_phone
 * @property string $cell_phone
 * @property string $is_usa_eligible
 * @property string $position_applying_for
 * @property string $date_can_start
 * @property string $preferred_employ_status
 * @property string $special_sched_request
 * @property string $hs_attended
 * @property string $hs_city_state
 * @property string $hs_is_graduated
 * @property string $college_attended
 * @property string $college_city_state
 * @property string $college_major
 * @property string $education_status
 * @property string $list_of_accomplishment
 * @property string $how_do_hear_engagex
 * @property string $from_sun
 * @property string $from_mon
 * @property string $from_tue
 * @property string $from_wed
 * @property string $from_thu
 * @property string $from_fri
 * @property string $from_sat
 * @property string $to_sun
 * @property string $to_mon
 * @property string $to_tue
 * @property string $to_wed
 * @property string $to_thu
 * @property string $to_fri
 * @property string $to_sat
 * @property string $employer1
 * @property string $job_title1
 * @property string $street_address1
 * @property string $city_state_zip1
 * @property string $emp_from_date1
 * @property string $emp_to_date1
 * @property string $phone1
 * @property string $reason1
 * @property double $starting_pay_amount1
 * @property string $starting_pay_per1
 * @property double $ending_pay_amount1
 * @property string $ending_pay_per1
 * @property string $employer2
 * @property string $job_title2
 * @property string $street_address2
 * @property string $city_state_zip2
 * @property string $emp_from_date2
 * @property string $emp_to_date2
 * @property string $phone2
 * @property string $reason2
 * @property double $starting_pay_amount2
 * @property string $starting_pay_per2
 * @property double $ending_pay_amount2
 * @property string $ending_pay_per2
 * @property string $employer3
 * @property string $job_title3
 * @property string $street_address3
 * @property string $city_state_zip3
 * @property string $emp_from_date3
 * @property string $emp_to_date3
 * @property string $phone3
 * @property string $reason3
 * @property double $starting_pay_amount3
 * @property string $starting_pay_per3
 * @property double $ending_pay_amount3
 * @property string $ending_pay_per3
 * @property string $applicant_signature
 * @property string $applicant_signature_date
 */
class Applicant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		    array('last_name, first_name, created_date, email, is_usa_eligible, position_applying_for, date_can_start, preferred_employ_status, hs_attended, hs_city_state, hs_is_graduated, education_status, list_of_accomplishment, applicant_signature, applicant_signature_date', 'required'),
			array('starting_pay_amount1, ending_pay_amount1, starting_pay_amount2, ending_pay_amount2, starting_pay_amount3, ending_pay_amount3', 'numerical'),
			array('last_name, first_name, email, position_applying_for, hs_attended, college_attended, college_major, employer1, job_title1, employer2, job_title2, employer3, job_title3', 'length', 'max'=>244),
			array('mid_initial', 'length', 'max'=>1),
			array('home_phone, cell_phone, preferred_employ_status, education_status, phone1, reason1, phone2, reason2, phone3, reason3, applicant_signature', 'length', 'max'=>154),
			array('is_usa_eligible, hs_is_graduated', 'length', 'max'=>6),
			array('hs_city_state, college_city_state, how_do_hear_engagex, street_address1, city_state_zip1, street_address2, city_state_zip2, street_address3, city_state_zip3', 'length', 'max'=>254),
			array('list_of_accomplishment', 'length', 'max'=>300),
			array('from_sun, from_mon, from_tue, from_wed, from_thu, from_fri, from_sat, to_sun, to_mon, to_tue, to_wed, to_thu, to_fri, to_sat', 'length', 'max'=>24),
			array('starting_pay_per1, ending_pay_per1, starting_pay_per2, ending_pay_per2, starting_pay_per3, ending_pay_per3', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, last_name, first_name, mid_initial, created_date, email, home_phone, cell_phone, is_usa_eligible, position_applying_for, date_can_start, preferred_employ_status, special_sched_request, hs_attended, hs_city_state, hs_is_graduated, college_attended, college_city_state, college_major, education_status, list_of_accomplishment, how_do_hear_engagex, from_sun, from_mon, from_tue, from_wed, from_thu, from_fri, from_sat, to_sun, to_mon, to_tue, to_wed, to_thu, to_fri, to_sat, employer1, job_title1, street_address1, city_state_zip1, emp_from_date1, emp_to_date1, phone1, reason1, starting_pay_amount1, starting_pay_per1, ending_pay_amount1, ending_pay_per1, employer2, job_title2, street_address2, city_state_zip2, emp_from_date2, emp_to_date2, phone2, reason2, starting_pay_amount2, starting_pay_per2, ending_pay_amount2, ending_pay_per2, employer3, job_title3, street_address3, city_state_zip3, emp_from_date3, emp_to_date3, phone3, reason3, starting_pay_amount3, starting_pay_per3, ending_pay_amount3, ending_pay_per3', 'safe', 'on'=>'search'),
		    array('email', 'email'),
		    array('created_date, date_can_start, emp_from_date1, emp_to_date1, emp_from_date2, emp_to_date2, emp_from_date3, emp_to_date3, applicant_signature_date', 'date'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	public function beforeSave() {
	    if ($this->isNewRecord) {}
	    
	    $this->created_date = new CDbExpression('NOW()');
	    $this->date_can_start = date('Y-m-d H:i:s', strtotime($this->date_can_start));
	    $this->special_sched_request = date('Y-m-d H:i:s', strtotime($this->special_sched_request));
	    $this->emp_from_date1 = date('Y-m-d H:i:s', strtotime($this->emp_from_date1));
	    $this->emp_to_date1 = date('Y-m-d H:i:s', strtotime($this->emp_to_date1));
	    $this->emp_from_date2 = date('Y-m-d H:i:s', strtotime($this->emp_from_date2));
	    $this->emp_to_date2 = date('Y-m-d H:i:s', strtotime($this->emp_to_date2));
	    $this->emp_from_date3 = date('Y-m-d H:i:s', strtotime($this->emp_from_date3));
	    $this->emp_to_date3 = date('Y-m-d H:i:s', strtotime($this->emp_to_date3));
	    $this->applicant_signature_date = date('Y-m-d H:i:s', strtotime($this->applicant_signature_date));
	    
	    return parent::beforeSave();
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
		    'id' => 'ID',
		    'last_name' => 'Last Name',
		    'first_name' => 'First Name',
		    'mid_initial' => 'Middle Initial',
		    'created_date' => "Today's Date",
		    'email' => 'Email Address:',
		    'home_phone' => 'Home Phone:',
		    'cell_phone' => 'Cell Phone:',
		    'is_usa_eligible' => 'Are you legally eligible to work in the United States?',
		    'position_applying_for' => 'Position applying for:',
		    'date_can_start' => 'Date you can start:',
		    'preferred_employ_status' => 'Preferred Employment Status:',
		    'from_sun' => 'Sunday',
		    'from_mon' => 'Monday',
		    'from_tue' => 'Tuesday',
		    'from_wed' => 'Wednesday',
		    'from_thu' => 'Thursday',
		    'from_fri' => 'Friday',
		    'from_sat' => 'Saturday',
		    'to_sun' => 'Sunday',
		    'to_mon' => 'Monday',
		    'to_tue' => 'Tuesday',
		    'to_wed' => 'Wednesday',
		    'to_thu' => 'Thursday',
		    'to_fri' => 'Friday',
		    'to_sat' => 'Saturday',
		    'special_sched_request' => 'Special Schedule Requests:',
		    'hs_attended' => 'High School Attended:',
		    'hs_city_state' => 'City & State',
		    'hs_is_graduated' => 'Graduated?',
		    'college_attended' => 'College or Tech School Attended:',
		    'college_city_state' => 'City & State',
		    'college_major' => 'Major:',
		    'education_status' => 'Status:',
		    'list_of_accomplishment' => 'List any accomplishment that you feel would benefit you in the position for which you are applying:',
		    'how_do_hear_engagex' => 'How did you hear about Engagex? (if someone referred you, please write there name)',
		    
			'employer1' => 'Employer #1:',
			'job_title1' => 'Job Title:',
			'street_address1' => 'Street Address:',
			'city_state_zip1' => 'City, State, Zip:',
			'emp_from_date1' => 'From:',
			'emp_to_date1' => 'To:',
			'phone1' => 'Phone Number:',
			'reason1' => 'Reason for Leaving:',
			'starting_pay_amount1' => 'Starting Pay:',
			'starting_pay_per1' => 'Per',
			'ending_pay_amount1' => 'Ending Pay:',
			'ending_pay_per1' => 'Per',
		    
			'employer2' => 'Employer #2:',
			'job_title2' => 'Job Title:',
			'street_address2' => 'Street Address:',
			'city_state_zip2' => 'City, State, Zip:',
			'emp_from_date2' => 'From:',
			'emp_to_date2' => 'To:',
			'phone2' => 'Phone Number:',
			'reason2' => 'Reason:',
			'starting_pay_amount2' => 'Starting Pay:',
			'starting_pay_per2' => 'Per',
			'ending_pay_amount2' => 'Ending Pay:',
			'ending_pay_per2' => 'Per',
		    
			'employer3' => 'Employer #3:',
			'job_title3' => 'Job Title:',
			'street_address3' => 'Street Address:',
			'city_state_zip3' => 'City, State, Zip:',
			'emp_from_date3' => 'From:',
			'emp_to_date3' => 'To:',
			'phone3' => 'Phone Number:',
			'reason3' => 'Reason:',
			'starting_pay_amount3' => 'Starting Pay:',
			'starting_pay_per3' => 'Per',
			'ending_pay_amount3' => 'Ending Pay:',
			'ending_pay_per3' => 'Per',
		    
		    'applicant_signature' => 'Applicant Signature',
		    'applicant_signature_date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('mid_initial',$this->mid_initial,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('cell_phone',$this->cell_phone,true);
		$criteria->compare('is_usa_eligible',$this->is_usa_eligible,true);
		$criteria->compare('position_applying_for',$this->position_applying_for,true);
		$criteria->compare('date_can_start',$this->date_can_start,true);
		$criteria->compare('preferred_employ_status',$this->preferred_employ_status,true);
		$criteria->compare('special_sched_request',$this->special_sched_request,true);
		$criteria->compare('hs_attended',$this->hs_attended,true);
		$criteria->compare('hs_city_state',$this->hs_city_state,true);
		$criteria->compare('hs_is_graduated',$this->hs_is_graduated,true);
		$criteria->compare('college_attended',$this->college_attended,true);
		$criteria->compare('college_city_state',$this->college_city_state,true);
		$criteria->compare('college_major',$this->college_major,true);
		$criteria->compare('education_status',$this->education_status,true);
		$criteria->compare('list_of_accomplishment',$this->list_of_accomplishment,true);
		$criteria->compare('how_do_hear_engagex',$this->how_do_hear_engagex,true);
		$criteria->compare('from_sun',$this->from_sun,true);
		$criteria->compare('from_mon',$this->from_mon,true);
		$criteria->compare('from_tue',$this->from_tue,true);
		$criteria->compare('from_wed',$this->from_wed,true);
		$criteria->compare('from_thu',$this->from_thu,true);
		$criteria->compare('from_fri',$this->from_fri,true);
		$criteria->compare('from_sat',$this->from_sat,true);
		$criteria->compare('to_sun',$this->to_sun,true);
		$criteria->compare('to_mon',$this->to_mon,true);
		$criteria->compare('to_tue',$this->to_tue,true);
		$criteria->compare('to_wed',$this->to_wed,true);
		$criteria->compare('to_thu',$this->to_thu,true);
		$criteria->compare('to_fri',$this->to_fri,true);
		$criteria->compare('to_sat',$this->to_sat,true);
		$criteria->compare('employer1',$this->employer1,true);
		$criteria->compare('job_title1',$this->job_title1,true);
		$criteria->compare('street_address1',$this->street_address1,true);
		$criteria->compare('city_state_zip1',$this->city_state_zip1,true);
		$criteria->compare('emp_from_date1',$this->emp_from_date1,true);
		$criteria->compare('emp_to_date1',$this->emp_to_date1,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('reason1',$this->reason1,true);
		$criteria->compare('starting_pay_amount1',$this->starting_pay_amount1);
		$criteria->compare('starting_pay_per1',$this->starting_pay_per1,true);
		$criteria->compare('ending_pay_amount1',$this->ending_pay_amount1);
		$criteria->compare('ending_pay_per1',$this->ending_pay_per1,true);
		$criteria->compare('employer2',$this->employer2,true);
		$criteria->compare('job_title2',$this->job_title2,true);
		$criteria->compare('street_address2',$this->street_address2,true);
		$criteria->compare('city_state_zip2',$this->city_state_zip2,true);
		$criteria->compare('emp_from_date2',$this->emp_from_date2,true);
		$criteria->compare('emp_to_date2',$this->emp_to_date2,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('reason2',$this->reason2,true);
		$criteria->compare('starting_pay_amount2',$this->starting_pay_amount2);
		$criteria->compare('starting_pay_per2',$this->starting_pay_per2,true);
		$criteria->compare('ending_pay_amount2',$this->ending_pay_amount2);
		$criteria->compare('ending_pay_per2',$this->ending_pay_per2,true);
		$criteria->compare('employer3',$this->employer3,true);
		$criteria->compare('job_title3',$this->job_title3,true);
		$criteria->compare('street_address3',$this->street_address3,true);
		$criteria->compare('city_state_zip3',$this->city_state_zip3,true);
		$criteria->compare('emp_from_date3',$this->emp_from_date3,true);
		$criteria->compare('emp_to_date3',$this->emp_to_date3,true);
		$criteria->compare('phone3',$this->phone3,true);
		$criteria->compare('reason3',$this->reason3,true);
		$criteria->compare('starting_pay_amount3',$this->starting_pay_amount3);
		$criteria->compare('starting_pay_per3',$this->starting_pay_per3,true);
		$criteria->compare('ending_pay_amount3',$this->ending_pay_amount3);
		$criteria->compare('ending_pay_per3',$this->ending_pay_per3,true);
		$criteria->compare('applicant_signature',$this->applicant_signature,true);
		$criteria->compare('applicant_signature_date',$this->applicant_signature_date,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Applicant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
