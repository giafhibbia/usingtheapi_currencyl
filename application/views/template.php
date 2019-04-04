<!DOCTYPE html>
<html>
<?php $this->load->view('template/head.php'); ?>
<body>
	<?php $this->load->view('template/navbar.php'); ?>
		
	<section class="container">
		<?php echo $contents; ?>
	</section>
</body>
<?php $this->load->view('template/footer.php'); ?>
</html>