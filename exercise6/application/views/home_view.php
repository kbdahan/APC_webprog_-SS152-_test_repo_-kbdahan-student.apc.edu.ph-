<!DOCTYPE html>
<html>
<head>
  <title>BlackHole Disposal</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="image_slide.js"></script>
  <style>
.error {color: #FF0000;}
</style>
</head>

<body>
  <div id="main">
    <div id="header">
      
    </div>
    
  <div id="site_content"> 
  
    <div id="text_content"> 
      <font face = "Hallo Sans">      
        <h1>Kristian Nikko Dahan</h1>
        <p>Welcome to my mind palace, this is the place of things you need to know about me (well the mostly this). I'm 19 years old right now as I edit this right now, I was born on September 10, 1997; I know right close to 9/11 one day you're happy then *boosh* mass panic everywhere by a terrorist attac...... wait what am I doing, I'm explaining all there is to know about me. Anyways my hobbies are singing, dancing(when no one is looking), playing videogames,etc. every young teen hobbies (so cliche). As you are reading this you are asking yourself, why even in the description form you put meta conversation, it's because I want to make the description longer, silly! See, as I explained why I put description like this it makes it longer(still doing it).Back to the description, as you can see in your right I look like a nerd, it is because I am a super nerd, but that doesn't mean I can't beat the SH*T out of you, YOU MOTHERF****R (WOAH DUDE! remember you're explaining).I love Superheroes so much that I actually act like one, no kidding. Imagine me running up and down the stairs with noises like lightning, acting like the flash and all(LOL NERD!)</p>      
        <p>Why Blackhole Disposal? It is where all my memories eventually go, like the blackhole in space it is where all matter eventually end up caused by an exploding sun; Or maybe I ran out of names to call the website either way still cool (ain't it?). Soooooo..... What now? You want more info? FINE! I may look like a serious guy but if you met me, I am more likely a clown than a dead serious guy (stop refrencing the Joker, dude) I love the Joker, you know the Joker right? enemy of Batman, I always wanted to be the Joker. Yeah you guessed it I'm Evil MWAHAHAHAH! Nah I'm just messing with you I can impersonate him and cosplay sometimes (but not cosplaying anime shit, because you know eww, some not all though). I'm getting tired introducing myself *SIGH* if you want, explore other stuff in the website. You just can't keep reading this as the picture on your right switch in to me urinating on a fountiain (by the way it's an illusion) have fun reading my head.</p>
        <hr>
        <br>
        <h1>5 Trivias About Me </h1>
        <br>
        <h2>Q: What is my favorite Comic Book Brand?</h2>
        <p id="ans1"> Click the Button For the answer</p>
        <button type="button" onclick="document.getElementById('ans1').innerHTML = 'Trick Question, I love both DC and Marvel'" >Answer!</button>
        <br>
        <h2>Q: What is my Talent?</h2>
        <p id="ans2"> Click the Button For the answer</p>
        <button type="button" onclick="document.getElementById('ans2').innerHTML = 'Singing. I have a high range voice, I can hit high notes easily. '" >Answer!</button>
        <br>
        <h2>Q: What is my Fear?</h2>
        <p id="ans3"> Click the Button For the answer</p>
        <button type="button" onclick="document.getElementById('ans3').innerHTML = 'Heights, I hate high places.'" >Answer!</button>
        <br>
        <br>
        <h2>Q: What do I do when I'm Bored?</h2>
        <p id="ans4"> Click the Button For the answer</p>
        <button type="button" onclick="document.getElementById('ans4').innerHTML = 'I usually lay down and binge watch videos, I procrastinate a lot and I am not proud. But when I am not lazy I relaxed and play the guitar.'" >Answer!</button>
        <br>
        <h2>Q: In 5 words how do I describe myself?</h2>
        <p id="ans5"> Click the Button For the answer</p>
        <button type="button" onclick="document.getElementById('ans5').innerHTML = 'I am POLITE not NICE!'" >Answer!</button>


        </font>
    </div><!--close text_content-->   
  
      <ul class="slideshow">
       <?php if(!empty($images)): foreach($images as $img): ?>
    <li><img src="uploads/<?php echo $img['image']; ?>" alt=""></li>
<?php endforeach; endif; ?>
      </ul>     
    


    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Any Question? Ask Away!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>



  </div><!--end site_content-->
  </div><!--end main-->


</body>
</html>


