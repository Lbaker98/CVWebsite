<?php
    session_start(); // stating session

    if(isset($_SESSION['loggedin'])) header("Location: ../repository.html"); // checking if the session is already active

    else if ($adDeets = fopen('http://localhost/csc-20021/csc-20021%20website/members.txt', 'r')) //opening file to read from
    {
        while (!feof($adDeets)) {
            $line = fgets($adDeets);
        }
        fclose($adDeets);
    }

    $file = file_get_contents('http://localhost/csc-20021/csc-20021%20website/members.txt'); //getting all file contense
    
    $file_lines = file('http://localhost/csc-20021/csc-20021%20website/members.txt'); //seperating the files via line

    foreach ($file_lines as $line) 
    {
        $split = explode(",",$line);//spliting the data via a comma to determin select amounts of information

        echo $split[0];
    }
        $u = $_POST['username'];
        $p = $_POST['password'];
    
    if($u==$split[0] && $p==$split[1]) //checking if the values within the memebrstxt file that contains the password and username
    {
        $_SESSION['loggedin']=TRUE; $_SESSION['username']=$split[0];
        header("Location: ../repository.html");
        alert("it has worked");
    }
    else //displaying error when it doesnot work properly
    {
        alert("it hasnt worked");
        $_SESSION['loggedin']=FALSE;
        header("Location: ../login.html");
    }    
?>
