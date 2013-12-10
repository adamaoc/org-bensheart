<?php
require_once "../../core/init.php";
require_once "../content/sociallinks.php";
require_once "../layout/header.php";
?>
<?php 
$about = $Website->getSection('about');
if(isset($about)) {
	?>
	<section class="<?php echo $about->section_slug; ?>-section clearfix">
		<div class="content">
			<h2><?php echo $about->section_name; ?></h2>
			<p><?php echo $about->section_text; ?></p>
		</div>
		<div class="img-wrap" style="background-image: url(<?php echo "/assets/".$about->section_img; ?>);">
			<span class="screen-reader">About <?php echo $Info->website_name; ?></span>
		</div>
	</section>
	<?php
} 
?>

<?php 
require_once "../layout/footer.php";
?>