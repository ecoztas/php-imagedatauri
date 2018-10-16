<?php

require_once('./Converter.class.php');
use ImageDataURI\Converter;

$converter = new Converter();

function convertData($tmpname = null)
{
    global $converter;
    $converter->setTmpname($tmpname);
    $result = $converter->convertData();
    
    return($result);
}
