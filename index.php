<?php

/**
 *
 * jquery_datatables.php
 *
 * Auth: Nick Coats
 *
 * This file is referenced in an instructional blog post
 * on nickcoats.com covering basic usage of jQuery dataTables.
 *
 * See README for usage instructions.
 *
 */


/**
 * Get data array
 */

$locations = array( 
				array("id" => "1", 	"city" => "San Francisco", 	"country" => "United States", 	"continent" => "North America"),
				array("id" => "2", 	"city" => "Singapore", 		"country" => "Singapore", 		"continent" => "Asia"),
				array("id" => "3", 	"city" => "Orlando", 		"country" => "United States", 	"continent" => "North America"),
				array("id" => "4", 	"city" => "San Diego", 		"country" => "United States", 	"continent" => "North America"),
				array("id" => "5", 	"city" => "Paris", 			"country" => "France", 			"continent" => "Europe"),
				array("id" => "6", 	"city" => "Nice", 			"country" => "France", 			"continent" => "Europe"),
				array("id" => "7", 	"city" => "London", 		"country" => "England", 		"continent" => "Europe"),
				array("id" => "8", 	"city" => "Chicago", 		"country" => "United States", 	"continent" => "North America"),
				array("id" => "9", 	"city" => "Sydney", 		"country" => "Australia", 		"continent" => "Australia"),
				array("id" => "10", "city" => "Tokyo", 			"country" => "Japan", 			"continent" => "Asia"),
				array("id" => "11", "city" => "Buenos Aires", 	"country" => "Argentina", 		"continent" => "South America"),
				array("id" => "12", "city" => "Geneva", 		"country" => "Switzerland", 	"continent" => "Europe"),
				array("id" => "13", "city" => "Berlin", 		"country" => "Germany", 		"continent" => "Europe"),
				array("id" => "14", "city" => "Cape Town", 		"country" => "South Africa", 	"continent" => "Africa"),
				array("id" => "15", "city" => "Vancouver", 		"country" => "Canada", 			"continent" => "North America"),
				array("id" => "16", "city" => "Miami", 			"country" => "United States", 	"continent" => "North America"),
			);

?>


<!DOCTYPE html>
<html lang="en">
    
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	
	<title>jQuery dataTables & PHP</title>

	<!-- Bootstrap CSS styles -->
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	
	<!-- dataTables Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">

	<!-- jQuery -->
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	
	<!-- jQuery dataTables -->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	
	<!-- dataTables & Boostrap -->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
  </head>
    
  <body>
      
      <div class="container">
      	
      	<h3 class="text-center">World Cities</h3>
      
      </div>
      
      
      <div class="container">
      	
      	<table id="locations" class="table span12 table-bordered table-hover">
	  		
	  		<thead>
	  	  		<tr>
	  	  			<th>Id</th>
	  	  			<th>Title</th>
	  	  			<th>Author</th>
	  	  			<th>Genre</th>
	  	  		</tr>
	  	    </thead>
	  	    
	  	    <tbody>
	  	  	  
	  	  	  <?php foreach($locations as $row) { ?> 
	  	  		
	  	  		<tr>
	  	  			<td><?php echo $row['id']; ?></td>
	  	  			<td><?php echo $row['city']; ?></td>
	  	  			<td><?php echo $row['country']; ?></td>
	  	  			<td><?php echo $row['continent']; ?></td>
	  	  		</tr>
	  	  		  
	  	  	  <?php } ?>
	  	  	     
	  	    </tbody>
	  	    
      	</table>
	  	
	  	<!-- dataTables Script -->    
	  	<script type="text/javascript">
	  	    $(document).ready(function() {
	  	    	$('#locations').dataTable();
	  	    	} );
	  	</script>
		
      </div>
   
   </body>

</html>



