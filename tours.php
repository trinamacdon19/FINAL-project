<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
	<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"> 	
	<title>Tourism Website</title> 
	<link rel="stylesheet" type="text/css" href="tours.css"> 
</head> 
<body> 
		<?php include('header.php'); ?> 

	<main>
		<section id="tours"> 

		<form method="GET"> 
			<label for="search">Search:</label> 
			<input type="text" id="search" name="search"> 
			<input type="submit" value="Search">

		</form> 

		</div> 
		<div class="tours"> 
			<div class="places"> 
				<img src="image/place.jpg" style = "width: 350px; height: 250px; border-radius: 12px;"> 
				<br> 
				<br> 
			</div> 
			<div class="places"> 
				<img src="image/resort.jpg" style = "width: 350px; height: 250px; border-radius: 12px;"> 
				<br> 
				<br> 
			</div> 
			<div class="places"> 
				<img src="image/restaurant.JPG" style = "width: 350px; height: 250px; border-radius: 12px;"> 
				<br> 
				<br> 
			</div>
 
		</div> 
	</div> 
	

			<?php
			if (isset($_GET['search'])){ 
			$search = $_GET['search']; 
			$xml = simplexml_load_file('index.xml'); 
			$found = false; 
			foreach ($xml->blog as $blog) { 
				if (stripos($blog->title, $search) !== false) { 
				    echo '<div class="blog">'; 
				    echo '<h1>' . $blog->title . '</h1>'; 

				    echo '<z><strong>Category:</strong> ' . $blog->category . '</z>'; 
				    echo '<z><strong>Date:</strong> ' . $blog->date . '</z>'; 
				    echo '</div>'; echo '<z>' . $blog->content . '</z>'; 					    
				    $found = true;

				    } 
				}
				if (!$found) { 
				    echo '<p>No blogs found.</p>'; 
				}

				//Display the search metadata 
				echo '<p>Showing result for search: ' . $search . '</p>'; 

			 } else { 
				$xml = simplexml_load_file('index.xml'); 
				foreach ($xml->blog as $blog) { 
					echo '<div class="blog">'; 
					echo '<h1>' . $blog->title . '</h1>'; 

					echo '<z><strong>Category:</strong> ' . $blog->category . '</z>'; 
					echo '<z><strong>Date:</strong> ' . $blog->date . '</z>'; 
					echo '<z>' . $blog->content . '</z>'; 
					echo '</div>'; 
				   } 
			  }
			  ?> 
		  </section> 
		</main> 
</body> 
</html>
