<html>
<head>
    <title> Login System</title>
    <link rel="stylesheet" href="login.css">
</head> 

<body>

  <?php include('header.php');?>


       <div class="logincontainer">
          <div class="loginbox">
             <img src="images/people.png" class="people">
             <h3 style="text-shadow:0px 2px 5px blue;" >Login Here</h3>

       <form action="login_database.php" method="POST">

            <label for="user">Username</label> <br>
            <input type="text" name="username" id="user" placeholder="Enter Username" required oninvalid="this.setCustomValidity('Enter User Name Here')"  oninput="this.setCustomValidity('')" > <br>
                                                             <!-- 'oninvalid' for empty field and 'oninput' for if field have any input then don,t show any message i.e. it is to counter the 'oninvalid' -->


            <label for="pass">Password</label> <br>
            <input type="password" name="password" id="pass" placeholder="Enter Password" required oninvalid="this.setCustomValidity('Enter Password here')"  oninput="this.setCustomValidity('')"  > <br>
  
            <input type="submit" name="login" value="Login"> <br>
            
            <a href="#">Forgot Password?</a> <br>
            <a href="project1_signup.php">Don't have an Account? <span>Sign_up</span></a>

             </form>
             
          </div>   
        

       </div>
       <?php include('footer.php');?>

</body>
</html>