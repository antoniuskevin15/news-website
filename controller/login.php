<?php 
    session_start();
    include "include/db_connect.php";

    if(isset($_POST['submit'])) {
        $password = $_POST['password'];
        $username = $_POST['username'];
        $email = $_POST['username'];
        if(isset($_POST['g-recaptcha-response']))
            $captcha = $_POST['g-recaptcha-response'];
        

        if(!$captcha){
            echo"<script> alert('Check the captcha form!');
                window.location='?view=login';</script>";
        }
        
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeeVbkcAAAAAKE1ONYMeUI_r0_XZwJXy6RcQYzW"."&response=".$captcha);  
        $response = json_decode($response, true); 
        
        if(!empty($response["success"])) {  
            echo 'Thanks for your message!';  
        } else {  
            echo 'Error';  
        } 

        $statement = $conn->prepare("SELECT * from users WHERE username=? OR email=?");
        $statement->bind_param("ss", $username, $email);
        $statement->execute();
        $result = $statement->get_result();

        if($result->num_rows > 0) {
            $account = $result->fetch_assoc();

            if(password_verify($password, $account['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $account['id'];
                $_SESSION['userType'] = $account['type'];

                if($account['type'] == 'admin') {
                    echo "
                        <script>
                            alert('Welcome, Admin!');
                            document.location.href = '?view=dashboard';
                        </script>
                    ";
                }

                echo "
                    <script>
                        alert('Login Success!');
                        document.location.href = '?view=home';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Incorrect Email or Password! Please try again...');
                        document.location.href = '?view=login';
                    </script>
                ";
            }
        }
    }

    include "view/login.php";
?>