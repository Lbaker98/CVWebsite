<?php
$url =  'http://localhost/csc-20021/csc-20021%20website/php/SRNS.xml';

$xml = simplexml_load_file($url) or die ("Can't connect to URL");

$data = $xml->channel->publications;

foreach($data as $dataselector)
{
    echo "<table id = pubtbl>
    <caption> All publications </caption>
        <tr>
            <th> Title </th>
            <th> Author </th>
            <th> Publication Year </th>
            <th> Publisher </th>
            <th> DOI </th>
            <th> School </th>
            <th> School code </th>
        </tr>";
    foreach($dataselector->DOI as $doi)
    {   echo "<tr>";
        echo "<td> $DOI </td>";

        foreach($dataselector->Title as $title)
        {      
            echo "<td> $Title </td>";

            foreach($dataselector->Autour as $authour)
            {
                echo "<td> $author </td>";

                foreach($dataselector->Publisher as $publisher)
                {
                    echo "<td> $publisher </td>";

                    foreach($dataselector->Pubyr as $pubyr)
                    {
                        echo "<td> $pubyr</td>";

                        foreach($dataselector->School as $school)
                        {
                            echo "<td> $school </td>";
                            foreach($dataselector->Schoolcode as $sclcd)
                            {
                            echo "<td> $sclcd </td>";
                            }
                        }
                    }
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
<script type="text/javascript"> // logout button to destroy the session and navigate them back to the login page
 
 function logoutuser()
 {
     session_destroy();
     header("Location: ../login.html");
     alert('Session destroyed');
     exit();
 }
document.getElementById("logout").addEventListener("click", logoutuser()); 
</script>



