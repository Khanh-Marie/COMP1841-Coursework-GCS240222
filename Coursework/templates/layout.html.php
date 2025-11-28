<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="post.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Student Post Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="post.php">Post</a></li>
                <li><a href="user.php">User List</a></li>
                <li><a href="module.php">Module List</a></li>
                <li><a href="addpost.php">Add a new post</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="admin/login/Login.html">Admin Login</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>