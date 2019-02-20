
<style>
#success {
    display:none;
}

#success:target {
    display: block;
    background: green;
    color:white;
}
#div1 {
    size: 100%;
    color: white;
    background-color:grey;
    height:60px;
    margin-bottom:20px;
}
#gotologin {
    color:white;
    text-decoration:none;
    size:10px;
    border-style: solid;
    border-width: medium;
    margin-top:20px;
}
#gologin{
    margin-left:15px;
    padding-top: 20px;
}
#gotologin:hover{
    color:orange;
}
</style>
<div id="div1">
<div id="gologin">
<a href="loginformular.php" id="gotologin">Zum Loginbereich</a>
</div>
</div>

<div id="success">Benutzer eingefügt</div>
<form action="register.php" method="post">
E-Mail: <input type="email" name="email" /><br />
Passwort: <input type="password" name="passwort" /><br />
Vorname: <input type="text" name="vorname" /><br />
Nachname: <input type="text" name="nachname" /><br />
<input type="Submit" value="Registrieren" />


<form action="login.php" method="get"><input type="submit" name="senden" value="zum Loginbereich" /></form>




</form>