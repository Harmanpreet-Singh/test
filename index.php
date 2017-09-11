<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment 5</title>

<!-- LOAD STYLES -->
<link href="css/styles.css" rel="stylesheet" type="text/css" />

<!-- LOAD MODERNIZR Library -->
<script src="js/modernizr.custom.39410.js" type="text/javascript"> </script>
</head>

<body>

<div id="wrapper">

	<!-- COMBINE HEADER AND NAV INTO ONE PHP FILE AND INCLUDE IT HERE: -->
	<?php include('includes/header-nav.php') ?>
  
  	<!-- BEGIN CONTENT -->
    <section id="content">

    	<?php $name = '<strong>Harmanpreet Singh</strong>'; ?>

    	<p>Hello my name is <?php echo "$name"; ?></p>

    	<p>

<?php
# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  print $user;
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());
# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, "SELECT relname FROM pg_stat_user_tables WHERE schemaname='public'");
print "<pre>\n";
if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Tables in your database:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
}
print "\n";
?>
	    
	    
	    </p>
	    
    	<p>Sincerely,<br>
	<strong><?php echo "$name"; ?></strong>
    	</p>
    </section> 
    <!-- END CONTENT -->
    
	
	<!-- PUT FOOTER INTO ANOTHER PHP FILE AND INCLUDE IT HERE: -->
	<?php include('includes/footer.php') ?>


</div> <!-- END WRAPPER -->

</body>
</html>
