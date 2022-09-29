<?php if( have_rows('content_areas') ):
   while ( have_rows('content_areas') ) : the_row(); ?>

      <?php if( get_row_layout() == 'text_area' ): ?>
         <?php get_template_part('components/text_area');?>

      <?php elseif( get_row_layout() == '' ): ?>
         <?php get_template_part('components/');?>
         
      <?php elseif( get_row_layout() == '' ): ?>
         <?php get_template_part('components/');?>

      <?php endif; ?>

   <?php endwhile; 
endif;?>
