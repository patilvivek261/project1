<?= $this->extend('layout1/base.php'); ?>

<?=   $this->section('titleContent'); ?>	
  	<title><?=  $pageTitle;?></title>
<?=   $this->endSection();?>
  
  
<?= $this->section('bodyContent'); ?>
        <div class="container">
      <h3><?=  $pageHeading;?></h3>
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
      <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
      <p>End home page content</p>
    </div>
    
    <div class="container">
		<?= $this->include('partials/features1.php'); ?>
	</div>
		
<?= $this->endSection(); ?>
