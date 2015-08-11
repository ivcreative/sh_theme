<div class="share_icons">
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">
        <i class="fa fa-facebook"></i>
    </a>
    <a target="_blank" href="https://twitter.com/home?status=<?php the_permalink();?>">
        <i class="fa fa-twitter"></i>
    </a>
    
     <?php 
        //need to bew some url - in this case its first image in slider but can bee everything
         $image_ids = get_field('images', false, false);
         $url =  wp_get_attachment_image_src( $image_ids[0], 'full' )[0]; 
     ?> 
      <a href="https://pinterest.com/pin/create/button/?url=<?php echo $url;?>&media=<?php echo $url;?>&description="  target="_blank">
        <i class="fa fa-pinterest-p"></i>
    </a>

    
    <a target="_blank" href="https://www.tumblr.com/share">
        <i class="fa fa-tumblr"></i>
    </a>
    <script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>
</div>
