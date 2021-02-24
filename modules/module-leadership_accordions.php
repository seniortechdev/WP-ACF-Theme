<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script>
    jQuery(document).ready(function() {
    jQuery(".leadership_tab .leadership_set:first-child").addClass("active");
    jQuery(".leadership_tab .leadership_set:first-child a").addClass("active");  
    jQuery(".leadership_set > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
		jQuery(this).removeClass("active");
		jQuery(this).siblings(".faq_contenta").slideUp(200);
		jQuery(".leadership_set > a i").removeClass("minus-icon").addClass("plus-icon");
    } else {
		jQuery(".leadership_set > a i").removeClass("minus-icon").addClass("plus-icon");
		jQuery(this).find("i").removeClass("plus-icon").addClass("minus-icon");
		jQuery(".leadership_set > a").removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".faq_contenta").slideUp(200);
		jQuery(this).siblings(".faq_contenta").slideDown(200);
    }
	return false;
  });
});
</script>
<style>
  .close { float: right; font-size: 60px; font-weight: 100; line-height: 1; color: #fff; opacity: 1; margin: -45px -30px;}
  .modal-dialog { margin: 6% auto; }
  .modal-body { padding: 0px;}
.container-fluid { padding-right: 0px; padding-left: 0px;}
.col-md-7.ml-auto { padding: 0 50px;}
h1.popupname { font-size: 55px; font-weight: 600;color: #000;}
h3.popup-title { font-size: 35px;color: #000;}
p.popupbio { font-size: 22px!important; margin: 0!important;color: #000;}
span.popupsocial { float: left; margin: 20px 7px;}
span.popupsocial img{height: 22px; width: 22px;}
a.btn.btn-primary.active {background-color: #fff; border: 0; box-shadow: none;padding: 0px 0px;
    margin: 0px 0px;}
</style>
<?php
$settings = get_sub_field('settings');
if( have_rows('accordions') ): ?>
<div class="leadership_accordion_section">
<div class="accordion-container">
    
    <div class="content-flexible">
    <div class="leadership_tab">
        <?php while( have_rows('accordions') ): the_row();
                $subtitle = get_sub_field('title'); 
        ?>  
    <div class="leadership_set">
        <a href="#">
           <?php echo $subtitle; ?>
            <i class="fa fa-pluss plus-icon"></i>
        </a>
        <div class="faq_contenta">        
            <?php if( have_rows('people') ): ?>
            <ul class="faq_events_section">
                <?php $k=0;
                while( have_rows('people') ): the_row();
                $k++;
                $name = get_sub_field('name');
                $title2 = get_sub_field('title');
                $bio = get_sub_field('bio');                
                $image = get_sub_field('image');
                ?>                 
                <li>
                   <div class="event_detail_section">
                      <div class="event_detail">
                      <h2 class="event_title">
                        <a href="#exampleModalCenter-<?php echo $k; ?>" class="btn btn-primary" data-toggle="modal" ><img class="eyeicon" src="<?php bloginfo('template_url')?>/assets/images/noun_Eye_585509.svg" alt=""></a>&nbsp; 
                              <?php echo $name; ?>
                      </h2>
                        <p><?php echo $title2; ?></p>

                      <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter-<?php echo $k; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter-<?php echo $k; ?>Title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 ml-auto">
           <div class="popupimage"><img src="<?php echo  $image ['url'] ; ?>"></div>           
        </div>
        <div class="col-md-7 ml-auto">
        <h1 class="popupname"><?php echo $name; ?></h1>
      <h3 class="popup-title"><?php echo $title2; ?></h3>
      <p class="popupbio"><?php echo $bio; ?></p>
      <?php if( have_rows('social_links') ): 
              while( have_rows('social_links') ): the_row();
              $url = get_sub_field('url');
              $icon = get_sub_field('icon');
              ?>
                <span class="popupsocial"><a href="<?php echo $url; ?>"><img src="<?php echo $icon['url']; ?>"></a></span>
              <?php endwhile; 
              endif; ?>
            </div>
      </div></div>
      
      </div>      
    </div>
  </div>
</div>
 


                      </div>
                   </div> 
                </li>
                <?php   endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>
    </div>
    <?php   endwhile; ?>
  </div>
</div>
</div>

</div>
<?php endif; ?>