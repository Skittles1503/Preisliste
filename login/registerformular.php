
<style>
#success {
    display:none;
}

#success:target {
    display: block;
    background: green;
    color:white;
}
</style>
<div id="success">Benutzer eingefügt</div>
<form action="register.php" method="post">
E-Mail: <input type="email" name="email" /><br />
Passwort: <input type="password" name="passwort" /><br />
Vorname: <input type="text" name="vorname" /><br />
Nachname: <input type="text" name="nachname" /><br />
<input type="Submit" value="Registrieren" />


<form action="login.php" method="get"><input type="submit" name="senden" value="zum Loginbereich" /></form>




</form>