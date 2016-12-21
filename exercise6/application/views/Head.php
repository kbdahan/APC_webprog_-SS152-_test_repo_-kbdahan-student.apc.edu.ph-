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
  <script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body>
<header>
  <div class = "wrapper">
    <a id = "logo" href = "<?php echo base_url('Home'); ?>"></img>
    </a><a id = "logo2" href = "<?php echo base_url('Home');?> "><img src="<?php echo base_url('assets/uploads/img/logo.png');?>" alt = "" width="317"></a><img src="<?php echo base_url('assets/uploads/img/me.JPG');?>" width="151" height="115" alt="" border = "3" border-color = "black"/>
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
         <li><a href="<?php echo base_url('PhotoGallery/childhood');?>"><span>Childhood</span></a></li>
         <li><a href="<?php echo base_url('PhotoGallery/family');?>"><span>Family</span></a></li>
         <li><a href="<?php echo base_url('PhotoGallery/elementary');?>"><span>Elementary</span></a></li>
         <li><a href="<?php echo base_url('PhotoGallery/highschool');?>"><span>HighSchool</span></a></li>
         <li class='last'><a href="<?php echo base_url('PhotoGallery/college');?>"><span>College</span></a></li>
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