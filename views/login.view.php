<form action="<?php $_SERVER["REQUEST_URI"] ?>" method = "post" class="log-form"> <!-- Daten an die selbe Seite geschickt -->
    <h1>Login</h1>

    <div class="form-group">
        <label for="logUsername">Benutzernamen eingeben*</label>
        <input type="text" name="logUsername" id="logusername" required>
    </div>
    <div class="form-group">
        <label for="logPassword">Passwort eingeben*</label>
        <input type = "password" name ="logPassword" id = "logPassword" required>
    </div>
    <div class="from-group">
        <label for ="website">Website</label>
        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
    </div>
    <div class="form-group">
        <button type="submit" name="logSubmit" id="logSubmit">Einloggen</button>
    </div>

    <p>Noch kein Konto? <a href="index.php?nav=2">Jetzt registrieren</a></p>
</form>