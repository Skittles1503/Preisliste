
<base href="https://www.chemnitz.de/">
<?php
    $html = file_get_contents('https://www.chemnitz.de/');
    $html = str_replace("Aktuelles","Hallo Welt",$html);
    print $html;
    
?>