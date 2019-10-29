<?php 

echo file_get_contents("../media/common/header.html");


#Include and echo all files from summaries directory
foreach (glob("content/*") as $filename)
{
    include($filename);
}


echo file_get_contents("../media/common/footer.html");

?>
