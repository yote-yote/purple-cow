<?php
    // Connection to the database
    require('db_conn.php');
	require_once('sms.php');

    // Getting File from the Form Input
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile1 = $_POST['mobile1'];
    $mobile2 = $_POST['mobile2'];
    $mobile3 = $_POST['mobile3'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $employed = $_POST['employed'];
    $company = $_POST['company'];
    $region = $_POST['region'];
    $municipality = $_POST['municipality'];
    $street = $_POST['street'];
    $house = $_POST['house'];
    $fields = $_POST['fields'];
  	$field_research = (in_array('research', $fields) ? 1 : 0);
  	$field_pr = (in_array('pr', $fields) ? 1 : 0);
  	$field_animation  = (in_array('animation', $fields) ? 1 : 0);
  	$field_event = (in_array('event', $fields) ? 1 : 0);
  	$field_software = (in_array('software', $fields) ? 1 : 0);
  	$field_mobile = (in_array('mobile', $fields) ? 1 : 0);
  	$field_website = (in_array('website', $fields) ? 1 : 0);
  	$field_seo = (in_array('seo', $fields) ? 1 : 0);
  	$field_smm = (in_array('smm', $fields) ? 1 : 0);
  	$field_audio = (in_array('audio', $fields) ? 1 : 0);
  	$field_video = (in_array('video', $fields) ? 1 : 0);
  	$field_photography = (in_array('photography', $fields) ? 1 : 0);
  	$field_print = (in_array('print', $fields) ? 1 : 0);
  	$field_creative = (in_array('creative', $fields) ? 1 : 0);

    /**
     * Returns A clean format for Database handling later
     * @param $phone_number
     * @return mixed
     */
    function clean_phone($phone_number){
        $clean = str_replace(array('+','(',')','-',' '),'',$phone_number);
        return $clean;
    }

    $mobile1 = clean_phone($mobile1);
    $mobile2 = clean_phone($mobile2);
    $mobile3 = clean_phone($mobile3);

    // Sql it to the database
   	$q = "INSERT INTO `commission_agents` (
		`id`,
		`first_name`,
		`last_name`,
		`mobile1`,
		`mobile2`,
		`mobile3`,
		`email1`,
		`email2`,
		`employed`,
		`company`,
		`region`,
		`municipality`,
		`street`,
		`house`,
		`field_research`,
		`field_pr`,
		`field_animation`,
		`field_event`,
		`field_software`,
		`field_mobile`,
		`field_website`,
		`field_seo`,
		`field_smm`,
		`field_audio`,
		`field_video`,
		`field_photography`,
		`field_print`,
		`field_creative`
		)
		VALUES (
		NULL,
		'$first_name',
		'$last_name',
		'$mobile1',
		'$mobile2',
		'$mobile3',
		'$email1',
		'$email2',
		'$employed',
		'$company',
		'$region',
		'$municipality',
		'$street',
		'$house',
		'$field_research',
		'$field_pr',
		'$field_animation',
		'$field_event',
		'$field_software',
		'$field_mobile',
		'$field_website',
		'$field_seo',
		'$field_smm',
		'$field_audio',
		'$field_video',
		'$field_photography',
		'$field_print',
		'$field_creative')
		";

	// SMS
	$smsMessage = new SMSRequest();
	$smsMessage->senderAddress = 'Purple Cow';
	$smsMessage->address = $mobile1;
	$smsMessage->message = 'Thank You ' .$first_name.' for Joining Us. We will contact you shortly. Feel free to call us: +255XXXXXXX';

	$smsMessage2 = new SMSRequest();
	$smsMessage2->senderAddress = 'Purple Cow';
	$smsMessage2->address = '255XXXXXXX';
	$smsMessage2->message = $first_name.' '.$last_name.' just joined our Commission Agent Program. Contact him on : '.$mobile1;
	// Perform a query, check for error
	if (!mysqli_query($db,$q)){
  		echo("Error description: " . mysqli_error($con));
  	}

    if($q){
        echo 'success';
		$smsMessageSendResult = $smsClient->sendSMS($smsMessage);
		$smsMessageSendResult = $smsClient->sendSMS($smsMessage2);
    }else{
        echo 'failed';
    }


?>
