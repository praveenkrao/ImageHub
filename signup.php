<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ContactUs</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php  include('header.php');?>

    <section class="contact">
        <div class="content">
            <h1>SignUp</h1>
            
        </div>
        <div class="container">            
            <div class="contactForm">
                <form>
                   
                    <div class="inputBox">
                        <input type="text" name="" required="required" style="color: aliceblue;">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required" style="color: aliceblue;">
                        <span>User Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required" style="color: aliceblue;">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required" style="color: aliceblue;">
                        <span>Password</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required" style="color: aliceblue;">
                        <span>Confirm Password</span>
                    </div>
                    <div class="inputBox">
                       
                        <input type="submit" name="" required="required" value="Register" style="color: white; text-shadow:2px 2px 3px black; font-weight-bold; letter-spacing:2px;">
                        
                    </div>

                </form>
            </div>
        </div>

    </section>

    <?php  include('footer.php');?>
</body>

</html>