<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>

    <link rel="stylesheet" href="contactus.css">
</head>
<body>

    <div class="contact_container" id="contact">
        <div class="simple">
            <h2>Hey Users</h2>
            <p>Click the button below to contact us</p>
        </div>

        <div class="contact_form" id="pop-up">   <!--this has been made Invisible by default-->
            <p><button class="btn1" onclick="toggledown();"">X</button></p> <br>
              
            <form action="#" ">
                <label for="name">Full Name: </label> <br>
                  <input type="text" id="name" name="name" placeholder="Full Name" required  maxlength="30"> <br>
                <label for="email">Email ID: </label> <br>
                  <input type="email" id="email" name="email" placeholder="Email id" required> <br>
                <label for="query">Your Query: </label> <br>
                  <textarea name="query" id="query"  required  maxlength="200" ></textarea >
                 
             </form>

           <button class="btn2" onclick="toggleupsuccess();" >Submit</button>   <!--this has been made Invisible by default-->
        </div>


        <div class="success_message" id="success" style="border-radius: 6px; padding-top:30px ;display: flex; flex-direction: column; align-items: center;">
            <h1 style="color: aliceblue; text-align: center;">Message sent Succeessfully</h1> 
            <button onclick="toggledownsuccess();" style="background-color: crimson; padding: 12px 24px; font-size: 16px; margin-top: 30px; border-radius: 6px;">Ok</button>
        </div>
       

        <button class="btn3" onclick="toggleup();">Contact Us</button>
    </div>




<script>
var x= document.getElementById('pop-up');         

function toggleup(){
    x.classList.add('popup_form');
}

function toggledown(){
    x.classList.remove('popup_form');
}

var y= document.getElementById('success');

function toggleupsuccess(){
    toggledown();
    y.classList.add('popup_success');
}


function toggledownsuccess(){
    y.classList.remove('popup_success');
}
</script>



</body>
</html>