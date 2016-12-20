<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href= "<?php echo base_url();?>css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>BlackHole Disposal</title>
   <script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</head>
<body background = "<?php echo base_url(); ?>uploads/bg1.jpg">
<header>
  <div class = "wrapper">
    <a id = "logo" href = "Main.html" target = "display"></img>
    </a><a id = "logo2" href = "main.html" target = "display"><img src="uploads/logo.png" alt = "" width="317"></a><img src="uploads/me.JPG" width="151" height="115" alt="" border = "3" border-color = "black"/>
    <nav></nav>
    <div class = "clearfix"></div>
  </div>
</header>
    
<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href="about.php"target = "display"><span>About</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>Photo Gallery</span></a>
      <ul>
         <li><a href="childhoodgallery.html"target = "display"><span>Childhood</span></a></li>
         <li><a href="FamilyGallery.html"target = "display"><span>Family</span></a></li>
         <li><a href="elementarygallery.html"target = "display"><span>Elementary</span></a></li>
         <li><a href="highschoolGallery.html"target = "display"><span>HighSchool</span></a></li>
         <li class='last'><a href="collegegallery.html"target = "display"><span>College</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Favorites</span></a>
      <ul>
         <li><a href="pets.html"target = "display"><span>Pets</span></a></li>
         <li class='has-sub'><a href='#'><span>Song</span></a>
            <ul>
               <li><a href="rock.html"target = "display"><span>Rock</span></a></li>
               <li><a href="pop.html"target = "display"><span>Pop</span></a></li>
               <li class='last'><a href="mellow.html"target = "display"><span>Mellow</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Links</span></a>
     <ul>
               <li><a href="https://www.facebook.com/Kristian.Nikko"target="_blank"><span>Facebook</span></a></li>
               <li><a href="https://twitter.com/NikkoDahan"target="_blank"><span>Twitter</span></a></li>
               <li><a href="add_data.php"target="display"><span>Contact</span></a></li>
            </ul>
   </li>
  </ul>
</div>
<center>
<iframe src = "Main.html" name = "display" width ="1330" height = "1025" frameBorder = "0"  scrolling="no" id="iframe"    onload='javascript:resizeIframe(this);'>


</body>
<html>
