<?php

$xmlparser = xml_parser_create();//creating xml parser

$fp = fopen("../SRNS.xml", "r"); //opening xml file
$xmldata = fread($fp, 4096);

// parse XML data into an array
xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
print_r($values);
fclose($fp);

function html_table($values = array()) // code to take parsed values and input them into an array
{
    $rows = array();
    foreach ($values as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
}
?>