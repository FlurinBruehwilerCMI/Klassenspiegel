<?php
include "php/templates.php";

session_start();

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP20b - Home</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="/js/jQuery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://tbz.ch/wp-content/themes/tbz/favicons/favicon.ico">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <script src="/js/errorResolver.js"></script>
    <script src="/js/login.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<?php echo getNavbar($_SESSION); ?>

<h1 class="text-center" style="margin-top: 50px">Klasse AP20b/BIN20a</h1>
<p class="text-center">Das Webportal der Klasse - eine Eigenentwicklung.</p>

<!-- Login Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Einloggen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Schliessen" style="outline: none;">
                    <span aria-hidden="true" style="outline: none">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="login-email">E-Mail</label>
                    <input type="email" class="form-control" id="login-email"
                           placeholder="max.mustermann@mustermail.ch">
                </div>
                <div class="form-group">
                    <label for="login-password">Passwort</label>
                    <input type="password" class="form-control" id="login-password" placeholder="Passwort">
                    <small id="login-error" class="form-text" style="color: red;"></small>
                    <small id="login-http-error" class="form-text" style="color: red;"></small>
                </div>
            </div>
            <div class="modal-footer">
                <a id="login-btn-register" class="float-left">Noch kein Konto?</a>
                <button id="login-login-btn" type="button" class="btn btn-success float-right" disabled>Login</button>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrieren</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Schliessen" style="outline: none">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="register-email">E-Mail</label>
                    <input type="email" class="form-control" id="register-email"
                           placeholder="max.mustermann@mustermail.ch">
                </div>
                <div class="form-group">
                    <label for="register-password">Passwort</label>
                    <input type="password" class="form-control" id="register-password" aria-describedby="register-password-hint" placeholder="Passwort">
                    <small id="register-password-hint" class="text-muted">Dein Passwort muss mindestens 8 Zeichen lang sein.</small>
                    <small id="register-error" class="form-text" style="color: red;"></small>
                    <small id="register-http-error" class="form-text" style="color: red;"></small>
                </div>
                <div class="form-group">

                </div>
            </div>
            <div class="modal-footer">
                <a id="register-btn-login" class="float-left">Schon registriert?</a>
                <button id="register-register-btn" type="button" class="btn btn-success float-right" disabled>
                    Registrieren
                </button>
            </div>
        </div>
    </div>
</div>
<script src="js/login.js"></script>
<script src="js/register.js"></script>
</body>

</html>