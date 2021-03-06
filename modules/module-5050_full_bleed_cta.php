
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$left_title = get_sub_field('left_title');
$left_copy = get_sub_field('left_copy');
$left_cta = get_sub_field('left_cta');
$right_title = get_sub_field('right_title');
$right_copy = get_sub_field('right_copy');
$right_cta = get_sub_field('right_cta');

if(empty($text_color)) {
  $text_color = '#fff';
}

?>



    <div class="fullbleed_with_text5050" style="background-color:<?php echo $color;?>">
        <div class="left_block">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $left_title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $left_copy; ?></p>
          <?php if(!empty($left_cta)){ ?>
            <a style="color:<?php echo $text_color;?>" class="fullbleed_cta_link5050" href="<?php print_r($left_cta['url']); ?>"><?php print_r($left_cta['title']); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.b{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="b" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
          </a>
        <?php } ?>
        </div>
        <div class="right_block">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $right_title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $right_copy; ?></p>
          <?php if(!empty($right_cta)){ ?>
            <a style="color:<?php echo $text_color;?>" class="fullbleed_cta_link5050" href="<?php print_r($right_cta['url']); ?>"><?php print_r($left_cta['title']); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.a{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="b" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
            </a>
        <?php } ?>
        </div>
