<?php
require_once "../../core/init.php";
require_once "../content/sociallinks.php";
require_once "../layout/header.php";
require_once "../contact/contact_data.php";
?>
<section class="main-banner clearfix" style="background: url(http://<?php echo $Website->MainBannerImg(); ?>) no-repeat bottom center; background-size: cover;">
    <h2><?php echo $Website->MainBannerText(); ?></h2>
</section>

<?php 
    $i = 1;
    foreach ($Website->Sections() as $section) {
        ?>
        <section class="section<?php echo $i; ?> <?php echo $section->section_slug; ?>-section clearfix">
            <div class="content">
                <h2 class="section-header">
                    <?php echo $section->section_name; ?>
                </h2>
                <p><?php echo $section->section_text; ?></p>
            </div>
            <?php if(!$section->section_img == null) {
                ?>
				<div class="img-wrap" style="background-image: url(<?php echo "/assets/".$section->section_img; ?>);">
					<span class="screen-reader"><?php echo $section->section_name." - ".$Info->website_name; ?></span>
				</div>
                <?php 
            }
            ?>
        </section>
        <?php
        $i++;
    }
    // print_r($contactData);
    $contact = $contactData;
?>

<section class="contact-section clearfix">
    <h2><?php echo $contact['title']; ?></h2>
    <p class="contact-text"><?php echo $contact['content']; ?></p>
    <!-- <form method="Post" action="">
        <ul>
            <li class="clearfix">
                <label for="name">Name</label>
                <input type="text" name="name">
            </li>
            <li class="clearfix" class="clearfix">
                <label for="email">Email</label>
                <input type="text" name="email">
            </li>
            <li class="clearfix">
                <label for="comment" class="comments-label">Comment</label>
                <textarea name="comment">

                </textarea>
            </li>
            <li class="clearfix">
                <input type="submit" class="submit" value="<?php //echo $contact['formvars']['submit_val']; ?>" />
            </li>
        </ul>
    </form> -->
</section>

<?php 
require_once "../layout/footer.php";
?>