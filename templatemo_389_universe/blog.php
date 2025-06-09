<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
    <?php include 'partials/header.php'; ?>
    
    <div id="templatemo_main_content">
        <?php include 'partials/sidebar.php'; ?>
        
        <div id="templatemo_content">
        	<div class="post">
	            <h2><a href="fullpost.html">Lorem Ipsum Dolor Sit Amet</a></h2>
                <div class="post_meta">
                    <span class="post_author"><a href="#">Admin</a></span>
                    <span class="date"><a href="#">23 January 2084</a></span>
                    <span class="tag"><a href="#">Graphics</a>, <a href="#">Effects</a></span>
                    <span class="comment">18</span>
				</div> 
                <img class="img_border img_border_b" src="images/blog/01.jpg" alt="Post Image 1" />
                <p>Nulla lobortis eleifend lorem, vel elementum nisl placerat sit amet. Sed a pulvinar orci. Mauris rhoncus gravida diam ut sodales. Pellentesque hendrerit felis a risus lobortis gravida. Nunc pellentesque ligula nec convallis laoreet. Vivamus ornare libero dapibus velit tincidunt, eget sodales lorem.</p>
                <a class="more left" href="fullpost.html">More</a>
                <div class="clear"></div>
			</div>
            
            <div class="post">
	            <h2><a href="fullpost.html">Mauris Imperdiet Enim Eu Lobortis</a></h2>
                <div class="post_meta">
                    <span class="post_author"><a href="#">Danny</a></span>
                    <span class="date"><a href="#">22 January 2084</a></span>
                    <span class="tag"><a href="#">Web Design</a>, <a href="#">HTML-CSS</a></span>
                    <span class="comment">26</span>
				</div> 
                <img class="img_border img_border_b" src="images/blog/02.jpg" alt="Post Image 2" />
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod accumsan erat sit amet cursus. Cras sit amet nisl bibendum, aliquam quam ut, porttitor enim. Nulla vestibulum malesuada urna. Nunc nisi neque, placerat in risus eget, placerat tristique ipsum. Aliquam elementum rutrum lacus, eu lacinia lacus placerat at.</p>
                <a class="more left" href="fullpost.html">More</a>
                <div class="clear"></div>
			</div>
            
            <div class="post">
	            <h2><a href="fullpost.html">Phasellus Aliquam Arcu Non Risus</a></h2>
                <div class="post_meta">
                    <span class="post_author"><a href="#">Admin</a></span>
                    <span class="date"><a href="#">21 January 2084</a></span>
                    <span class="tag"><a href="#">Freebies</a>, <a href="#">Templates</a></span>
                    <span class="comment">34</span>
			  </div>                    
                <img class="img_border img_border_b" src="images/blog/03.jpg" alt="Post Image 3" />                
                <p>Vivamus sit amet augue nisi. In sagittis facilisis purus non tempor. Praesent in lacus adipiscing nulla euismod accumsan. Duis vitae turpis sit amet ligula aliquam sollicitudin ac vel ipsum. Maecenas at nunc mi, eu vehicula neque. Pellentesque hendrerit felis a risus lobortis gravida. Nunc pellentesque ligula nec convallis laoreet. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                <a class="more left" href="fullpost.html">More</a>
                <div class="clear"></div>
			</div>
        	<div class="templatemo_paging">
                <ul>
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
                <div class="clear"></div>
            </div>	
        </div> <!-- END of templatemo_content -->
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->
    
    <?php include 'partials/footer.php'; ?>