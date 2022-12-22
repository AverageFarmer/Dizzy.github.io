<!DOCTYPE html>
<html>
<style>
    /* Add some basic styling */
    body {
        font-family: sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        color: #fff;
        background-color: #000
    }
    
    h1, h2, h3 {
        text-align: center;
    }



    
    /* Style the navigation menu */
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
    }
    
    nav ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    nav li {
        margin: 0 10px;
    }
    
    nav a {
        color: #fff;
        text-decoration: none;
    }
    
    /* Style the video embeds */
    iframe {
        display: block;
        margin: 20px auto;
        border: 1px solid #ccc;
    }
</style>
<nav>
    <h1>My Portfolio</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="work.php">My Work</a></li>
        <li><a href="contact.php">About Me</a></li>
        <!--<li><a href="contact.php">Contact Me</a></li>-->
    </ul>
</nav>
<head>
	<title>My Work</title>
</head>
<body>
	<h1>My Work</h1>
	<h2>Video Production</h2>

	<!-- Embed a video -->
	<div class="video-container">
		<p style = "text-align:center">Flight Mechanics</p>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/Pdh3oY2LK5k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	
	<!-- Embed another video -->
	<div class="video-container">
		<p style = "text-align:center"> Description of the second video goes here.</p>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/AXXzbILVfRo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	
	<!-- Additional work sections can go here -->
</body>
</html>
