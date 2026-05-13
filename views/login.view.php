<form action="<?=  $_SERVER["REQUEST_URI"]; ?>" method ="post" class="auth-form"> <!-- action auf dieselbe Seite -->
    <h1>Login</h1>

    <div class="form-group">
        <label for="username">Benutzername</label>
        <input type="text" name="username" id="username" placeholder="Benutzername" required>
    </div>
    <div class="form-group">
        <label for="password">Passwort</label>
        <input type="password" name="password" id="password" placeholder="Passwort" required>
    </div>


    <div class="from-group">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
    </div>


    <div class="form-group">
        <button type="submit" name="loginsubmit" id="formButton">Einloggen</button>
    </div>

    <p style="text-align: center; margin-top: 20px;">Noch kein Konto? <a href="index.php?nav=4">Jetzt registrieren</a></p>

</form>