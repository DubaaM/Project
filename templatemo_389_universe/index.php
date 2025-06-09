<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'partials/header.php'; ?>
    <div id="templatemo_slider" >
		<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <a href="#"><img src="images/slider/01.jpg" alt="Slider Image 1" title="#caption1" /></a>
                <a href="#"><img src="images/slider/02.jpg" alt="Slider Image 2" title="#caption2" /></a>
                <a href="#"><img src="images/slider/03.jpg" alt="Slider Image 3" title="#caption3" /></a>
                <a href="http://www.flashmo.com" rel="nofollow">
                			<img src="images/slider/04.jpg" alt="Slider Image 4" title="#caption4" /></a>
            </div>
            <div id="caption1" class="nivo-html-caption">
               <h2>Lorem Ipsum Dolor</h2>
               <p> Integer euismod ante nec lacus sagittis vestibulum. Pellentesque ultricies consequat turpis, in dictum metus imperdiet at. Curabitur rhoncus consequat condimentum.</p>
               <a href="#" class="slider_more_button">More</a>
            </div>
            <div id="caption2" class="nivo-html-caption">
               <h2>Quisque a risus in lectus</h2>
               <p>Pellentesque hendrerit felis a risus lobortis gravida. Nunc pellentesque ligula nec convallis laoreet. Vivamus ornare libero dapibus velit tincidunt, eget sodales lorem feugiat.</p>
               <a href="#" class="slider_more_button">More</a>
            </div>
            <div id="caption3" class="nivo-html-caption">
               <h2>Vestibulum non rhoncus</h2>
               <p>Cras auctor elit in sapien suscipit interdum. Quisque a risus in lectus luctus tincidunt. Duis magna sem, viverra rutrum diam consequat, laoreet porta est.</p>
               <a href="#" class="slider_more_button">More</a>
            </div>
            <div id="caption4" class="nivo-html-caption">
               <h2>Free Templates</h2>
               <p>Cras sit amet nisl bibendum, aliquam quam ut, porttitor enim. Nulla vestibulum malesuada urna.</p>
               <a href="#" class="slider_more_button">More</a>
            </div>
        </div>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
			effect: 'random',
			captionOpacity: 1,			
			controlNav: true, // 1,2,3... navigation
			directionNavHide: false,
            directionNav: true,
			animSpeed: 800, // Slide transition speed
	        pauseTime: 4000, // How long each slide will show
			});
        });
        </script>
	</div> <!-- END of slider -->
    
    <div id="templatemo_main_content">
    <?php include 'partials/sidebar.php'; ?>
        
        <div id="templatemo_content">
        	<div class="col_2">
            	<div class="content_wrapper content_mb_30">
                    <h2 class="post_title"><a href="#">Quisque Elementum</a></h2>
                    <img src="images/templatemo_image_05.jpg" alt="flower 5" class="img_border img_nom" />
                    <p>Universe is free website template from templatemo. You may download and use this layout for any purpose. Pellentesque faucibus felis eu venenatis pretium. Integer faucibus arcu pharetra mi cursus semper. Sed suscipit aliquam orci, et placerat felis pulvinar ac.</p>
                    <div class="clear"></div>
                <a href="#" class="more right">More</a>
				</div>
                <div class="content_wrapper">                    
                    <h2 class="post_title"><a href="#">Ut Imperdiet Vehicula</a></h2>
                    <img src="images/templatemo_image_06.jpg" alt="flower 6" class="img_border img_nom" />
                    <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Credits go to <a rel="nofollow" href="http://dev7studios.com">Dev7studios</a> for homepage slider and <a rel="nofollow" href="http://www.photovaco.com">Photovaco</a> for slider images. Sed volutpat ante vulputate molestie pretium. Curabitur non venenatis felis, quis congue ipsum.</p>
                    <div class="clear"></div>
                <a href="#" class="more right">More</a>
				</div>
            </div>
        	<div class="col_2 no_margin_right">
    
                <h2>Recent Updates</h2>
                <div class="news_list">
                    <img src="images/templatemo_image_01.jpg" alt="Flower 1"  class="img_fl img_border img_border_s" />
                    <a href="#">Aliquam adipiscing lacus</a>
                    <p>Integer pharetra leo a neque dictum, eu ultrices quam lacinia. Curabitur lacus ante, blandit ut lacus sed, imperdiet blandit. </p>
                  <div class="clear"></div>
                </div>           
                <div class="news_list">
                    <img src="images/templatemo_image_02.jpg" alt="Flower 2" class="img_fl img_border img_border_s" />
                    <a href="#">Fusce tempus diam quis</a>
                    <p>Duis vestibulum sodales felis, et rutrum nunc pellentesque eu. Sed leo massa, tincidunt vitae neque eu, imperdiet sollicitudin nisl.</p>
                  <div class="clear"></div>
                </div>   
                 <div class="news_list">
                    <img src="images/templatemo_image_03.jpg" alt="Flower 3" class="img_fl img_border img_border_s" />
                    <a href="#">Etiam nec elit id elit mattis</a>
                    <p>Vestibulum bibendum nulla vel purus tristique, a rutrum nunc bibendum. Suspendisse in velit dapibus velit lobortis dapibus.</p>
                    <div class="clear"></div>
                </div>
                <div class="news_list">
                <img src="images/templatemo_image_04.jpg" alt="Flower 4" class="img_fl img_border img_border_s" />
                <a href="#">Vestibulum ante ipsum primis</a>
                <p>Donec elementum, arcu pellentesque accumsan fringilla, lacus lectus suscipit sapien, eget elementum lorem tortor sed.</p>
              <div class="clear"></div>
            </div>   
                          
                <div class="clear"></div>
                <a href="#" class="more right">More</a>
            </div>	
        </div>
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->
    
<?php include 'partials/footer.php'; ?>   