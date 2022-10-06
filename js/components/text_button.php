<section id="text_button">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-1">
                <div class="images">
                    <div class="img1">
                        <?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    </div>
                    <div class="img2">
                        <?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    </div>
                </div>
            </div>
            <div class="col-11 col-lg-5">
                <div class="texts">
                    <?php if( get_sub_field('title') ) : ?>
                        <h3><?php echo get_sub_field('title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_sub_field('content') ) : ?>
                        <p><?php echo get_sub_field('content'); ?></p>
                    <?php endif; ?>
                    <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>