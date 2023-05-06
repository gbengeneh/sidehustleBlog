
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
            <a href="ikedi/aa-posts.php"><li class="links">Blog</li></a>
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
           
        <div id="post1">
          <img class="img" src="Images/1.jpg" alt="image1" />
          <h2>UX Review presentations</h2>
          <p>
            How do you create compelling presentations that wow your colleagues
            and impress your managers? Look no further.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post2">
          <img class="img" src="Images/2.jpg" alt="image1" />
          <h2>Best books on scaling your startup</h2>
          <p>
            This collection of the best startup books for scaling your startup
            are packed full with valuable insights and advice.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post3">
          <img class="img" src="Images/3.jpg" alt="image1" />
          <h2>Building your API Stack</h2>
          <p>
            The rise of RESTful APIs has been met by a rise in tools for
            creating, testing, and managing. Here's our best practices.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post4">
          <img class="img" src="Images/4.jpg" alt="image1" />
          <h2>Bill Walsh leadership lessons</h2>
          <p>
            Like to know the secrets of transforming a 2-14 team into a 3x Super
            Bowl winning Dynasty? Dive deep into leadership.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post5">
          <img class="img" src="Images/5.jpg" alt="image1" />
          <h2>PM mental models</h2>
          <p>
            Mental models are simple expressions of complex processes or
            relationships. Here's how you can use them as a PM.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post6">
          <img class="img" src="Images/6.jpg" alt="image1" />
          <h2>What is Wireframing?</h2>
          <p>
            Introduction to Wireframing and its Principles. Learn from the best
            in the industry with tips, advice, and best practices.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post7">
          <img class="img" src="Images/7.jpg" alt="image1" />
          <h2>How collaboration makes us better designers</h2>
          <p>
            Collaboration can make our teams stronger, and our individual
            designs better. Our team breaks down how it works.
          </p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>

        <div id="post8">
          <img class="img" src="Images/8.jpg" alt="image1" />
          <h2>Our top 10 Javascript frameworks to use</h2>
          <p>JavaScript frameworks make development easy with</p>
          <h4>Read Post <span class="arrow-top"></span></h4>
        </div>
        
        <div id="post8">
            <img class="img" src="Images/9.png" alt="image1" />
            <h2>The best online learning platform</h2>
            <p>SideHustle a.k.a Terra is the platform you should consider if you're 
                looking to learn a skill online
            </p>
            <h4>Read Post <span class="arrow-top"></span></h4>
          </div>

<!-- <!--   <?php   
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
    / 
    

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