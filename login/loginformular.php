<?php
    session_start();
?>
<form action="userlogin.php" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">

<?php $session = session_id(); 
echo $session;

?> 