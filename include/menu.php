
<?php
            $menu_array=array("index"=>"index.php", "resume"=>"resume.php", "foto"=>"foto.php", "contact"=>"contact.php", "blog"=>"blog.php");
?>
<ul>

<li><a href="<?php echo "$menu_array[index]"; ?>" class="home"><span></span></a></li>
<li><a href="<?php echo "$menu_array[resume]"; ?>" class="resume"><span></span></a></li>
<li><a href="<?php echo "$menu_array[foto]"; ?>" class="foto"><span></span></a></li>
<li><a href="<?php echo "$menu_array[contact]"; ?>" class="contact"><span></span></a></li>
<li><a href="<?php echo "$menu_array[blog]"; ?>" class="blog"><span></span></a></li>
</ul>
?>