<?php
require_once "../../core/init.php";
require_once "../content/sociallinks.php";
require_once "../layout/header.php";
require_once "../content/sections.php";
require_once "../contact/contact_data.php";
?>
<section class="main-banner clearfix" style="background: url(<?php echo $Website->MainBannerImg(); ?>) no-repeat bottom center; background-size: cover;">
    <h2><?php echo $Website->MainBannerText(); ?></h2>
</section>

<section class="about-section clearfix">
    <div class="content">
        <h2>About Us</h2>
        <p><?php echo $Info->blurbs; ?></p>
    </div>
    <div class="img-wrap" style="background-image: url(/assets/img/about_img.jpg);">
        <p style="display: none;">About <?php echo $Site->Headline; ?></p>
    </div>
</section>

<?php 
	// print_r($Sections);
    $sections = $Sections;
    $i = 1;
    foreach ($sections as $section) { ?>
        <section class="section<?php echo $i; ?> clearfix"> 
            <h2><?php echo $section['title']; ?></h2>
            <p><?php echo $section['content']; ?></p>
            <?php if(!empty($section['mainIMG'])) {
                ?>
                <img src="<?php echo $section['mainIMG']; ?>" alt="<?php echo $section['title']; ?>" />
                <?php
            } ?>
        </section>
    <?php 
        $i++;
    } // end site sections
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