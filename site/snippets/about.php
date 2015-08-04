<section id="about-me" class="pure-g">
    <?php $background = $data->photo()->toFile(); ?>

    // Use the file object
    echo $file->url();
    <div class="pure-u-md-1-3" style="background-image:url('fjf')"></div>
    <div class="pure-u-md-2-3">
        <h1><?php echo $data->title() ?></h1>
        <?php echo $data->text()->kirbytext() ?>
    </div>
</section>
