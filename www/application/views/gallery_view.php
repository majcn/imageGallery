<html>
    <head>
        <title><?=$title?></title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?=$root?>/js/slimbox2.js"></script>
        <link rel="stylesheet" href="<?=$root?>/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?=$root?>/css/slimbox/slimbox2.css" type="text/css" media="screen" />
    </head>
    <body>
        <div id="container">
            <div id="title">
                <h1><?=$title?><h1>
            </div>
            <!-- <div id="description"> -->
                <!-- Description -->
            <!-- </div> -->
            <div id="gallerycontainer">
                <?php foreach ($images as $image):?>
                <div class="thumbnail">
                    <a title="<?=$image['name']?>" href="<?=$image['url']?>" rel="lightbox-journey">
                        <img src="<?=$image['thumb']?>" title="<?=$image['name']?>" alt="<?=$image['name']?>" border="0"/>
                    </a>
                    <?=$image['name']?>
                </div>
                <?php endforeach;?>
                <div id="footer">
                    <!-- footer -->
                </div>
            </div>
        </div>
    </body>
</html>
