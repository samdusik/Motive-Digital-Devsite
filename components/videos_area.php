<div id="videos_area">
    <div class="container">

        <div class="row first-row">
            <div id="lottie-div"></div>
            <lottie-player id="firstLottie" class="d-none d-lg-block" src="<?php bloginfo('template_directory'); ?>/images/lightbulb_lotty.json"></lottie-player>
            <div class="col-12 col-lg-3 d-none d-lg-block">
                <?php $image = get_sub_field('image_1'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            </div>
            <div class="col-12 col-lg-6 col-xl-4"> 
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
                            <p><?php echo get_sub_field('content_1'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row block-2 align-items-end justify-content-center">
        <div id="lottie-div-2"></div>
            <lottie-player id="secondLottie" class="d-none d-lg-block" src="<?php bloginfo('template_directory'); ?>/images/camera_lottie.json"></lottie-player>
            <div class="col-12 col-lg-5 order-2 order-lg-1">
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
            <div class="col-12 col-lg-5 order-1 order-lg-2">
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
            <div id="lottie-div-3"></div>
            
        </div>

        <div class="row block-2_2 justify-content-start d-none d-lg-block">
        <lottie-player id="thirdLottie" class="d-none d-lg-block" src="<?php bloginfo('template_directory'); ?>/images/laptop_lottie.json"></lottie-player>
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
            <div class="col-7 d-none d-lg-block">
                <?php $image = get_sub_field('image_4'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            </div>
            <div class="col-12 col-lg-5">
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
        <lottie-player id="forthLottie" class="d-none d-lg-block" src="<?php bloginfo('template_directory'); ?>/images/airplane_lottie.json"></lottie-player>
            <div class="col-12 col-lg-6">
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
            <div class="col-lg-4 d-none d-lg-block">
                <div class="img-5">
                    <?php $image = get_sub_field('image_5'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- <script>
LottieInteractivity.create({
    player: '#firstLottie',
    mode: 'scroll',
    actions: [
        {
            visibility[0,1],
            type: 'seek',
            frames: [0, 300],
        },
    ]
});
</script> -->