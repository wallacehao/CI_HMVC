<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>public/cms/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>public/cms/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<?php 
  		$this->load->view("$module/layout/header.php");
  	?>
    <div class="page-content">
    	<div class="row">
			<?php echo $this->load->view("$module/layout/left_bar.php"); ?>
		<div class="col-md-10">
			<div class="row">
				<?php 
					echo $this->load->view($loadpage);
				?>	
		  	</div>
		</div>
    </div>

    <?php 
    	echo $this->load->view("$module/layout/footer");
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>public/cms/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/cms/js/custom.js"></script>
  </body>
</html>