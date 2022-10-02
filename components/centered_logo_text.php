<section id="centered_logo_text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-1">
                <?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            </div>
            <div class="col-11 col-lg-7">
                <?php if( get_sub_field('title') ) : ?>
                    <h2><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>
                <?php if( get_sub_field('content') ) : ?>
                    <?php echo get_sub_field('content'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>