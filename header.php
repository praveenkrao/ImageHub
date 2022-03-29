<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link rel="stylesheet" href="header.css">

<script>
    var x=document.getElementsByClassName('item');
    function toggleup(){
        x.classList.add('active');
    }

 
</script>

</head>
<body>
    <nav>
        <ul class="menu" id="navbar">
            <li class="logo"><a href="#navbar">Image Hub</a></li>
            <li class="item"><a href="gallery.php">Home</a></li>
            <li class="item"><a href="#">Gallery</a></li>
            <li class="item"><a href="#contact" >Contact</a></li>
            <!-- <li class="item"><a href="#">About</a></li> -->
            <li class="item"><a href="upload.php">Upload</a></li>
            <li class="item button"><a href="login.php">Login</a></li>
            <li class="item button secondary"><a href="signup.php">Signup</a></li>
            <li class="toggle" onclick="toggleup();"><span class="bars"></span></li>
            
        </ul>
    </nav>



</body>
</html>