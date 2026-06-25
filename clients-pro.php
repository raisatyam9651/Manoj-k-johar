<?php

    // Error log
	/* ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); */
	

	// Constants
	define('CLIENTS_PRO_API_URL', 'https://clientspro.app:453/integrationAPI/');
	define('CLIENTS_PRO_API_USERNAME', 'max');
	define('CLIENTS_PRO_API_PASSWORD', 'max123');
	define('CLIENTS_PRO_ESTABLISHMENT_ID', '1006');
	define('CLIENTS_PRO_SUCCESS_PAGE', '/success/');
	define('CLIENTS_PRO_FAILURE_PAGE', '/failure/');
	define('TO_ADMIN_EMAIL', 'srinivas.h@yourpracticeonline.co.in');
	define('TO_CLIENT_EMAIL', 'contact@theaesthetic.in,mjohar2@gmail.com');
	//define('TO_CLIENT_EMAIL', 'nethravathirypo@gmail.com');
	// define('TO_CLIENT_EMAIL', 'srinivas.ypo@gmail.com');
	define('FROM_NAME', 'Dr. Manoj K Johar');
	define('FROM_EMAIL', 'no-reply@yourpracticeonline.net');
	define('SUBJECT', 'Online Enquiry Form - Dr. Manoj K. Johar');
	define('ELASTIC_EMAIL_KEY', '2ce4c53a-f50a-4b8e-bd7e-0b605baf8546');
	//define('GOOGLE_CAPTCHA_SITE_KEY', '6Ley4dYqAAAAAB6EPPXD-YvSegmOeGdOn-Gg0ddV');
//	define('GOOGLE_CAPTCHA_SECRET', '6Ley4dYqAAAAAIxfD6C3Dl01rsYMAPpnezOWOLnu');
	
	define('GOOGLE_CAPTCHA_SITE_KEY', '6LdyCigsAAAAAADj1RZZF53CizXuX0fpJD00SVT2');
	define('GOOGLE_CAPTCHA_SECRET', '6LdyCigsAAAAABVotArBWOO8q6-OOiQ6UpfB8rzh');

	/**
	 * Call REST API to get data
	 *
	 * This function is used to make REST API call
	 * 
	 * @param string $endpoint_name Name of API endpoint
	 * @param string $token Access token required for API call
	 * @param array $ary_data Array with input parameters
	 * @return string JSON output of API call.
	 * @author Srinivas H | 09-Oct-2023
	*/	
	function callAPI($endpoint_name, $token, $ary_data = array()) {

		// Variables
		$postvars = '';
		$ary_headers = array();
		$api_endpoint = CLIENTS_PRO_API_URL.$endpoint_name;

		// Build post variables
		if($token == '') {
			$postvars = http_build_query($ary_data);							
		}else{
			$postvars = json_encode($ary_data);
			$ary_headers = array(
				                  'Content-Type: application/json',
				                  'x-access-token: '.$token,                    
				                  'Content-Length: '.strlen($postvars)
			                    );													
		}

		// Initialize curl
		$ch = curl_init();

		// Setup the request
		curl_setopt($ch, CURLOPT_URL, $api_endpoint);

		// Set POST method for curl
		curl_setopt($ch, CURLOPT_POST, true);

		// Set fields for curl post
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

		// Set curl post headers
		if(!empty($ary_headers)) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $ary_headers);
		}
		
		// Returns the data/output as a string instead of raw data
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Set curl connection timeout
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        // Enable or disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

		// Get stringified data/output
		$response = curl_exec($ch);

		// Uncomment these lines for further debugging		
		/* 
		   print curl_error($ch);
		   $info = curl_getinfo($ch);
		   print_r($info);
		*/		   
	
		// Close curl resource to free up system resources
		curl_close($ch);
				
		// Return output
		return $response;
	}

	/**
	 * Redirect to specified URL
	 *
	 * This function is used to redirect the user to specified URL
	 * 
	 * @param string $url - URL to which the user should be redirected to
	 * @author Srinivas H | 09-Oct-2023
	*/
	function redirectTo($url) {
		header("Location: {$url}");
		exit;
	}	

	/**
	 * Convert date to mm/dd/yyyy format
	 *
	 * This function is used to convert date to mm/dd/yyyy format
	 * 
	 * @param string $input_date - Date in mm/dd/yyyy format
	 * @return string $output_date - Date in dd/mm/yyyy format
	 * @author Srinivas H | 09-Oct-2023
	*/
	function convertDate($input_date) {
		$ary_output_date = explode("/", $input_date);
		$output_date = $ary_output_date[1]."/".$ary_output_date[0].'/'.$ary_output_date[2];
        return $output_date;
	}

	/**
	 * Get message content
	 *
	 * This function is used to get the message content
	 * 
	 * @param void
	 * @author Srinivas H | 28-Nov-2023
	*/
	function getMessageContent($ary_msg_data) {
		$str_message = 'Hello,<br/><br/>Please note the following details of new enquiry received through the Online Enquiry form.<br/><br/><table cellpadding="5" cellspacing="0" align="left" width="75%" style="border:solid 1px #666; border-radius:5px; font:normal 14px Arial, Helvetica, sans-serif">
							<tr>
								<td style="text-align:left; font-size:20px; font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#ffffff; background:#096A9D" colspan="3">Online Enquiry</td>
							</tr>
							<tr>
								<td colspan="3" height="10"></td>
							</tr>
							<tr style="background-color:#eee;">
								<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Name:</strong>
							</td>
								<td width="89%" align="left" valign="top">'.$ary_msg_data['Title'].' '.$ary_msg_data['Fname'].' '.$ary_msg_data['Lname'].'</td>
							</tr>
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Email:</strong>
							</td>
							<td width="89%" align="left" valign="top">'.$ary_msg_data['Email'].'</td>
							</tr>
							<tr style="background-color:#eee;">
								<td width="1%">&nbsp;</td>
								<td align="left" valign="top" width="40%">
								<strong>Mobile:</strong></td>
							<td width="89%" align="left" valign="top">'.$ary_msg_data['Mobile'].'</td>
							</tr>
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Where did you hear about us:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Source'].'</td>
							</tr>
							<tr style="background-color:#eee;">
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Referred by:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Refby'].'</td>
							</tr>
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Doctor:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Doctor'].'</td>
							</tr>
							<tr style="background-color:#eee;">
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Date of Birth:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['DOB'].'</td>
							</tr> 
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Gender:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Sex'].'</td>
							</tr>
							<tr style="background-color:#eee;">
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Nationality:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Nationality'].'</td>
							</tr>
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Address:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Address'].'</td>
							</tr> 
							<tr style="background-color:#eee;">
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Services:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Services'].'</td>
							</tr> 
							<tr>
							<td width="1%">&nbsp;</td>
							<td align="left" valign="top" width="40%">
								<strong>Comments:</strong>
							</td>
							<td align="left" width="89%" valign="top">'.$ary_msg_data['Comments'].'</td>
							</tr>           
							<tr style="background-color:#eee;">  
							<td colspan="3" height="10"></td>
							</tr>
							<tr>
							<td style="text-align:center; font-size:11px; color:#ffffff; background:#096A9D" colspan="3">This mail is sent via Dr. Manoj K Johar, Online Enquiry form</td>
							</tr>
						</table>';
        return $str_message;
	}
	
	/**
	 * Get error message content
	 *
	 * This function is used to get the error message content
	 * 
	 * @param void
	 * @author Srinivas H | 28-Nov-2023
	*/
	function getErrorMessageContent($err_msg, $post_data) {
		$str_message = "Hello,<br/><br/>Please note that the Online Enquiry form submission failed.<br/><br/><b>API Response:</b><br/>".$err_msg."<br><br><b>Post Data</b><br>".json_encode($post_data);
		return $str_message;
	}	

	/**
	 * Send email
	 *
	 * This function is used to send email
	 * 
	 * @param string $to - To email address
	 * @return string $from_name - Email Sender Name
	 * @return string $subject - Subject of email 
	 * @return string $body_html - HTML content of email
	 * @return string $body_text - Text content of email
	 * @return string $attachments - File attachments
	 * @return string $reply_to - Reply to email address
	 * @author Srinivas H | 28-Nov-2023
	*/	
	function sendElasticEmail($to, $subject, $body_html, $body_text='', $attachments=array(), $reply_to='') {
	
		$return_value = false;
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		
		// API URL
		$url = 'https://api.elasticemail.com/v2/email/send';
		
		try{
				// Construct post array 
				$post = array('from' => FROM_EMAIL,
							  'fromName' => FROM_NAME,
							  'apikey' => ELASTIC_EMAIL_KEY,
							  'subject' => $subject,
							  'bodyHtml' => $body_html,                     
							  'bodyText' => $body_text,
							  'to' => $to,
							  'reply_to' => $reply_to,
							  'isTransactional' => false);
							  						  
				// Attach files if available
				if(!empty($attachments)) {
					foreach($attachments as $attach => $file) {
						if((isset($file['file_name']) && $file['file_name'] != '') && (isset($file['file_name_with_full_path']) && $file['file_name_with_full_path'] != '')) {						
							$post['file_'.$attach] = new CurlFile($file['file_name_with_full_path'], $finfo->file($file['file_name_with_full_path']), $file['file_name']);
						}	
					}					
				}
									
				// Execute Curl for sending mail
				$ch = curl_init();					
				curl_setopt_array($ch, array(
					CURLOPT_URL => $url,
					CURLOPT_POST => true,
					CURLOPT_POSTFIELDS => $post,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_HEADER => false,
					CURLOPT_SSL_VERIFYPEER => false
				));
				
				$result=curl_exec($ch);
				curl_close ($ch);
				
				$return_value = true; // success   
		}
		catch(Exception $ex){
			$return_value = false;  // failed
		}
		
		return $return_value;
	}
	

	/**
	 * curl_call
	 *
	 * This function is used to verify google captcha response
	 * 
	 * @param string $url - URL to be called
	 * @author Srinivas H | 14-Feb-2025
	 *
	*/	
	function curl_call($url){
			$ch = curl_init();				
			curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => null,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_TIMEOUT => 0
		));
		
		$retur_data=curl_exec($ch);
		curl_close($ch);

		return $retur_data;
	}

$is_error = 0;	
if(isset($_POST['submit']) && $_POST['submit'] != "") {
	
	// Read POST data
	$ary_post_data = $_POST;

	// Redirect to failure page
	if(empty($ary_post_data)) {
		redirectTo(CLIENTS_PRO_FAILURE_PAGE);
	}

	if($_POST['Fname'] == '') {
		$is_error = 1;
	}elseif($_POST['Lname'] == '') {
		$is_error = 1;
	}elseif($_POST['Mobile'] == '') {
		$is_error = 1;
	}elseif($_POST['Email'] == '') {
		$is_error = 1;
	}elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['Email'])){
		$is_error = 1;
	}elseif($_POST['Source'] == '') {
		$is_error = 1;
	}elseif($_POST['Doctor'] == '') {
		$is_error = 1;
	}elseif($_POST['DOB'] == '') {
		$is_error = 1;
	}elseif($_POST['Sex'] == '') {
		$is_error = 1;
	}elseif($_POST['Nationality'] == '') {
		$is_error = 1;
	}elseif($_POST['Address'] == '') {
		$is_error = 1;
	}elseif($_POST['Services'] == '') {
		$is_error = 1;
	}elseif($_POST['Comments'] == '') {
		$is_error = 1;
	}

	// Read recaptcha response
	$response = $_POST['g-recaptcha-response'];
	$verifyResponse = curl_call('https://www.google.com/recaptcha/api/siteverify?secret='.GOOGLE_CAPTCHA_SECRET.'&response='.$response);
	$responseData = json_decode($verifyResponse);
	
	if((isset($responseData) && $responseData->success == 1) && ($is_error == 0)) {

		// Credentials
		$credentials = array('Username'=>CLIENTS_PRO_API_USERNAME,
							'Password'=>CLIENTS_PRO_API_PASSWORD,
							'EstablishmentID'=>CLIENTS_PRO_ESTABLISHMENT_ID);

		// Make API call to get access token
		$json_response = callAPI('', '', $credentials);
		$ary_response = json_decode($json_response, true);

		// Read access token
		$access_token = isset($ary_response['token']) ? $ary_response['token'] : '';

		// Call the NewLead API
		if($access_token != '') {
			$ary_post_data['EstablishmentID'] = CLIENTS_PRO_ESTABLISHMENT_ID;
			$ary_post_data['DOB'] = ($ary_post_data['DOB'] != '') ? convertDate($ary_post_data['DOB']) : $ary_post_data['DOB'];
			// $ary_post_data['Mobile'] = (isset($ary_post_data['Countrycode']) && isset($ary_post_data['Mobile'])) ? trim($ary_post_data['Countrycode'].$ary_post_data['Mobile']) : '';
			
			// Make API call to insert New Lead data
			$json_response = callAPI('NewLead', $access_token, $ary_post_data);
			$ary_response = json_decode($json_response, true);
			
			if(isset($ary_response['ClientProID ']) && $ary_response['ClientProID '] != '') {
				
				// Send email to client
				$msg_html = getMessageContent($ary_post_data);
				sendElasticEmail(TO_CLIENT_EMAIL, SUBJECT, $msg_html);

				// Redirect to success page
				redirectTo(CLIENTS_PRO_SUCCESS_PAGE);

			}else{

				// Send email to admin
				$err_msg = $json_response;
				$err_msg_html = getErrorMessageContent($err_msg, $ary_post_data);
				sendElasticEmail(TO_ADMIN_EMAIL, 'API Error occured - '.SUBJECT, $err_msg_html);

				// Redirect to error page
				redirectTo(CLIENTS_PRO_FAILURE_PAGE);

			}
		}else{

			// Send email to admin
			$err_msg = $json_response;
			$err_msg_html = getErrorMessageContent($err_msg, $ary_post_data);
			sendElasticEmail(TO_ADMIN_EMAIL, 'Access Token Error occured - '.SUBJECT, $err_msg_html);

			// Redirect to error page
			redirectTo(CLIENTS_PRO_FAILURE_PAGE);
		}

	}else{

			// Redirect to error page
			redirectTo(CLIENTS_PRO_FAILURE_PAGE);
	}
}else{

	// Redirect to error page
	redirectTo(CLIENTS_PRO_FAILURE_PAGE);	
}
?>