<?php get_header(); ?>

  <title><?php bloginfo( 'name' );?></title>

  <div class='content'>
    <div class='index_background'>

      <?php
          //Get costumize detail
          $image_id = get_theme_mod('bg_image');
          $image_url = wp_get_attachment_url($image_id);
          $profile_image_id = get_theme_mod('bg_profilePic');
          $profile_image_url = wp_get_attachment_url($profile_image_id);
          $video_id = get_theme_mod('bg_video');
          $video_url = wp_get_attachment_url($video_id);
          $youtube_url = get_theme_mod('youtube_link');
          $tencent_url = get_theme_mod('tencent_video_link');
          $bt_first_name = get_theme_mod('bg_bigText_firstName');
          $bt_surname = get_theme_mod('bg_bigText_surName');
          $popupAlert = get_theme_mod('popup_alert_text');
      ?>

      <div class='background_video' id='bgvDiv'>
        <button onclick='stopVideo()'>Close</button>
        <div class='video_other_source'>
          <?php
          //Other Source of the video, if user fill in the blank

          if($youtube_url != null || $youtube_url = ''){
            echo "<a href='$youtube_url' target='_blank'><i class='fa fa-youtube-play' aria-hidden='true'></i></a>";
          }

          if($tencent_url != null || $tencent_url = ''){
            echo "<a href='$tencent_url' target='_blank'><i class='fa fa-qq' aria-hidden='true'></i></a>";
          }
           ?>

        </div>
        <video id='bgv' width="100%" height="100%">
          <source src='<?php echo $video_url; ?>' type='video/mp4'>

        </video>
      </div>

      <div class='index_screen_1'>
        <div class='square square_1'></div>
        <div class='square square_2'></div>
        <div class='square square_3'></div>
        <div class='square square_4'></div>
        <div class='square square_5'></div>


      </div>

      <!--All element need display add in index screen 2-->
      <div class='index_screen_2'>


          <div class='index_background_img'>
            <?php

            if($image_url != null || $image_url != ''){
              echo "<img src='$image_url' alt='background image'>";
            }else{
              echo "<img src='".get_bloginfo('template_directory')."/asset/img/bg3mini.png' alt='background image'>";
            }
            ?>
          </div>

          <div class='index_background_bigText'>
            <a>I </a>
            <a class='bigText_green'>A</a>
            <a>M</a>
            <br>
            <a><?php echo $bt_first_name ?></a>
            <br>
            <a class='bigText_green'>.</a>
            <a><?php echo $bt_surname ?></a>
          </div>

          <div class='index_down_angle'>
            <i class="fa fa-angle-down" aria-hidden="true" onclick='scrollDown()'></i>
          </div>


        <div class='pLine pLine_1'></div>
        <div class='pLine pLine_2'></div>
        <div class='pLine pLine_3'></div>
        <div class='pLine pLine_4'></div>



        

        <div class='index_intro'>

          <div class='pIntro pIntro_brief'>
            <br>

            <a><?php bloginfo( 'description' );?></a>
          </div>

          <div class='pIntro playVideo'>
            <button id='playVidBtn' onclick='playVideo()'><i class="fa fa-play" aria-hidden="true"></i></button>
          </div>

      </div>

    </div>


  </div>
  <div class='index_gallery'>

      <div class='index_gallery_img_container'>

        <?php /*Article Content*/ ?>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class='index_gallery_img' id='post-<?php the_ID(); ?>'>
              <a href='<?php the_permalink(); ?>' id='imgLink_<?php the_ID(); ?>'>
                <img src='<?php the_post_thumbnail_url(); ?>' alt='see china project' onmouseover='showText(this.parentNode.nextElementSibling.id);coverImg(this.id)' onmouseout='unShowText(this.parentNode.nextElementSibling.id);unCoverImg(this.id)' id='img_<?php the_ID(); ?>'>
              </a>
              <a href='<?php the_permalink(); ?>' class='gallary_center_title' onmouseover='showText(this.id);coverImg(this.previousElementSibling.firstElementChild.id)' onmouseout='unShowText(this.id);unCoverImg(this.previousElementSibling.firstElementChild.id)' id='img_text_<?php the_ID(); ?>'><?php the_title(); ?></a>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <?php //do nothing ?>
        <?php endif; ?>
      </div>
      <?php liveface_paging_nav(); ?>


  </div>

  <div class='alertOverlay' id='alertOverlay'>

    <?php

    if(empty($popupAlert)){
      //do nothing.......
    }else{
      echo "<script>
      var alert = document.getElementById('alertOverlay');
      alert.style.backgroundColor = '#58c271';
      alert.style.display = 'block';
      setTimeout(function(){document.getElementById('alertOverlay').style.display='none';}, 6000);
      </script>";

    }

    ?>

    <a id='alertContent'><?php echo $popupAlert  ?></a>
  </div>

</div>


<!--script src='<?php bloginfo('template_directory'); ?>/js/prespective.js'></script-->
<script src='<?php bloginfo('template_directory'); ?>/js/playvideo.js'></script>

<?php get_footer(); ?>
