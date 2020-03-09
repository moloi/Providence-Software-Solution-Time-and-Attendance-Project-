<?php
$config = array(
	'userrole' => array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				)
		),
	'user' => array(
			array(
				'field'	=> 'firstName',
				'label' => 'First Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'lastName',
				'label' => 'Last Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'date_of_birth',
				'label' => 'Date of Birth',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'email',
				'label' => 'Email',
				'rules' => 'trim|required|xss_clean|valid_email|is_unique[users.email]'
				),
			array(
				'field'	=> 'mobile',
				'label' => 'Mobile',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'username',
				'label' => 'User Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'password',
				'label' => 'Password',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'cpassword',
				'label' => 'Confirm Password',
				'rules' => 'trim|required|xss_clean|matches[password]'
				)
		),
	'useredit' => array(
			array(
				'field'	=> 'firstName',
				'label' => 'First Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'lastName',
				'label' => 'Last Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'date_of_birth',
				'label' => 'Date of Birth',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'email',
				'label' => 'Email',
				'rules' => 'trim|required|xss_clean|valid_email'
				),
			array(
				'field'	=> 'mobile',
				'label' => 'Mobile',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'username',
				'label' => 'User Name',
				'rules' => 'trim|required|xss_clean'
				)
		),
	'aboutus'	=> array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'description',
				'label' => 'Description',
				'rules' => 'trim|required|xss_clean'
				)
			),
			'quicklinks'	=> array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'path',
				'label' => 'path',
				'rules' => 'trim|required|xss_clean'
				)
			),
	'work_locations'	=> array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'address',
				'label' => 'Address',
				'rules' => 'trim|required|xss_clean'
				)
			
			),
	'events'	=> array(
			array(
				'field'	=> 'title',
				'label' => 'Event Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'description',
				'label' => 'Description',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'administrator_name',
				'label' => 'Administrator Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'start_date',
				'label' => 'Start Date',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'end_date',
				'label' => 'End Date',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'start_time',
				'label' => 'Start Time',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'end_time',
				'label' => 'End Time',
				'rules' => 'trim|required|xss_clean'
				)
			),
	'categories' => array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				)
		),
	'links' => array(
			array(
				'field'	=> 'text',
				'label' => 'Text',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'url',
				'label' => 'URL',
				'rules' => 'trim|required|xss_clean'
				)
		),
	'ads'	=> array(
			array(
				'field'	=> 'description',
				'label' => 'Description',
				'rules' => 'trim|required|xss_clean'
				),
			
			array(
				'field'	=> 'url',
				'label' => 'URL',
				'rules' => 'trim|required|xss_clean'
			)
		),
	'video'	=> array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'event_date',
				'label' => 'Event Date',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'event_time',
				'label' => 'Event Time',
				'rules' => 'trim|required|xss_clean'
				)
		),
	'content'	=> array(
			array(
				'field'	=> 'description',
				'label' => 'Description',
				'rules' => 'trim|required|xss_clean'
				),
			
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				)
			),
	'banners' => array(
			array(
				'field'	=> 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean'
				)

		),
	'contactus'	=> array(
			array(
				'field'	=> 'company_name',
				'label' => 'Company Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_registration_number',
				'label' => 'Registration Number',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_domains',
				'label' => 'Domain',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_VAT_number',
				'label' => 'VAT Number',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_physical_address',
				'label' => 'Physical Address',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_postal_address',
				'label' => 'Postal Address',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_contact_number',
				'label' => 'Contact Number',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_website_address',
				'label' => 'Webiste Address',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'company_email_address',
				'label' => 'Email',
				'rules' => 'trim|required|xss_clean|valid_email'
				),
			array(
				'field'	=> 'contact_name',
				'label' => 'Contact Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'contact_cell_phone_number',
				'label' => 'Cell Phone Number',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field'	=> 'contact_email_address',
				'label' => 'Email Address',
				'rules' => 'trim|required|xss_clean|valid_email'
				)
			)
	);