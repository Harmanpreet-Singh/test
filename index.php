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

    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ex at eros auctor pellentesque sed eu elit. In hac habitasse platea dictumst. Integer feugiat quam sed massa tempor sodales. Duis egestas non sem tincidunt mollis. Vivamus et egestas purus, ut sagittis nunc. Integer tincidunt nec nisl in tristique. Aliquam laoreet consectetur porttitor. Phasellus ut accumsan sem, pretium viverra lorem. Phasellus id pharetra leo. Sed tempus at augue ac ullamcorper.</p>

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
