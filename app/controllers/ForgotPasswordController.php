<?php 
require_once('app/config/database.php'); 
require_once('app/models/AccountModel.php');
class ForgotPasswordController {
    public function index() {
        require 'app/views/account/forgot_password_form.php';
    }

    public function submit() {
        if (isset($_POST["email"]) && !empty($_POST["email"])) {
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            if (!$email) {
                $error = "Invalid email address.";
                require 'app/views/account/forgot_password_form.php';
                return;
            }

            $userModel = new AccountModel((new Database())->getConnection());
            // if (!$userModel->emailExists($email)) {
            //     $error = "No user is registered with this email address.";
            //     require 'app/views/account/forgot_password_form.php';
            //     return;
            // }

            // Tạo key và insert vào bảng reset_temp
            $key = md5(time() . $email . rand());
            $expDate = date("Y-m-d H:i:s", strtotime("+1 day"));
            $userModel->insertPasswordReset($email, $key, $expDate);

            // Gửi email
            $resetLink = "http://yourdomain.com/reset-password?key=$key&email=$email";
            $subject = "Password Recovery";
            $body = "Click here to reset your password: <a href=\"$resetLink\">$resetLink</a>";

            $this->sendEmail($email, $subject, $body);

            echo "<p>An email has been sent to reset your password.</p>";
        } else {
            $error = "Please enter your email.";
            require 'app/views/account/forgot_password_form.php';
        }
    }

    private function sendEmail($to, $subject, $body) {
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.example.com";
        $mail->SMTPAuth = true;
        $mail->Username = "noreply@example.com";
        $mail->Password = "yourpassword";
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->From = "noreply@example.com";
        $mail->FromName = "MyStore";
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if (!$mail->Send()) {
            error_log("Mailer Error: " . $mail->ErrorInfo);
        }
    }
}