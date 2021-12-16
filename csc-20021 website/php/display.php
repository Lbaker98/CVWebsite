<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All Entries</title>
</head>


<body>

<button id = "logout"> logout</button>

<?php
if ($repoF = fopen('http://www.scm.keele.ac.uk/staff/g_misirli/fns_publications/5Fcom_2019.xml', 'r')) //opening the file to read from
    {
        while (!feof($repoF)) {
            $line = fgets($repoF);
        }
        fclose($repoF);
    }

    $file = file_get_contents('http://www.scm.keele.ac.uk/staff/g_misirli/fns_publications/5Fcom_2019.xml');//accessing all the information putting all contents into a single object
    
    $file_lines = file('http://www.scm.keele.ac.uk/staff/g_misirli/fns_publications/5Fcom_2019.xml');//running through the file line by line to seperate by line
?>


<script type="text/javascript"> // java code to prcedurly create a table that fills itself with the data from the file opened above
    function opsi($file)
    {
        var allRows = $file.split(/\r?\n|\r?/); // splitting the file via difffernt seporators
        var table = "<table>"
        for(var singleRow = 0;singleRow<allRows.length;singleRow++) //inital drawing of the table
        {
            if(singleRow=0)
            {
                table+="<thead>";
                table +="<tr>";
            }
            else
            {
                table += "<tr>";
            }
            var rowCells = allRows[singleRow].split(','); //imputting data all seperated by a comma
            for(var rowSingleCell =0;rowSingleCell<rowCells.length;rowSingleCell++){
                if(singleRow==0)
                {
                    table+="<th>";
                    table += rowCells[rowSingleCell];
                    table+="</th>";
                }
                else
                {
                    table+="<td>";
                    table += rowCells[rowSingleCell];
                    table+="</td>";
                }
            }
            if(singleRow ==0)    
            {
                table +="</tr>";
                table+="</thead>";
                table +="tbody";
            }
            else
            {
                table +="</tr>";

            }
            table +="</tbody>";
            table +="</table>";
            $("body").append(table); // the line in which the table is able to mold to the data
        }
        //ajax url linking back to the inital file
        $.ajax({ url:"SRNS.cv"
        datatype:"text"

        }).done(opsi)
    }
</script>
    
</body>
</html>