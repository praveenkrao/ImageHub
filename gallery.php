<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="gallery.css">
</head>
<body>

  <?php include('header.php'); ?>


<?php     
           $servername = "localhost";
           $username = "root";
           $password = "";
           $database = "webathon";

           $con = mysqli_connect($servername, $username, $password, $database);

      
           $query = " select * from img_details order by sno desc";
           $displayquery = mysqli_query($con, $query);
 ?>







<div class="gallery_container">
  <div class="gallery_display">

   <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                   <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count" >124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3"> <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>

                    
                </div>
            </div> </a>


    <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                 <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                    <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>
 
                    <p class="para2"><button class="readmore" name="readmore">Read More</button></p>
 
                    <p class="para3" > <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                     
                </div>
            </div> </a>


   <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                    <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>
 
                    <p class="para2"><button class="readmore" name="readmore">Read More</button></p>
 
                    <p class="para3" > <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                     
                </div>
            </div> </a>


    <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3"> <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                </div>
            </div> </a>

        
    <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3"> <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                </div>
            </div> </a>


     <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3" > <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                </div>
            </div> </a>

      
      <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3" > <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                </div>
            </div> </a>


        <?php $result = mysqli_fetch_array($displayquery); ?>
            <a href="#"> <div class="photo_container"> 

                <div class="photo">
                  <img src="<?php echo $result['image'];?>" alt="pic1">
                </div>
                <div class="photo_details">
                    <h3 class="caption"><?php echo $result['caption'];?></h3>

                   <p class="para1"><button class="like_btn">like</button>  <span class="like_count">124 likes </span>   <button class="comment_btn">Comment</button>  </p>

                   <p class="para2"><button class="readmore" name="readmore">Read More</button></p>

                   <p class="para3" > <Span class="upload_time">28 Mar 2022</Span> <span class="user_name">By: Amrit Singh</span></p>
 
                </div>
            </div> </a>
            
        </div>


        <div class="gallery_btn">
           <div class="pgbtn"><a href="#"><button class="prev" name="prev" ><- Prev</button></a></div>
           <div class="pgbtn"><a href="#"><button class="next" name="next" >Next -></button></a></div>
        </div>

    </div>

<?php include('contactus.php'); ?>
<?php include('footer.php'); ?>
</body>
</html>