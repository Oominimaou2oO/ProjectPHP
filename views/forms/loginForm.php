<?php
/**
 * un formulaire d’authentification par pseudonyme et mot de passe
 * et avec compte Google, Facebook ou Twitter
 */
?>
<div class="loginDiv">

    <h4>Connectez-vous ?</h4>
    <!--SIGN IN FORM-->

    <form class="form-horizontal" method="post" action="login">
        <!--USERNAME-->
        <input type="text" name="login" placeholder="Identifiant ou Email"><br><br>
        <!--PASSWORD-->
        <input type="password"  name="password" placeholder="Password"><br><br>
        <!--SUBMIT-->
        <input class="btn" type="submit" value="Submit">
        <!--SUBMIT-->
        <label class="checkbox">
            <input type="checkbox"> Remember me
        </label>
        <a class="forgot" href="./forgotForm.php">Mot de passe oublié ?</a>
        <hr>
        <!--SOCIAL CONNECT-->
        <div class="socialConnect">
<!--            <button type="submit"><img src="web/img/fb_icon_325x325.png" class="img-rounded"></button>-->
<!--            <button type="submit"><img src="web/img/share-googleplus.png" class="img-rounded"></button>-->
            <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
            <div id="my-signin2"></div>
            <script>
                function onSuccess(googleUser) {
                    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                }
                function onFailure(error) {
                    console.log(error);
                }
                function renderButton() {
                    gapi.signin2.render('my-signin2', {
                        'scope': 'https://www.googleapis.com/auth/plus.login',
                        'width': 200,
                        'height': 50,
                        'longtitle': true,
                        'theme': 'dark',
                        'onsuccess': onSuccess,
                        'onfailure': onFailure
                    });
                }
            </script>
        </div>
    </form>
</div>