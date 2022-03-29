<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Image Uploading</title>
    
  
    
    

</head>

<body>
       
   
<?php
           
           $servername = "localhost";
           $username = "root";
           $password = "";
           $database = "webathon";

          $con = mysqli_connect($servername, $username, $password, $database);
          
       
                       
         if( isset($_POST['submit'])) {    
          
                 $caption=mysqli_real_escape_string($con,$_POST['caption']);
                 $image=$_FILES['image']; 
                 
                 $filename =$image['name'];
                 $fileerror=$image['error'];
                 $filetmpname=$image['tmp_name'];

                 $new_image = preg_replace("/\s+/" , "_" , $filename);   // Space is replaced with underscore

                //  echo " <br> Name: ".$new_image;

                 $new_image =  date("mjYHis").$new_image;    // name is unique with dateamd time concation
                
                //  echo " <br>new Name: ".$new_image;


                 $fileext=explode('.' , $filename);
                 $filecheck = strtolower(end($fileext));

                 $fileextstored = array('jpg' , 'png' , 'jpeg');

                 if(in_array( $filecheck , $fileextstored) ){

                  $destinationfile = 'upload/'.$new_image;

                  move_uploaded_file($filetmpname, $destinationfile );

                 $query = "insert into img_details(caption , image ) values('$caption', '$destinationfile')";

                 $result = mysqli_query($con, $query);
                  
                 header("Location:gallery.php");

                

                 }
          }
 
?> 
   
 <form action="upload.php" method="POST" enctype="multipart/form-data">
      <table>
             <tr>
                 <td>Caption: </td> 
                 <td><input type="text" name="caption" placeholder="Enter Caption for Image" maxlength="60" required ></td>
             </tr>
             <tr>
                 <td>File: </td> 
                 <td><input type="file" name="image" required></td>
             </tr>
           
      </table>
<input type="Submit" name="submit" Value="Upload">
    </form>

     
 </body>
 </html>