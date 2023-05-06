
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikedi blog: HomePage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <nav>

        <input type="checkbox" id="check">
        <label for="check" class=checkbtn>
            <br>
            <img id="menu-img" src="Images/hamburger2.png" alt="menu">
        </label>

        <p class="p">IKEDI</p>

        <ul class="linked">
            <a href="index.php"><li class="links">Home</li></a>
            <a href="all-posts.php"><li class="links">Blog</li></a>
            <li class="links">Contact Us</li>
        </ul>

         <ul class="formpage">
            <li><a href="../login.html"> <button class="button">Login</button> </a></li>
            <li><a href="../signup.html"> <button class="button">Sign up</button> </a></li>
         </ul>

    </nav>

    <div id="b4post">

    <div class="subscribe-box">
       <br><br>

    <div class="subscribe-input">
        <input type="email" id="email" name="email" placeholder="Enter your email"/>
        <button type="submit">Subscribe</button>
    </div>

    </div>

    <div class="rightflow">
        <p>
          New product features, the latest in technology, solutions and updates
        </p>
    </div>

    </div>

    <div id="posts">


  <?php   
include "../api/db.php";
$posts = mysqli_query($connect, 'SELECT * FROM posts');

?>
<!-- <a href="editor.html"><button>Add New post</button> </a>
<h2>All posts</h2> -->

    <!-- <thead>
        <td>S/N</td>
        <td>Title</td>
        <td>Content</td>
        <Td>Action</Td>

    </thead> -->
    
        <?php
        foreach ($posts as $post): ?>
    
        <!-- <td><?= $post['ID'] ?></td> -->
        <div id="container" >
        <div id="container-item1" ><img src="img/img2.jpg"><?= $post['content'] ?> <br> <?= $post['title'] ?> </div>
         <div id="container-item2"> <?= $post['content'] ?> <div class="read">
            <a  href="blog.php?ID=<?= $post['id'] ?>">Read Post</a>
          </div> </div>
        </div>


        <!-- <td>
 

        </td> -->

    
    <?php 
    endforeach;
     ?>
    

      </div>
    </div>
  </main>


    </div> 


    <br><br><br><br><br>

    <footer>
    
      <h1 align="center"> Contact Us </h1>
      <hr><br>
          E-mail: info@ikediblog.com  
      <br><br>
          Phone: +2347019016283
      <br><br>
          Adress: 6, 4671 Sugar Camp Road,
          Minnesota,
          55060
      <br><br>
       <br>
         <h2> Our Social Media Handles </h2>
         <br>
         <table width="300px">
         <td> <img src="images/icons8-facebook-48.png" alt="Facebook icon by Icons8" width="30"> </td> <td> ikedi_blog </td>
       <tr></tr>
         <td> <img src="images/icons8-instagram-48.png" alt="Instagram icon by Icons8" width="30"> </td>  <td> ikedi_blog </td>
       <tr></tr>
         <td> <img src="images/icons8-twitter-48.png" alt="Twitter icon by Icons8" width="30"> </td> <td> ikedi_blog </td>
       <tr></tr>
         <td> <img src="images/icons8-youtube-48.png" alt="Whatsappp icon by Icons8" width="30"> </td> <td> ikedi_blog </td>
         </table>
       <br><br>

         <div class="footer-input">
          <center>
          <h2 align="center">SEND US A MESSAGE</h2>
          
          <input class="field" type="text" name="name" id="email" placeholder="Enter your name">
          <br>
          <br>
          <input class="field" type="email" name="email" id="email" placeholder="example@gmail.com">
          <br><br>

          <input type="text" name="text" id="textareafoot" placeholder="Enter your message">
          <br><br>
          <button id="footersub">Submit</button>
        </center>
        <br>
         </div>
         <br>

         &copy; Copyright 2023
   </footer>


    
</body>
</html>