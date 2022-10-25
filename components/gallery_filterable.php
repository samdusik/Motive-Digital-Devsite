<section id="gallery_filterable">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <hr>
                <div class="button-group filter-button-group">
                <!-- <button data-filter="*">View all</button> -->
                <?php if( have_rows('gallery') ): ?>
                    <?php while( have_rows('gallery') ): the_row(); ?>
                        <?php if( get_row_layout() == 'image_repeater' ): ?>
                            <?php if( get_sub_field('filter_title') ) : ?>
                                <button data-filter=".<?php $string = get_sub_field('filter_title'); $string = str_replace(' ', '', $string); ?><?php echo $string; ?>"><?php echo get_sub_field('filter_title'); ?></button>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="grid">
                <div class="grid-sizer"></div>
                    <?php if( have_rows('gallery') ): ?>
                        <?php while( have_rows('gallery') ): the_row(); ?>
                            <?php if( get_row_layout() == 'image_repeater' ): ?>
                                <?php if( get_sub_field('filter_title') ) : ?>
                                    <?php $filterTitle = get_sub_field('filter_title'); ?>
                                <?php endif; ?>
                                <?php if ( have_rows('repeater') ) : ?>
                                    <?php while( have_rows('repeater') ) : the_row(); ?>
                                        <div class="element-item <?php $string = $filterTitle; $string = str_replace(' ', '', $string); ?><?php echo $string; ?>">
                                            <?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>