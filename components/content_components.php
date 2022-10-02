<?php if( have_rows('content_area') ):
   while ( have_rows('content_area') ) : the_row(); ?>

      <?php if( get_row_layout() == 'text_area' ): ?>
         <?php get_template_part('components/text_area');?>

      <?php elseif( get_row_layout() == 'banner' ): ?>
         <?php get_template_part('components/banner');?>
         
      <?php elseif( get_row_layout() == 'centered_logo_text' ): ?>
         <?php get_template_part('components/centered_logo_text');?>

      <?php elseif( get_row_layout() == 'videos_area' ): ?>
         <?php get_template_part('components/videos_area');?>


      <?php endif; ?>

   <?php endwhile; 
endif;?>
