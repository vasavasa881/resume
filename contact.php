<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal site</title>
<meta name="keywords" content="simple, grid, theme, free templates, web design, one page layout, slategray, steelblue, templatemo, CSS, HTML" />
<meta name="description" content="Simple Grid is a one-page website template provided by templatemo.com" />
<link href="css/style.css" type="text/css" rel="stylesheet"/>

</head>   
<body>

<div id="wrapper">
	<div id="header">
    </div>



    <div id="menu">
        <?php
        include 'include/menu.php';
        ?>
    </div>
    
    <div id="main">

        <div id="contact" class="main_box">
        	<h1>Contact Information</h1>
        	<p>Nullam a tortor est, congue fermentum nisi. Maecenas nulla nulla, lobortis eu volutpat euismod, scelerisque ut dui. Integer luctus tellus ac mi malesuada dignissim. Sed id diam dui. In ut nunc urna.</p>
                <div class="cleaner h30"></div>
                <div class="col_12 float_l">
                <h4>You may send us a message.</h4>
                <div id="contact_form">
                    <form method="post" name="contact" action="#">
                        <input type="hidden" name="post" value="Send" />
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
						
						<label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                        <div class="cleaner h10"></div>
						
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                    
                    </form>
                
                </div> 
                </div>
                

                    
                    <h4>Sergiypm@gmail.com</h4>
                    <h6>Pietsko</h6>
                    Kiev<br />
                    Malinovskogo street 12<br />

					<strong>Phone:</strong> 035-060-4440 <br />
                    <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a> 
                </div>
            <div class="cleaner"></div>

		</div> <!-- END of contact -->
    </div> <!-- END of -->

    
    <div id="footer">
    	Copyright © 2048 Your Company Name
    </div> 
</div>


</body>
</html>