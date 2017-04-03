<footer id='footer'>
  <div class='footer_container'>

    <a class='footer_title'>OTHER PORTFOLIO</a><br>
    <?php

    $ins = get_theme_mod('op_instagram');
    $pin = get_theme_mod('op_pinterest');
    $behance = get_theme_mod('op_behance');
    $dribbble = get_theme_mod('op_dribbble');
    $github = get_theme_mod('op_github');
    $facebook = get_theme_mod('op_facebook');
    $twitter = get_theme_mod('op_twitter');
    $linkedin = get_theme_mod('op_linkedin');

    //Other Portfolio Display, if user leave it blank that will not display
    if($ins != null || $ins = ''){
      echo "<a href='$ins' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";
    }

    if($pin != null || $pin = ''){
      echo "<a href='$pin' target='_blank'><i class='fa fa-pinterest-p' aria-hidden='true'></i></a>";
    }

    if($behance != null || $behance = ''){
      echo "<a href='$behance' target='_blank'><i class='fa fa-behance' aria-hidden='true'></i></a>";
    }

    if($dribbble != null || $dribbble = ''){
      echo "<a href='$dribbble' target='_blank'><i class='fa fa-dribbble' aria-hidden='true'></i></a>";
    }

    if($github != null || $github = ''){
      echo "<a href='$github' target='_blank'><i class='fa fa-github' aria-hidden='true'></i></a>";
    }

    if($facebook != null || $facebook = ''){
      echo "<a href='$facebook' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";
    }

    if($twitter != null || $twitter = ''){
      echo "<a href='$twitter' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";
    }

    if($linkedin != null || $linkedin = ''){
      echo "<a href='$linkedin' target='_blank'><i class='fa fa-linkedin' aria-hidden='ture'></i></a>";
    }

     ?>

    <br>
    <br>
    <div class='footer_info'>
      <a>Design by </a>
      <a href='https://isjeff.com'>JIANFENG WU</a>
      <a> | Powered by </a>
      <a href='<?php echo esc_url( home_url( '/' ) ); ?>wp-admin' target='_blank'>WordPress</a>
    </div>

  </div>
</footer>



<script src='<?php bloginfo('template_directory'); ?>/js/common.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/navMobile.js'></script>

</body>
</html>
