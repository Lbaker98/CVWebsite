<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All Entries</title>
    </head>

<body>
<?php
if(isset($_REQUEST['ok']))
{
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("http://localhost/csc-20021/csc-20021%20website/php/SRNS.xml");

    $rootTag = $xml->getElementsByTagName("publications")->item(0);
    $dataTag = $xml->createElement("data");

    $doiTag = $xml->createElement("uNum",$_REQUEST['DOI']);
    $titleTag = $xml->createElement("uTitle",$_REQUEST['Title']);
    $authorTag = $xml->createElement("uAuth",$_REQUEST['Author']);
    $publisherTag = $xml->createElement("uPub",$_REQUEST['Publisher']);
    $pubyrTag = $xml->createElement("uPubyr",$_REQUEST['Pubyr']);
    $schoolTag = $xml->createElement("uSch",$_REQUEST['School']);
    $sclcdTag = $xml->createElement("uSchlcd",$_REQUEST['Schoolcode']);
    

    $dataTag->appendChild($doiTag);
    $dataTag->appendChild($titleTag);
    $dataTag->appendChild($authorTag);
    $dataTag->appendChild($publisherTag);
    $dataTag->appendChild($pubyrTag);
    $dataTag->appendChild($schoolTag);
    $dataTag->appendChild($sclcdTag);
    

    $xml->save("http://localhost/csc-20021/csc-20021%20website/php/SRNS.xml");
}?>
        <form id = "submissionForm" action = "submit.php" method = "POST">

            <input type="number" name = "uNum"/>
            <input type="text" name = "uTitle"/>
            <input type="text" name = "uAuth"/>
            <input type="text" name = "uPub"/>
            <input type="date" name = "uPubyr"/>
            <select name = "uSch">
                <option>School of Chemical and Physical Sciences</option>
                <option>School of Computing and Mathematics</option>
                <option>School of Geography, Geology and the Environment</option>
                <option>School of Life Sciences</option>
                <option>School of Physical and Geographical Sciences</option>
                <option>School of Psychology</option>
            </select>
            <input type="submit" name = "ok"/>
    </body>
</html>