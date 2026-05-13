<form action="index.php?nav=4" method="post" class="auth-form">
    <h1>Registrierung</h1>

    <div class="form-group">
        <label for="regUsername">Benutzername*</label>
        <input type="text" name="regUsername" id="regUsername" required>
    </div>
    <div class="form-group">
        <label for="regPassword">Passwort*</label>
        <input type="password" name="regPassword" id="regPassowrd" required>
    </div>
    <div class="form-group">
        <label for="regPasswordCheck">Passwort wiederholen*</label>
        <input type="password" name="regPasswordCheck" id="regPasswordcheck" required>
    </div>


    <div class="from-group">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" tabindex = "-1" autocomplete = "off"> 
    </div>


    <button type="submit" name="regsubmit">Registrieren</button>


</form>