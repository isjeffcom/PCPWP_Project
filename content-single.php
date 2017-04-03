<?php
/**
 * @package Shape
 * @since Shape 1.0
 */
?>

<script src='<?php bloginfo('template_directory'); ?>/js/jq311.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/qrcode.min.js'></script>


<div class='progressBar'>

  <div class='pBMiddle' id='pBM'></div>

</div>

<div class='all_container' id='allContainer'>


  <div class='right_side'>

    <div class='right_container'>

      <div class='right_title'>
        <h2><?php the_title(); ?></h2>
        <br>
      </div>

      <div class='right_info'>
        <h3><?php the_date('M, j, Y') ?><h3><br>
        <div><a>Posted in</a><?php the_category(); ?></div>
        <br>
      </div>

      <div class='right_cutline'> </div>

      <div class='right_share'>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="view_frame" alt='Share to Facebook'><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href='https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>' target="view_frame" alt='Share to Twitter'><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href='http://v.t.sina.com.cn/share/share.php?title=<?php the_permalink(); ?>' target="view_frame" alt='Share to Sina Weibo'><i class="fa fa-weibo" aria-hidden="true"></i></a>
        <a onclick='showQR()'><i class="fa fa-weixin" aria-hidden="true"></i></a>
        <a href='Mailto:hello@isjeff.com' target="view_frame" alt='Report a bug to developers Email'><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </div>

    </div>
  </div>

      <div class='left_side'>

        <div class='left_container' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

        </div>

        <div class='left_content_footer'>

          <div class='left_like_btn'>
            <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">
              <i class="fa fa-heart-o" aria-hidden="true"></i>

               </a>
               <br>
               <span class="count" id='count'>
                        <?php if( get_post_meta($post->ID,'bigfa_ding',true) ){
                                        echo get_post_meta($post->ID,'bigfa_ding',true);
                                  } else {
                                        echo '0';
                                  }?>
              </span>

          </div>
          <div class='left_author_title'><a>AUTHER</a></div>
          <div class='left_author_info'>

            <a><?php the_author(); ?></a>

          </div>

        </div>


      </div>

      <div class='float_btn_container'>

        <div class='floatBtn' id='floatBtn' onclick='back2top()'><i class="fa fa-chevron-up" aria-hidden="true"></i></div>

      </div>

      <div id='qrcode' onclick='unshowQR()'>

        <div class='wechatShare_title'><a>使用微信扫描二维码，点击右上角菜单选择"分享"。或保存到手机，使用微信“扫一扫”选择右上角相册，选择二维码。</a></div>
        <script type='text/javascript'>

          new QRCode(document.getElementById("qrcode"), "<?php the_permalink(); ?>");

        </script>

      </div>



</div>
<script src='<?php bloginfo('template_directory'); ?>/js/pbar.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/floatBtn.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/like.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/js/wechatShare.js'></script>
