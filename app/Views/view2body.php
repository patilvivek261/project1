<ul>
<?php
/**
 * 
 */
if((empty($subjects)) && (count($subjects)<=0) )
{
    echo "No Subject Data";    
}
else
{
    foreach ($subjects as $subject)
    {
        echo "<li>".$subject."</li>";
    }
    
}
?>
</ul>