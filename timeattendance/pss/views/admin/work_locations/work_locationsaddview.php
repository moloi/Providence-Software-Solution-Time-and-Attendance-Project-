<?php 
    $status_array = array(
        '1' => 'Active',
        '2' => 'Inactive'
    );
	$country_array = array("AF" => "Afghanistan",
"AX" => "Åland Islands",
"AL" => "Albania",
"DZ" => "Algeria",
"AS" => "American Samoa",
"AD" => "Andorra",
"AO" => "Angola",
"AI" => "Anguilla",
"AQ" => "Antarctica",
"AG" => "Antigua and Barbuda",
"AR" => "Argentina",
"AM" => "Armenia",
"AW" => "Aruba",
"AU" => "Australia",
"AT" => "Austria",
"AZ" => "Azerbaijan",
"BS" => "Bahamas",
"BH" => "Bahrain",
"BD" => "Bangladesh",
"BB" => "Barbados",
"BY" => "Belarus",
"BE" => "Belgium",
"BZ" => "Belize",
"BJ" => "Benin",
"BM" => "Bermuda",
"BT" => "Bhutan",
"BO" => "Bolivia",
"BA" => "Bosnia and Herzegovina",
"BW" => "Botswana",
"BV" => "Bouvet Island",
"BR" => "Brazil",
"IO" => "British Indian Ocean Territory",
"BN" => "Brunei Darussalam",
"BG" => "Bulgaria",
"BF" => "Burkina Faso",
"BI" => "Burundi",
"KH" => "Cambodia",
"CM" => "Cameroon",
"CA" => "Canada",
"CV" => "Cape Verde",
"KY" => "Cayman Islands",
"CF" => "Central African Republic",
"TD" => "Chad",
"CL" => "Chile",
"CN" => "China",
"CX" => "Christmas Island",
"CC" => "Cocos (Keeling) Islands",
"CO" => "Colombia",
"KM" => "Comoros",
"CG" => "Congo",
"CD" => "Congo, The Democratic Republic of The",
"CK" => "Cook Islands",
"CR" => "Costa Rica",
"CI" => "Cote D'ivoire",
"HR" => "Croatia",
"CU" => "Cuba",
"CY" => "Cyprus",
"CZ" => "Czech Republic",
"DK" => "Denmark",
"DJ" => "Djibouti",
"DM" => "Dominica",
"DO" => "Dominican Republic",
"EC" => "Ecuador",
"EG" => "Egypt",
"SV" => "El Salvador",
"GQ" => "Equatorial Guinea",
"ER" => "Eritrea",
"EE" => "Estonia",
"ET" => "Ethiopia",
"FK" => "Falkland Islands (Malvinas)",
"FO" => "Faroe Islands",
"FJ" => "Fiji",
"FI" => "Finland",
"FR" => "France",
"GF" => "French Guiana",
"PF" => "French Polynesia",
"TF" => "French Southern Territories",
"GA" => "Gabon",
"GM" => "Gambia",
"GE" => "Georgia",
"DE" => "Germany",
"GH" => "Ghana",
"GI" => "Gibraltar",
"GR" => "Greece",
"GL" => "Greenland",
"GD" => "Grenada",
"GP" => "Guadeloupe",
"GU" => "Guam",
"GT" => "Guatemala",
"GG" => "Guernsey",
"GN" => "Guinea",
"GW" => "Guinea-bissau",
"GY" => "Guyana",
"HT" => "Haiti",
"HM" => "Heard Island and Mcdonald Islands",
"VA" => "Holy See (Vatican City State)",
"HN" => "Honduras",
"HK" => "Hong Kong",
"HU" => "Hungary",
"IS" => "Iceland",
"IN" => "India",
"ID" => "Indonesia",
"IR" => "Iran, Islamic Republic of",
"IQ" => "Iraq",
"IE" => "Ireland",
"IM" => "Isle of Man",
"IL" => "Israel",
"IT" => "Italy",
"JM" => "Jamaica",
"JP" => "Japan",
"JE" => "Jersey",
"JO" => "Jordan",
"KZ" => "Kazakhstan",
"KE" => "Kenya",
"KI" => "Kiribati",
"KP" => "Korea, Democratic People's Republic of",
"KR" => "Korea, Republic of",
"KW" => "Kuwait",
"KG" => "Kyrgyzstan",
"LA" => "Lao People's Democratic Republic",
"LV" => "Latvia",
"LB" => "Lebanon",
"LS" => "Lesotho",
"LR" => "Liberia",
"LY" => "Libyan Arab Jamahiriya",
"LI" => "Liechtenstein",
"LT" => "Lithuania",
"LU" => "Luxembourg",
"MO" => "Macao",
"MK" => "Macedonia, The Former Yugoslav Republic of",
"MG" => "Madagascar",
"MW" => "Malawi",
"MY" => "Malaysia",
"MV" => "Maldives",
"ML" => "Mali",
"MT" => "Malta",
"MH" => "Marshall Islands",
"MQ" => "Martinique",
"MR" => "Mauritania",
"MU" => "Mauritius",
"YT" => "Mayotte",
"MX" => "Mexico",
"FM" => "Micronesia, Federated States of",
"MD" => "Moldova, Republic of",
"MC" => "Monaco",
"MN" => "Mongolia",
"ME" => "Montenegro",
"MS" => "Montserrat",
"MA" => "Morocco",
"MZ" => "Mozambique",
"MM" => "Myanmar",
"NA" => "Namibia",
"NR" => "Nauru",
"NP" => "Nepal",
"NL" => "Netherlands",
"AN" => "Netherlands Antilles",
"NC" => "New Caledonia",
"NZ" => "New Zealand",
"NI" => "Nicaragua",
"NE" => "Niger",
"NG" => "Nigeria",
"NU" => "Niue",
"NF" => "Norfolk Island",
"MP" => "Northern Mariana Islands",
"NO" => "Norway",
"OM" => "Oman",
"PK" => "Pakistan",
"PW" => "Palau",
"PS" => "Palestinian Territory, Occupied",
"PA" => "Panama",
"PG" => "Papua New Guinea",
"PY" => "Paraguay",
"PE" => "Peru",
"PH" => "Philippines",
"PN" => "Pitcairn",
"PL" => "Poland",
"PT" => "Portugal",
"PR" => "Puerto Rico",
"QA" => "Qatar",
"RE" => "Reunion",
"RO" => "Romania",
"RU" => "Russian Federation",
"RW" => "Rwanda",
"SH" => "Saint Helena",
"KN" => "Saint Kitts and Nevis",
"LC" => "Saint Lucia",
"PM" => "Saint Pierre and Miquelon",
"VC" => "Saint Vincent and The Grenadines",
"WS" => "Samoa",
"SM" => "San Marino",
"ST" => "Sao Tome and Principe",
"SA" => "Saudi Arabia",
"SN" => "Senegal",
"RS" => "Serbia",
"SC" => "Seychelles",
"SL" => "Sierra Leone",
"SG" => "Singapore",
"SK" => "Slovakia",
"SI" => "Slovenia",
"SB" => "Solomon Islands",
"SO" => "Somalia",
"ZA" => "South Africa",
"GS" => "South Georgia and The South Sandwich Islands",
"ES" => "Spain",
"LK" => "Sri Lanka",
"SD" => "Sudan",
"SR" => "Suriname",
"SJ" => "Svalbard and Jan Mayen",
"SZ" => "Swaziland",
"SE" => "Sweden",
"CH" => "Switzerland",
"SY" => "Syrian Arab Republic",
"TW" => "Taiwan, Province of China",
"TJ" => "Tajikistan",
"TZ" => "Tanzania, United Republic of",
"TH" => "Thailand",
"TL" => "Timor-leste",
"TG" => "Togo",
"TK" => "Tokelau",
"TO" => "Tonga",
"TT" => "Trinidad and Tobago",
"TN" => "Tunisia",
"TR" => "Turkey",
"TM" => "Turkmenistan",
"TC" => "Turks and Caicos Islands",
"TV" => "Tuvalu",
"UG" => "Uganda",
"UA" => "Ukraine",
"AE" => "United Arab Emirates",
"GB" => "United Kingdom",
"US" => "United States",
"UM" => "United States Minor Outlying Islands",
"UY" => "Uruguay",
"UZ" => "Uzbekistan",
"VU" => "Vanuatu",
"VE" => "Venezuela",
"VN" => "Viet Nam",
"VG" => "Virgin Islands, British",
"VI" => "Virgin Islands, U.S.",
"WF" => "Wallis and Futuna",
"EH" => "Western Sahara",
"YE" => "Yemen",
"ZM" => "Zambia",
"ZW" => "Zimbabwe");

    $id = $title = $latitude = $mobile = $longitude = $country = $address = $contact_number =  $email =  $website_address =  $company_logo =  $start_date =  $end_date =  $url = $status = "";
    $error = isset($error)?$error:'';
    if(isset($work_locations) && count($work_locations) > 0)
    {
        foreach ($work_locations as $key => $array) {
            $id             = $array['id']?$array['id']:'';
			$country   = $array['country']?$array['country']:'';
            $title   = $array['title']?$array['title']:'';
			$mobile   = $array['mobile']?$array['mobile']:'';
            $address    = $array['address']?$array['address']:'';
			$latitude   = $array['latitude']?$array['latitude']:'';
			$longitude   = $array['longitude']?$array['longitude']:'';
            $status         = $array['status']?$array['status']:'';
        }
    }

    $set_status = $status?$status:set_value("status",$this->input->post("status"));
	$set_country = $country?$country:set_value("country",$this->input->post("country"));
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Add Work Locations
            </h1>
            <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                        <?php if(isset($id) && $id != ""): ?>
                            <h3 class="box-title">Edit Work Location</h3>
                        <?php else: ?>
                            <h3 class="box-title">Add Work Location</h3>
                        <?php endif; ?>
                            <h3 class="box-title" style="float:right"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."work_locations" ?>"><i class="fa fa-toggle-left"></i> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="box">
                            <!-- form start -->
                            <?php $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>"); ?>
                            <?php if(isset($id) && $id != ""): ?>
                                <form role="form" action="<?php echo HTTP_PATH."work_locations/edit/".$id; ?>" method="post" enctype="multipart/form-data">
                            <?php else: ?>
                                <form role="form" action="<?php echo HTTP_PATH."work_locations/form"; ?>" method="post" enctype="multipart/form-data">
                            <?php endif; ?>
                                <div class="box-body">
								<div class="form-group">
                                        <label for="exampleInputEmail1">Country</label>
                                        <?php echo form_dropdown('country',$country_array,$set_country,'class="form-control" id="country"'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $title?$title:set_value('title') ?>">
                                        <?php if(form_error('title')) echo form_error('title'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea class="form-control" rows="3" id="address" name="address" placeholder="Address"><?php echo $address?$address:set_value('address') ?></textarea>
                                        <?php if(form_error('address')) echo form_error('address'); ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $mobile?$mobile:set_value('mobile') ?>">
                                        <?php if(form_error('mobile')) echo form_error('mobile'); ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">GPS Coordinates</label>
                                       
                                    </div>
                                    <div class="col-xs-6">
		                                <div class="form-group">
		                                    <label for="exampleInputEmail1">Latitude</label>
                                            <div class="input-group">
                                                
    		                                     <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude" value="<?php echo $latitude?$latitude:set_value('latitude') ?>">
                                        <?php if(form_error('latitude')) echo form_error('latitude'); ?>
                                            </div>
		                                </div>
										</div>
									<div class="col-xs-6">
	                                    <div class="form-group">
		                                    <label for="exampleInputEmail1">Longitude</label>
                                            <div class="input-group">
                                                
    		                                     <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude" value="<?php echo $longitude?$longitude:set_value('longitude') ?>">
                                        <?php if(form_error('longitude')) echo form_error('longitude'); ?>
                                            </div>
		                                </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <?php echo form_dropdown('status',$status_array,$set_status,'class="form-control" id="status"'); ?>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box -->
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>