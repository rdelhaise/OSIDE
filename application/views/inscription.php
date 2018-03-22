<?php
$attributes = array('id' => 'form_sign_in');
echo form_open('auth/signInProcess', $attributes);
?>
<body style="margin-top: 100px!important;">

<form action=""  name="form_sign_in" method="post" >
    <input type="text" name="firstname" placeholder="Prenom">
    <input type="text" name="name" placeholder="Nom">
    <input type="mail" name="mail" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="text" name="adress" placeholder="Adresse">
    <input type="text" name="city" placeholder="Ville">
    <input type="text" name="zip" placeholder="Code Postal">
    <input type="text" name="mobile" placeholder="N° de mobile">
    <input type="text" name="tel" placeholder="Téléphone fixe">
    <input type="submit" value="S'inscrire">


</form>

</body>
