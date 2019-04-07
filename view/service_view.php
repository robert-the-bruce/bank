<form method="POST">
    <div class="container">
        <div class="row">
            <div class="eleven columns">
                <label for="fname">Vorname</label>
                <input class="u-full-width" name="fname" type="text" placeholder="Vorname" id="fname" required>
            </div>
        </div>
        <div class="row">
            <div class="eleven columns">
                <label for="lname">Nachname</label>
                <input class="u-full-width" name="lname" type="text" placeholder="Nachname" id="lname" required>
            </div>
        </div>
        <div class="row">
            <div class="eleven columns">
                <label for="birthdate">Geburtsdatum</label>
                <input class="u-full-width" name="birthdate" type="date" placeholder="" id="birthdate"
                       min="1900-01-01"
                       max="<?php echo date('Y-m-d'); ?>">
            </div>
        </div>
        <div class="row">
            <div class="eleven columns">
                <input type="submit" name="register" value="Registrieren">
            </div>
        </div>
    </div>
</form>


<?php
