<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA- Compatible" content="ie = edge">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type = "text/javascript"></script>
    

    <title> Log in </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet"><!-- conecting to google fonts-->
    <link rel = "stylesheet" href="../csc-20021 website/css/Log in.css"/> <!-- calling login page ccs-->
</head>

<body>
    <div class="Search">
        <form id="rsssearchform" action = "RSS.php" method = "POST"> <!-- passing infor in post from back to RSS.php  -->
        <p1> School: <input type="text" name = "schoolchoice" placeholder = "School Name"></p1> <!-- gathering username value from form  -->
        <p2> Date: <input type="date" name = "datechoice" placeholder="Date"></p2><!-- gathering password value from form  -->
        <input type = "submit" id= "srchbtn" name = "Search">
        </form>
    </div>

<?php
$url =  'http://localhost/csc-20021/csc-20021%20website/php/SRNS.xml';

$xml = simplexml_load_file($url) or die ("Can't connect to URL");

$allpublications = $xml->Publications;

document.getElementById("srchbtn").addEventListener("click"); 

?><pre> 
    <?php 
    
    foreach($allpublications as $publications)
    {
        foreach($publications[0]-> school as $titles)
        {
            if($titles == "schoolChoice")
            {
                echo $titles;
            }
        }
        foreach($publications[0]-> pubyr as $date)
        {
            if($date == "schoolChoice")
            {
                echo $date;
            }
        } 
} ?> </pre>


</script>

</body>