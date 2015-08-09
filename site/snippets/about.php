<section class="pure-g img-bg-parent">
    <?php // Convert the filename to a full file object
    $file = $data->photo()->toFile(); ?>
    <div class="pure-u-1 pure-u-sm-1-2 img-bg" style="background-image:url(<?php echo $file->url() ?>)">
    </div>
    <div class="pure-u-1 pure-u-sm-1-2 offset-sm-1-2 l-box-lg">
            <h1><?php echo $data->title() ?></h1>
            <?php echo $data->text()->kirbytext() ?>
    </div>
</section>
