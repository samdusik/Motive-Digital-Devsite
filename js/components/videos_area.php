<div id="videos_area">
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-3">
                <?php $image = get_sub_field('image_1'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            </div>
            <div class="col-12 col-lg-4"> 
                <?php 
                $link = get_sub_field('video_1');
                if( $link ): 
                    $link_url = $link['url'];
                    ?>
                    <video id="video_1" width="442" height="248" controls>
                        <source src="<?php echo esc_url( $link_url ); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
                <div class="text-logo">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
                    <div class="texts">
                        <?php if( get_sub_field('title_1') ) : ?>
                            <h2><?php echo get_sub_field('title_1'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_sub_field('content_1') ) : ?>
                            <?php echo get_sub_field('content_1'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row block-2 align-items-center">
            <div class="col-12 col-lg-6">
                <div class="text-logo-2">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
                    <div class="texts">
                        <?php if( get_sub_field('title_2') ) : ?>
                            <h2><?php echo get_sub_field('title_2'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_sub_field('content_2') ) : ?>
                            <p><?php echo get_sub_field('content_2'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>        
            </div>
            <div class="col-12 col-lg-6">
            <?php 
                $link = get_sub_field('video_2');
                if( $link ): 
                    $link_url = $link['url'];
                    ?>
                    <video id="video_2" width="442" height="248" controls>
                        <source src="<?php echo esc_url( $link_url ); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
            <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6">
            <?php 
                $link = get_sub_field('video_3');
                if( $link ): 
                    $link_url = $link['url'];
                    ?>
                    <video id="video_3" width="442" height="248" controls>
                        <source src="<?php echo esc_url( $link_url ); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
            <?php endif; ?>
            </div>
        </div>
        <div class="row block-3">
            <div class="col-7">
                <?php $image = get_sub_field('image_4'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            </div>
            <div class="col-5">
                <?php 
                    $link = get_sub_field('video_4');
                    if( $link ): 
                        $link_url = $link['url'];
                        ?>
                        <video id="video_4" width="442" height="248" controls>
                            <source src="<?php echo esc_url( $link_url ); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                <?php endif; ?>
                <div class="text-logo-4">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
                    <div class="texts">
                        <?php if( get_sub_field('title_4') ) : ?>
                            <h2><?php echo get_sub_field('title_4'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_sub_field('content_4') ) : ?>
                            <p><?php echo get_sub_field('content_4'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-end block-4">            
            <div class="col-6">
                <?php 
                    $link = get_sub_field('video_5');
                    if( $link ): 
                        $link_url = $link['url'];
                        ?>
                        <video id="video_5" width="442" height="248" controls>
                            <source src="<?php echo esc_url( $link_url ); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                <?php endif; ?>
                <div class="text-logo-5">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
                    <div class="texts">
                        <?php if( get_sub_field('title_5') ) : ?>
                            <h2><?php echo get_sub_field('title_5'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_sub_field('content_4') ) : ?>
                            <p><?php echo get_sub_field('content_5'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="img-5">
                    <?php $image = get_sub_field('image_5'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </div>
            </div>

        </div>

    </div>
</div>