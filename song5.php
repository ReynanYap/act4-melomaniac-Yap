<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melomaniac Activity</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="bg">
<div class="navbar">
            <img src="media/logo.png" class="logo">
            <ul> 
                <li><a href="index.php">SONG 1</a></li>
                <li><a href="song1.php">SONG 2</a></li>
                <li><a href="song2.php">SONG 3</a></li>
                <li><a href="song3.php">SONG 4</a></li>
                <li><a href="song4.php">SONG 5</a></li>
                <li><a href="song5.php">SONG 6</a></li>
            </ul>
        </div>
        <div>
   
    </div> 
        <div class="title">
            <h1>Happier</h1>
            <p>By:Ed Sheeran</p><br><br>
            <audio id = "playsong" controls>
        <source src="song/Happier.mp3" type="audio/mp3">
        </audio>
     </div>
     <div class="welcome">
        <h2>WELCOME <br> TO <br> MELOMANIAC<br><p>"Find yourself through the music"</p> </h2>
     </div>
     <div > 
        <a href="#section1"> <img src="media/arrow1.gif" alt class="l"></a>
     </div>
</div> 

     <section id="section1">
         <div class="bk">
         <div class="ly">
             <?php
             echo "<h1>Happier</h1>";
             echo "<a>By: Ed Sheeran</a>";
             echo "<p><br>Walking down 29th and park</p>";
             echo "<p>I saw you in another's arms </p>";
             echo "<p>Only a month we've been apart</p>";
             echo "<p>You look happier</p>";
             echo "<p><br>Saw you walk inside a bar</p>";
             echo "<p>He said something to make you laugh</p>";
             echo "<p>I saw that both your smiles were twice as wide as ours</p>";
             echo "<p>Yeah you look happier, you do</p>";
             echo "<p><br>Ain't nobody hurt you like I hurt you</p>";
             echo "<p>But ain't nobody love you like I do</p>";
             echo "<p>Promise that I will not take it personal baby</p>";
             echo "<p>If you're moving on with someone new</p>";
             echo "<p><br>Cause baby you look happier, you do</p>";
             echo "<p>My friends told me one day I'll feel it too</p>";
             echo "<p>And until then I'll smile to hide the truth</p>";
             echo "<p>But I know I was happier with you</p>";
             echo "<p>But now, now that you're gone</p>";
             echo "<p><br>Sat in the corner of the room</p>";             
             echo "<p>Everything's reminding me of you</p>";
             echo "<p>Nursing an empty bottle and telling myself you're happier</p>";
             echo "<p>Aren't you?<br><br></p>";
             echo "<p>Ain't nobody hurt you like I hurt you</p>";

             ?>
       </div>      
    </div>
</section>


<section id="section2">
         <div class="s">
             <div class="w">
             <?php
             echo "<p>But ain't nobody need you like I do</p>"; 
             echo "<p>I know that there's others that deserve you</p>";
             echo "<p>But my darling I am still in love with you</p>";
             echo "<p><br>But I guess you look happier, you do</p>";
             echo "<p>My friends told me one day I'll feel it too</p>";
             echo "<p>I could try to smile to hide the truth</p>";
             echo "<p>But I know I was happier with you</p>";
             echo "<p><br>Baby you look happier, you do</p>";
             echo "<p>I knew one day you'd fall for someone new</p>";
             echo "<p>But if he breaks your heart like lovers do</p>";
             echo "<p>Just know that I'll be waiting here for you</p>";
             ?>
             </div>  
              
    <footer class="f">
       <div class="cy">
           <p>Copyright &copy; 2022. Reynan Merjan Yap</p>
        </div>
       </footer>  
       </div> 
       
    </div>
</section>

</body>
</html>
