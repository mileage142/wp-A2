<?php
  include_once('topPart.php');
  
  //from http://php.net/manual/en/function.scandir.php#87760

function myscandir($dir, $exp, $how='name', $desc=0) 
{ 
    $r = array(); 
    $dh = @opendir($dir); 
    if ($dh) { 
        while (($fname = readdir($dh)) !== false) { 
            if (preg_match($exp, $fname)) { 
                $stat = stat("$dir/$fname"); 
                $r[$fname] = ($how == 'name')? $fname: $stat[$how]; 
            } 
        } 
        closedir($dh); 
        if ($desc) { 
            arsort($r); 
        } 
        else { 
            asort($r); 
        } 
    } 
    return(array_keys($r)); 
} 

$r = myscandir('./', '[a-zA-Z]',  1); 
print_r($r); 

  include_once('bottomPart.php');
?>