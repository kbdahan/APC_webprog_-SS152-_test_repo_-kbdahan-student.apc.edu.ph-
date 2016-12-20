<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href= "<?php echo base_url('assets/css/styles.css');?>"/>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>BlackHole Disposal</title>
   <script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>
<body>
<header>
  <div class = "wrapper">
    <a id = "logo" href = "<?php echo base_url(); ?> Home/Main" target = "display"></img>
    </a><a id = "logo2" href = "<?php echo base_url();?>Main/Main" target = "display"><img src="<?php echo base_url('assets/uploads/img/logo.png');?>" alt = "" width="317"></a><img src="<?php echo base_url('assets/uploads/img/me.JPG');?>" width="151" height="115" alt="" border = "3" border-color = "black"/>
    <nav></nav>
    <div class = "clearfix"></div>
  </div>
</header>
    
<div id='cssmenu'>
<ul>
   <li class='active'><a href="<?php echo base_url('Home');?>"><span>Home</span></a></li>
   <li class='has-sub'><a href="<?php echo base_url('Home/about'); ?> "><span>About</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>Photo Gallery</span></a>
      <ul>
         <li><a href="childhoodgallery.html"><span>Childhood</span></a></li>
         <li><a href="FamilyGallery.html"><span>Family</span></a></li>
         <li><a href="elementarygallery.html"><span>Elementary</span></a></li>
         <li><a href="highschoolGallery.html"><span>HighSchool</span></a></li>
         <li class='last'><a href="collegegallery.html"><span>College</span></a></li>
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