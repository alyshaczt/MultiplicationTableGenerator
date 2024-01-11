<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 8</title>
  </head>

    <style>

         body {
            margin: 0;
            padding: 0;
            background-color: #ffe4e1;
            font-family:"Lucida Console", "Courier New", monospace;
            color: #ffa49b;
            font-weight: bold;
        }

        button {
            padding: 10px;
            background-color: #ffb6af;
            color:white;
            border-radius: 5px;
            border-color: #ffb6af;

        }

        input:focus, select:focus {
           border: 2px solid #ffb6af; 
           outline: none; 
        }

         .banner {
            background-size: cover;
            background-position: center;
            height: 230px;
            width:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff; 
            text-align: center;
            font-size: 24px;
        }

         .banner img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
        }

        .banner-text {
            position: absolute;
            font-family:"Lucida Console", "Courier New", monospace;
            top: 1%;
            left: 1%;
            color: white;
            font-size: 28px;
            z-index: 999;
        }
    
        .visit-count {
            position: fixed;
            bottom: 10px;
            right: 10px;
            padding: 10px;
            background-color: #ffb6af;
            color:white;
            border-radius: 5px;
        }

        #halloweenImage {
            position: fixed;
            top: 10px;
            right: 10px;
            max-width: 200px; 
            opacity: 0.5; 
        }

        #bottomLeftText {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 10px;
        }
    </style>
  <body>
    
<?php
        $name;
        $photo;

        $time = date('G');
        if (($time >= 5) && ($time < 12)){
            $name= 'Good morning!';
            $photo= 'https://media.discordapp.net/attachments/1072646011677319239/1175576818812719245/IMG_1275.jpg?ex=656bbc3a&is=6559473a&hm=59d8bab6a1fc55351f017c8b45992cdadd4ef8690688a13cda79ecf3513bd6cb&=&width=1440&height=365';

        }

        elseif(($time >= 12) && ($time < 17)){
            $name= 'Good afternoon!';
            $photo= 'https://media.discordapp.net/attachments/1072646011677319239/1175576850643296338/IMG_1275.jpg?ex=656bbc42&is=65594742&hm=0e5d551fb1e399bb408556e77dccff564f2e9057fecc19d01794dbe0de3878b4&=&width=1440&height=358';

        }

        elseif(($time >= 17) && ($time < 21)){
            $name= 'Good evening!';
            $photo= 'https://media.discordapp.net/attachments/1072646011677319239/1175576882394173460/IMG_1276.jpg?ex=656bbc49&is=65594749&hm=e906d923915d027d897efed0b34978bdd87707723b87b432aea2549a2142a268&=&width=1440&height=360';

        }
        else {
            $name= 'Good night!';
            $photo= 'https://media.discordapp.net/attachments/1072646011677319239/1175576916900728923/IMG_1276.jpg?ex=656bbc52&is=65594752&hm=fc52cc45887df9d19954b084e1bd8b67642cca416ca7291f3f8cd706f777f1d7&=&width=1440&height=358';
        }

        echo "<div class='banner'>";
        echo "<img src='$photo'>";
            echo "<div class='banner-text';>";
            echo $name;
        echo "</div>";
        echo "</div>";

    

?>

<?php
if (!isset($_COOKIE['visitCounter'])) {
    $visitCount = 1;
    
    setcookie('visitCounter', $visitCount, time() + 24 * 3600);
} else {
    $visitCount = $_COOKIE['visitCounter'];
    $visitCount++;
    
    setcookie('visitCounter', $visitCount, time() + 24 * 3600); 
}

echo "<div class='visit-count'>";
echo $visitCount;
echo "</div>";
?>
<br>
<br>
    <center>
    <h2>Generate Multiplication Table</h2>
    <br>

    <form action="table.php" method="post" target="_blank">
        <label for="number1">Enter y-value:</label>
        <input type="number" name="number1" id="number1" required>

        <br>
        <br>

        <label for="number2">Enter x-value:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <br>
        <br>
        <button type="submit">Generate Table</button>
    </form>

    </center>

 <?php
    if (isset($_GET['image'])) {
        $imageName = $_GET['image'];
        $opening = 'Halloween image is';
        $imagePath = '';

        switch ($imageName) {
            case 'mail.gif':
                $imagePath = 'https://ihypress.com/holidays/halloween/mail.gif';
                break;
            case 'walkers.gif':
                $imagePath = 'https://ihypress.com/holidays/halloween/walkers.gif';
                break;
            case 'broom.gif':
                $imagePath = 'https://ihypress.com/holidays/halloween/broom.gif';
                break;
        }

        echo '<img id="halloweenImage" src="' . $imagePath . '" alt="Halloween Image">';
        echo "<div id='bottomLeftText'>";
            echo 'Halloween image is ' . $imageName;
        echo "</div>";
    }
    ?>
  
</body>
</html>
