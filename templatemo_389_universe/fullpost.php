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
    	<div id="templatemo_sidebar">
            <div class="sidebar_content_box">
            	<h3>Categories</h3>
                <ul class="sidebar_link">
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Nullam vulputate est</a></li>
                    <li><a href="#">Fusce at leo at ipsum</a></li>
                    <li><a href="#">Donec in risus sed ante</a></li>
                    <li><a href="#">Vestibulum ante ipsum</a></li>
                </ul>
            </div>
            <div class="sidebar_content_box">
                <h3>Image Gallery</h3>
                <ul class="sidebar_gallery">
                    <li><a href="images/gallery/10.jpg" title="template 1" rel="lightbox[portfolio]"><img src="images/gallery/10_s.jpg" alt="template 1" /></a></li>
                    <li><a href="images/gallery/11.jpg" title="template 2" rel="lightbox[portfolio]"><img src="images/gallery/11_s.jpg" alt="template 2" /></a></li>
                    <li><a href="images/gallery/12.jpg" title="template 3" rel="lightbox[portfolio]"><img src="images/gallery/12_s.jpg" alt="template 3" /></a></li>
                    <li><a href="images/gallery/13.jpg" title="template 4" rel="lightbox[portfolio]"><img src="images/gallery/13_s.jpg" alt="template 4" /></a></li>
                    <li><a href="images/gallery/05.jpg" title="template 5" rel="lightbox[portfolio]"><img src="images/gallery/05_s.jpg" alt="template 5" /></a></li>
                    <li><a href="images/gallery/06.jpg" title="template 6" rel="lightbox[portfolio]"><img src="images/gallery/06_s.jpg" alt="template 6" /></a></li>
                    <li><a href="images/gallery/07.jpg" title="template 7" rel="lightbox[portfolio]"><img src="images/gallery/07_s.jpg" alt="template 7" /></a></li>
                    <li><a href="images/gallery/08.jpg" title="template 8" rel="lightbox[portfolio]"><img src="images/gallery/08_s.jpg" alt="template 8" /></a></li>
                    <li><a href="images/gallery/09.jpg" title="template 9" rel="lightbox[portfolio]"><img src="images/gallery/09_s.jpg" alt="template 9" /></a></li>
                </ul>
                <div class="clear"></div>
			</div>
        </div>
        
        <div id="templatemo_content">
        	<div class="post">
	            <h2><a href="fullpost.html">Blog Post Title goes here</a></h2>
                <div class="post_meta">
                    <span class="post_author"><a href="#">Admin</a></span>
                    <span class="date"><a href="#">21 January 2084</a></span>
                    <span class="tag"><a href="#">Free</a>, <a href="#">Template</a></span>
                    <span class="comment">10</span>
				</div> 
                <img class="img_border img_border_b" src="images/blog/01.jpg" alt="Post Image" />
                <p>This layout is free website template from templatemo. You may download and use this template for any purpose. Maecenas euismod, diam et gravida commodo, augue justo rhoncus mi, bibendum dictum urna enim vel nisl. Maecenas vulputate mi in posuere interdum. Etiam venenatis interdum neque, sit amet faucibus felis elementum sed. Aliquam erat volutpat. <a href="#">Sed massa eros</a>, porttitor quis enim et, mollis vulputate est.</p>
              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod accumsan erat sit amet cursus. Cras sit amet nisl bibendum, aliquam quam ut, porttitor enim. Nulla vestibulum malesuada urna. Nunc nisi neque, placerat in risus eget, placerat tristique ipsum. Aliquam elementum rutrum lacus, eu lacinia lacus placerat at. Fusce vestibulum mi at elementum molestie. Nam lobortis <a href="#">pellentesque</a> vehicula.</p>
            <p align="justify">Nam ac ligula feugiat, cursus odio congue, convallis dolor. Curabitur porttitor in nisi vel cursus. Sed venenatis pharetra ullamcorper. Fusce eu nibh quis leo varius iaculis. Maecenas ac neque dolor. Praesent pellentesque velit scelerisque tincidunt porta. Integer sollicitudin augue quis massa egestas imperdiet. Sed ac placerat dolor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
            <p align="justify">Pellentesque diam justo, dapibus eu velit non, mattis condimentum dui. Sed nibh dolor, tempus a sodales vel, sollicitudin sit amet nisl. Cras iaculis purus ut consectetur interdum. Nullam vulputate lorem at quam pretium porttitor. Donec nec nunc in risus viverra gravida.</p>
			</div>
           <h4>Comments</h4>
            
           <ol class="comment_list">
            <li>
                <div class="comment_box">
                    
                    <div class="comment_content">
	                    <img src="images/avator.jpg" alt="Person 1" class="img_fl img_border" />
                        <div class="comment_meta"><strong><a href="#">Smith</a></strong> - 21 January 2084 - 5:37 AM</div>
                        <p>Cras auctor elit in sapien suscipit interdum. Quisque a risus in lectus luctus tincidunt. Duis magna sem, viverra rutrum diam consequat, laoreet porta est.</p>
                        <a href="#" class="more">Reply</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li>
                <ul>
                    <li class="depth_2">
                        <div class="comment_box">

                            <div class="comment_content">
                                <img src="images/avator.jpg" alt="Person 2" class="img_fl img_border" />
                                <div class="comment_meta"><strong><a href="#">Vanno</a></strong> - 21 January 2084 - 11:33 PM</div>
                                <p>Etiam venenatis interdum neque, sit amet faucibus felis elementum sed. Aliquam erat volutpat. Sed massa eros, porttitor quis enim et, mollis vulputate est.</p>
                                <a href="#" class="more">Reply</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <ul>
                        <li class="depth_3">
                            <div class="comment_box">
                             
                              <div class="comment_content">
                               	<img src="images/avator.jpg" alt="Person 3" class="img_fl img_border" />
                                <div class="comment_meta"><strong><a href="#">George</a></strong> - 22 January 2084 - 5:46 AM</div>
                                <p>Pellentesque diam justo, dapibus eu velit non, mattis condimentum dui. Sed nibh dolor, tempus a sodales vel, sollicitudin sit amet nisl. Cras iaculis purus ut consectetur interdum.</p>
                                <a href="#" class="more">Reply</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                    </ul>
                </ul>
            </li>
            <li>
                <div class="comment_box">
                    
                    <div class="comment_content">
                    	<img src="images/avator.jpg" alt="Person 4" class="img_fl img_border" />
                        <div class="comment_meta"><strong><a href="#">Walker</a></strong> - 22 January 2084 - 9:08 PM</div>
                        <p>Sed volutpat ante vulputate molestie pretium. Curabitur non venenatis felis, quis congue ipsum. Donec dignissim eros non arcu dignissim, ac porttitor enim egestas.</p>
                        <a href="#" class="more">Reply</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li>
                <div class="comment_box">
                    
                    <div class="comment_content">
                    <img src="images/avator.jpg" alt="Person 5" class="img_fl img_border" />
                        <div class="comment_meta"><strong><a href="#">Cater</a></strong> - 23 January 2084 - 10:20 AM</div>
                        <p>Morbi id vulputate libero. In suscipit aliquet laoreet. Sed lacinia a magna ut sagittis. Sed pretium in lorem a aliquam. Vivamus ornare libero dapibus velit tincidunt, eget sodales lorem feugiat.</p>
                        <a href="#" class="more">Reply</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ol>
        
        <div class="clear"></div>
            
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

            <div id="comment_form">
                <h3>Post a comment</h3>
                
                <form action="#" method="post">
                    <label>Name</label>
                    <input name="fullname" type="text" class="input_field" id="fullname" maxlength="30" />
                    <label>Email  (* required  )</label>
                    <input name="email" type="text" class="input_field" id="email" maxlength="30" />
                <label>Comment</label>
                    <textarea  name="comment" rows="" cols=""></textarea>
                    <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                </form>
            </div>
            
            	
        </div> <!-- END of templatemo_content -->
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->
    
    <?php include 'partials/footer.php'; ?>