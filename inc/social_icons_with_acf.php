<?php if(get_field('facebook_link','option')): ?>
   <a href="<?php the_field('facebook_link','option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
<?php endif; ?>
<?php if(get_field('twitter_link','option')): ?>
   <a href="<?php the_field('twitter_link','option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
<?php endif; ?>
<?php if(get_field('mail_link','option')): ?>
   <a href="mailto:<?php the_field('mail_link','option'); ?>" target="_blank"><i class="fa fa-envelope"></i></a>
<?php endif; ?>
<?php if(get_field('youtube_link','option')): ?>
   <a href="<?php the_field('youtube_link','option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
<?php endif; ?>
<?php if(get_field('vimeo_link','option')): ?>
   <a href="<?php the_field('vimeo_link','option'); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a>
<?php endif; ?>
