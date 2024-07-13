<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP- Class <> 8 - CONTACT FORM </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <div class="container">
            <h1>Contact Us</h1>

            <form action="<?php echo $_server['PHP_SELP']?>" method="POST">

            <div class="form">

                </label>Full Name</label>
                <input type="text" name="name" placeholder="Your Full Name" value="<?php if(isset($name)) echo $name;?>">

                <span>
                    <?php
                        if(isset($error['name'])){
                                echo $server['name'];
                        }
                    ?>
                </span>

            </div>

            <div class="form">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Your Subject" value="<?php if(isset($subject)) echo $subject;?>">

                <span>
                    <?php
                    
                        if(isset($error['subject'])){
                            echo $error['subject'];
                        }
                    
                    ?>
                </span>

            </div>

            <div class="form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email" value="<?php if(isset($email)) echo $email;?>">

                <span>
                    <?php
                    
                        if(isset($error['email'])){
                            echo $error['email'];
                        }
                    
                    ?>
                </span>

            </div>

            <div class="form">
                <label>Message</label>
                <textarea name="message" placeholder="Your Message" value="<?php if(isset($meassage)) echo $meassage;?>" ></textarea>
                <span>
                    <?php
                    
                        if(isset($error['meassage'])){
                            echo $error['meassage'];
                        }
                    
                    ?>
                </span>

            </div>

            <div class="form">

            <input type="submit" name="btn" value="Send Meassage">

            </div>

            </form>

            <!-- PHP -->
        <?php
        
            if(isset($_POST['btn'])){
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $email = $_POST['email'];
                $message = $_POST['message'];
            }

            //Error Checking

            $error = [];

            if(empty($_POST['name'])){
                $error['name'] = 'Insert Your Name';
            }
            if(empty($_POST['subject'])){
                $error['subject'] = 'Insert Your Subject';
            }
            if(empty($_POST['email'])){
                $error['email'] = 'Insert Your Email';
            }
            if(empty($_POST['message'])){
                $error['message'] = 'Insert Your Message';
            }
           
            //Mail Executed

            $to = 'fahadbinakter480@gmail.com';
            $form = 'Form' . $email;
            $subject = 'Suject';
            $body = "Name :" .$name. "Subject:" .$subject."Email:" .$email."Message".$message;
            
            //Checking

            $check = mail($,$form,$body);
                if($check == true){
                    echo 'Send Successfully'
                }else{
                    echo 'Not Send';
                }
        
        ?>
        

        </div>

</body>
</html>