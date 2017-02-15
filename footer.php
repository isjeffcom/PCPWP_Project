<footer id='footer'>
  <div class='footer_container'>

    <a class='footer_title'>OTHER PORTFOLIO</a><br>
    <?php

    $ins = get_theme_mod('op_instagram');
    $pin = get_theme_mod('op_pinterest');
    $behance = get_theme_mod('op_behance');
    $dribbble = get_theme_mod('op_dribbble');

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

     ?>

    <br>
    <br>
    <a class='footer_info'>Design by JIANFENG WU | Powered by Wordpress</a>

  </div>
</footer>



<script src='<?php bloginfo('template_directory'); ?>/js/common.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/navMobile.js'></script>

</body>
</html>
