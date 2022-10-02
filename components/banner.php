<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 column-class">
                <div class="bg-image" style="background-image:url('<?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image_url( $image, $size ); } ?>');">

                </div>
            </div>
        </div>
    </div>
</section>