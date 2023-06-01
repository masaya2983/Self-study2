<pre>
    <?php
    $true=TRUE;
    $false=FALSE;
    $a=$true    &&  $true;
    $b=$true    &&  $false;
    $c=$true    &&  $true   &&  $true;
    $d=$a=$true    &&   $false  &&  $false;
    $e=$true    &&  ($true  &&  $false);    
    var_dump($a,    $b, $C, $d, $e,);
    ?>
</pre>