<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['text']);

    // Validate the input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Example: Display the submitted data (you can replace this with your own logic)
        echo "<p>Thank you, <strong>$name</strong>. Your message has been received.</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Subject:</strong> $subject</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        echo "<p style='color: red;'>Please fill in all required fields.</p>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        	
            <h1>Contact</h1>
            <div class="content_wrapper content_mb_60">
            <div id="contact_form">
                <h3>Contact Form</h3>
                <form method="post" name="contact" action="contact.php">
                    <div class="col_2">
                        <label for="fullname">Name:</label>
                      <input name="fullname" type="text" class="input_field" id="fullname" maxlength="30" />
                        <div class="clear"></div>
                    </div>
                    <div class="col_2 no_margin_right">
                      <label for="subject">Email:</label>
                      <input name="email" type="text" class="input_field" id="email" maxlength="30" />
                        <div class="clear"></div>
                    </div>
                    <div class="col_2">
                      <label for="fullname">Phone:</label>
                      <input name="phone" type="text" class="input_field" id="phone" maxlength="20" />
                        <div class="clear"></div>
                    </div>
                    <div class="col_2 no_margin_right">
                        <label for="subject">Subject:</label>
                      <input name="subject" type="text" class="input_field" id="subject" maxlength="50" />
                        <div class="clear"></div>
                    </div>
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    
                    <input type="submit" name="Submit" value="Submit" class="submit_btn left" />
                    <input type="reset" name="Reset" value="Reset" class="submit_btn right" />
                </form>
            </div> 
            <div class="clear"></div>
		</div>        
        <div class="content_wrapper content_mb_30">
        	<div class="col_2">
                <h3>Location One</h3>
                230-610 Nullam lacus diam,<br />
             Pulvinar sit amet convallis, 12120<br />
                 Lorem ipsum dolor<br /><br />
                
                 Tel: 010-050-5522<br />
                 Fax: 010-050-5511<br /><br />
                 
                 Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>
			</div>
            <div class="col_2 no_margin_right">
                <h3>Location Two</h3>
                130-110 Donec vitae dui nisi,<br />
                Duis gravida, Vestibulum 24240<br />
                Pellentesque et fermentum<br /><br />
                
                Tel: 020-030-4544<br />
                Fax: 020-030-4533 
               
			</div>
		</div>
        <h3>Map</h3>
        <div class="img_border">
        <iframe width="630" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe></div><br />

            	
        </div> <!-- END of templatemo_content -->
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->
    
    <?php include 'partials/footer.php'; ?>