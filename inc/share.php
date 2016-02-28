<div class="share_cont">
   <!--
   you can use this styles for social
   i{
            color: #fff;
            background-color: #000;
            padding: 10px;
            @include border-radius(50%);
            font-size: 14px;
            width: 35px;
            height: 35px;
            text-align: center;
            &.fa-facebook{
                background-color: #3460a1;
            }
            &.fa-google-plus{
                background-color: #de5543;
            }
            &.fa-linkedin{
                background-color: #136d9d;
            }
            &.fa-twitter{
                background-color: #28aae1;
            }
             &.fa-envelope-o{
                background-color: #bcbbbb;
            }
            
        }
   -->
    <p><?php echo __('Share this with friends!', 'sh-theme'); ?></p>
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>">
        <i class="fa fa-facebook"></i> <span>Facebook</span>
    </a>
    <a target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink();?>">
        <i class="fa fa-google-plus"></i> <span>Google+</span>
    </a>
    <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink();?>&title=<?php the_title();?>">
        <i class="fa fa-linkedin"></i> <span>Linkdin</span>
    </a>
    <a target="_blank" href="https://twitter.com/home?status=<?php echo get_permalink();?>">
        <i class="fa fa-twitter"></i> <span>Twitter</span>
    </a>
    <a target="_blank" href="mailto:?&subject=<?php the_title();?>&body=Check%20out%20this%20URL: <?php echo get_permalink();?>">
        <i class="fa fa-envelope-o"></i> <span>Email</span>
    </a>
    <!-- Based on this: http://stackoverflow.com/a/25796908/2721050-->
     <a target="_blank" href="whatsapp://send?text=<?php the_title();?>" data-action="share/whatsapp/share">
         <i class="fa fa-whatsapp"></i> <span>WatsApp</span>
      </a>
    
</div>
