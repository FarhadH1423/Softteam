<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class ContactController extends Controller
{
    public function store(Request $request){
         
        $request->validate([ 
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string'
            ]);
            $input = $request->all();
            
            $mail = new PHPMailer(true);

        try {
            
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'farhadwts@gmail.com';                     // SMTP username
            $mail->Password   = 'ndcgqodzfossvlta';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

             //Recipients
            $mail->setFrom($input['email'],$input['name']);
            $mail->addAddress('farhadwts@gmail.com','Farhad');     // Add a recipient
                          // Name is optional
           
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $input['subject']; 
            $mail->Body    = $input['message']; 
            $mail->send();
            return back();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: ";
        }
        
        
    }
}




