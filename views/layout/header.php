<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $Site->Headline; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="assets/css/main.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <?php 
        // echo "<pre>";
        //     print_r($Site);
        // echo "<br>";
        //     print_r($Info);
        // echo "</pre>";
        ?>
        <a id="top"></a>
        <header class="site-header clearfix">
            <h1 class="site-logo"><a href="/"><?php echo $Site->Headline; ?></a></h1>
            <?php if($data->site->social) {
                $social = $data->site->social; ?>
            <nav class="pri-nav">
                <?php foreach ($social as $link) { ?>
                    <a href="<?php echo $link->url; ?>" class="<?php echo $link->label; ?>">
                        <?php echo $link->name; ?>
                    </a>
                <?php } ?>
            </nav>
            <?php } //off social nav ?>
        </header>