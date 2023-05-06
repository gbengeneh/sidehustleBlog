<?php require "sessionstart.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editor.css">
    <title>Document</title>
    <link rel="stylesheet" href="../css/all-posts.css">
</head>
<body>
<?php   
include "../api/db.php";
$posts = mysqli_query($connect, 'SELECT * FROM posts');

?>
<div id="container" > <div><a href="editor.php"><button>Add New post</button> <a href="index.php">Home</a> </a></div>  <div> <a href="login.php"> <button>Log Out</button> </a> </div>  </div> 
<h2>All posts</h2>
<table>
    <thead>
        <td>S/N</td>
        <td>Title</td>
        <td>Content</td>
        <Td>Action</Td>

    </thead>
    <tbody>
        <?php
        foreach ($posts as $post): ?>
    <tr>
        <td><?= $post['id'] ?></td>
        <td><?= $post['title'] ?></td>
        <td><?= $post['content'] ?></td>
        <td>
        <a href="edit-posts.php?ID=<?= $post['id'] ?>"><button>Edit</button></a>
        <a href="delete-posts.php?ID=<?= $post['id'] ?>"><button id="del">Delete</button></a>
        <a href="view-post.php?ID=<?= $post['id'] ?>"><button>View</button></a>

        </td>

    </tr>
    <?php 
    endforeach;
     ?>
    </tbody>
</table>

</body>

</html>