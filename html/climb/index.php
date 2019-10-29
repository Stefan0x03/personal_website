<?php echo file_get_contents("../media/common/header.html"); 

	echo "TODO add writeups for all listed climbing areas";

?>

<?php
#Include and echo all files from summaries directory
foreach (glob("content/*") as $filename)
{
    echo file_get_contents($filename);
}
?>

<?php echo file_get_contents("../media/common/footer.html"); ?>
