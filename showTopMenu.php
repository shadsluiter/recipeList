<!-- 
This is a partial page.  The purpose is to (1) Start the HTML page (2) set the CSS styles (3) Show the app title
(4) show the navigation menu.
 -->

<html>
<title>Recipe Lists</title>
<head>
<link rel="stylesheet" type="text/css" href="custom-styles.css">
</head>
</html>
<body>
<h1>Recipe Lists</h1>
<div class="menu-container">
<?php
if (!isset($_SESSION['username'])):
?>
<span class="menu-item"><a href="login.html">Login</a></span>
<?php else: ?>
<span class="menu-item">Welcome <?php echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></span>
<?php endif; ?>

| <span class="menu-item"><a href="index.php?pageNumber=1">Search</a> </span> | <span class="menu-item"><a href="index.php?pageNumber=2">Add New Recipe</a></span>
</div>





</body>
