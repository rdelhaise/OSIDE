<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 21/02/2018
 * Time: 20:08
 */
?>

<?php

$attributes = array('id' => 'form_login');
echo form_open('auth/login_process', $attributes);
?>

<body style="background-color: #0b2e13; padding-top: 150px;">
<form method="post" id="form_login" class="form-group" >

    <input type="text" name="username" placeholder="Nom de compte" class="form-check-inline "/>
    <input type="password" name="password" placeholder="password" class="form-check-inline"/>
    <input type="submit" name="connexion" value="Se connnecter" class="form-check-inline "/>
</form>
</body>