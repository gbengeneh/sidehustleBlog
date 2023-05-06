
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


              <?php
        foreach ($posts as $post): ?>
    
        <!-- <td><?= $post['ID'] ?></td> -->
        <div id="container" >
        <div id="container-item1" ><img src="images/9.png"><br>
            <?= $post['content'] ?> <br> <?= $post['title'] ?> </div>
         <div id="container-item2"> <?= $post['content'] ?> <div class="read">
            <a  href="blog.php?ID=<?= $post['id'] ?>">Read Post</a>
          </div> </div>
        </div>


        <!-- <td>
 

        </td> -->

    
    <?php 
    endforeach;
     ?> -->
    