<section id="about" class="pure-g">
    <?php $background = $data->photo()->toFile(); ?>
    <!--div class="pure-u-md-1-3 img-container" style="background-image:url(<?php echo $background->url() ?>)"></div-->
    <div class="pure-u-1 pure-u-md-1-3">
        <img src="<?php echo $background->url() ?>" class="img-responsive" />
    </div>
    <div class="pure-u-1 pure-u-md-2-3">
        <h1><?php echo $data->title() ?></h1>
        <?php echo $data->text()->kirbytext() ?>
    </div>
</section>
