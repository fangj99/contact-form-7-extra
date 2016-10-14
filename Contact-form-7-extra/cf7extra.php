<?php 

/*
Plugin Name: Contact Form 7 Extra
Plugin URI: https://github.com/fangj99/contact-form-7-extra
Description: 
Author: lance
Version: 0.1b
Author URI:  https://github.com/fangj99/contact-form-7-extra
*/


//change email receipent by user selection in the radio box of contact form
add_action("wpcf7_before_send_mail", "wpcf7_do_something");

function wpcf7_do_something($WPCF7_ContactForm)
{

    if (469 == $WPCF7_ContactForm->id()) {

        //Get current form
        $wpcf7      = WPCF7_ContactForm::get_current();

        // get current SUBMISSION instance
        $submission = WPCF7_Submission::get_instance();

        // Ok go forward
        if ($submission) {

            // get submission data
            $data = $submission->get_posted_data();

            // nothing's here... do nothing...
            if (empty($data))
                return;

			//my_log_file( $data ,$data );
			//my_log_file(array_values( $data['your-query'])[0] ,$data );
			
			//my_log_file( $WPCF7_ContactForm , '' );
			
            // do some replacements in the cf7 email body
            $mail         = $wpcf7->prop('mail');
			
			$query = array_values( $data['your-query'])[0];
			
			if ($query == "Partnership") {
				$mail['recipient'] = "Partnership <partnership@mycompany.com>";
			}elseif ($query == "Press"){
				$mail['recipient'] = "Press <press@mycompany.com>";
			}elseif ($query == "Developers"){
				$mail['recipient'] = "Developers <developers@mycompany.com>";
			}			
			
			//my_log_file($mail, '' );
			
            // Find/replace the "[your-name]" tag as defined in your CF7 email body
            // and add changes name
            //$mail['body'] = str_replace('[your-name]', $name . '-tester', $mail['body']);

            // Save the email body
            $wpcf7->set_properties(array(
                "mail" => $mail
            ));

            // return current cf7 instance
            return $wpcf7;
        }
    }
}


/* Log to File
 * Description: Log into system php error log, usefull for Ajax and stuff that FirePHP doesn't catch
 */
function my_log_file( $msg, $name = '' )
{
    // Print the name of the calling function if $name is left empty
    $trace=debug_backtrace();
    $name = ( '' == $name ) ? $trace[1]['function'] : $name;

    $error_dir = '/tmp/php_error.log';
    $msg = print_r( $msg, true );
    $log = $name . "  |  " . $msg . "\n";
    error_log( $log, 3, $error_dir );
	//error_log(print_r());
	
}







