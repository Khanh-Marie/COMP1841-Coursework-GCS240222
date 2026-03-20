<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="post.css">
        <title><?=$title?></title>
    </head>
    <body>
     <div style="position: fixed; top: 10px; right: 10px; z-index: 1000;">
        <button onclick="toggleDarkMode()" id="darkModeToggle">Dark Mode</button>
    </div>
        <header><h1>Student Post Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="post.php">Post</a></li>
                <li><a href="addpost.php">Add a new post</a></li>
                <li><a href="user.php">User List</a></li>
                <li><a href="adduser.php">Add a new user</li>
                <li><a href="module.php">Module List</a></li>
                <li><a href="addmodule.php">Add a new module</li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="admin/login/Login.html">Admin Login</a></li>
            </ul>
        </nav>
        <script>
            if (localStorage.getItem('darkMode') === 'enabled' || 
                (window.matchMedia('(prefers-color-scheme: dark)').matches && !localStorage.getItem('darkMode'))) {
                document.body.classList.add('dark-mode');
                updateButtonText();
            }

            function toggleDarkMode() {
                document.body.classList.toggle('dark-mode');
            
                if (document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('darkMode', 'enabled');
                } else {
                    localStorage.setItem('darkMode', 'disabled');
                }
            
                updateButtonText();
            }

            function updateButtonText() {
                const button = document.getElementById('darkModeToggle');
                if (document.body.classList.contains('dark-mode')) {
                 button.textContent = 'Light Mode';
                } else {
                    button.textContent = 'Dark Mode';
                }
            }
        </script>

        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>