<form action="index.php?nav=2" method = "post" class = "reg-form">
    <h1>Registrierung</h1>

    <div class="form-group">
        <label for="regUsername">Benutzername*</label>
        <input type="text" name = "regUsername" id = "regUsername" required>
    </div>
    <div class ="form-group">
        <label for="regPassword">Passwort*</label>
        <input type="password" name ="regPassword" id="regPassword" required>
    </div>
    <div>
        <label for="regPasswordCheck">Passwort wiederholen*</label>
        <input type="password" name="regPasswordCheck" id="regPasswordCheck" required>
    </div>
    <div class="from-group">
        <label for="website">Website</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
    </div>
</form>