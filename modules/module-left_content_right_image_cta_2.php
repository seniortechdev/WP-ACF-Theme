<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
$body = get_sub_field('body');
$cta = get_sub_field('cta');
$image = get_sub_field('image');

if(empty($text_color)) {
    $text_color = '#000';  
}
?>
    <div class="left_content_right_image_cta_2">
        <div class="intro_text left_block" style="background-color:<?php echo $color; ?>">
        <h2 style="color:<?php echo $text_color; ?>"><?php echo $title; ?></h2>
          <p style="color:<?php echo $text_color; ?>"><?php echo $body; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a class="contained_cta_link" style="color:<?php echo $text_color; ?>" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> 
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.j{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="j" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
          </a>
          <?php } ?>          
        </div>       
        <div class="contained_cta right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);">
          <!-- <img src="<?php echo  $image ['url'] ; ?>"> -->
        </div>
      </div>  