<?php
/*
	1. Add your php database connection/file here.

	2. Call your function to retreive your data and store it as a variable called $result (this is what we use in this example, you can name it whatever you like).

		ex: $result = fetch_books_array();
*/
?>

<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="author" content="Nick Coats">

	    <!-- styles -->
	    <link href="../css/bootstrap.css" rel="stylesheet">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	    <script src="../js/jquery.dataTables.min.js"></script>
	    <style>
	    body{
		    padding: 10px;
	    }
	    
	    .dataTables_filter {
		    float: right;
		    display: inline-block;
		    width: 300px;
		    padding: 5px 50px 0 0;
	    }
	    
	    .dataTables_info {
		    float: left;
		    padding: 0 0 0 50px;
	    }
	    
	    .dataTables_paginate {
		    float: right;
		    width: 220px;
		    padding-bottom: 30px;
	    }

	    .paginate_disabled_previous,
	    .paginate_disabled_next,
	    .paginate_enabled_next,
	    .paginate_enabled_previous {
		    padding: 0 12px;
	    }

	    .dataTables_length {
		    width: 350px;
		    display: inline-block;
		    padding: 5px 0 0 50px;
	    }

	    th {
		    background-color: #EEEEEE;
	    }
	    </style>

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="../assets/js/html5shiv.js"></script>
	    <![endif]-->

  </head>
  <body>
      <h3 class="span12" style="margin-left: 500px;">My Favorite Books</h3>
      <div style="margin: 10px auto; padding-left: 5px;">
      <table id="example" class="table span12 table-bordered table-hover">
		  <thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Author</th>
				<th>Purhcase</th>
			</tr>
		  </thead>
		  <tbody>
			  <?php foreach($result as $row) { ?> 
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['author']; ?></td>
					<td><?php echo $row['purpose']; ?></td>
				</tr>
				  
			  <?php } ?>   
		  </tbody>
        </table>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').dataTable();
			} );
	</script>
        </div>
   </body>
</html>



