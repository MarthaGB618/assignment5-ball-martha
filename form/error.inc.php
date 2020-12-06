<style type="text/css">
	* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
	}

body {
  background: lightblue;
}

.container {
    max-width: 900px;
    text-align: center;
    margin: 40px auto 60px;
}

header {
  text-align: center;
  background: gray;
  padding: 20px;
}
nav ul li {
  display: inline;
}
nav a {
  color: white;
  background: blue;
  padding: 5px;
}
footer {
  background: #333;
  color: white;
  text-align: center;
  padding: 20px;
}
</style>

<header>
  <nav>
    <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="crafts.html">Crafts</a></l1>
    <l1><a href="blog.html">Blog</a></l1>
    </ul>
  </nav>
</header>

<div class="container">

<h1>Missing fields</h1>

<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

	<footer>
	  <p>Martha Ball did this</p>
	</footer>
