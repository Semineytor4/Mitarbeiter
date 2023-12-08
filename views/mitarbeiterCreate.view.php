<form class="row g-3" action="/mitarbeiter/fun/create" method="post">
  <div class="col-md-6">
    <label for="vorname" class="form-label">Vorname</label>
    <input type="text" class="form-control" id="vorname" name="vorname">
  </div>
  <div class="col-md-6">
    <label for="nachname" class="form-label">Nachname</label>
    <input type="text" class="form-control" id="nachnamne" name="nachname">
  </div>
  <div class="col-12">
    <label for="alter" class="form-label">Alter</label>
    <input type="number" class="form-control" id="alter" name="alter">
  </div>
  <div class="col-12">
    <label for="geb_datum" class="form-label">Geburts Datum</label>
    <input type="date" class="form-control" id="geb_datum" name="geb_datum">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Abteilung</label>
    <select id="inputState" class="form-select" name="abteilung">
        <?php 
            require "fun/getAbteilungen.php";
            $query = "SELECT * FROM abteilung";
            $antwort = getAbteilung($query);
        
            foreach ($antwort as $key => $value) {
        ?>
      <option value="<?= $value["id"]?>"><?= $value["abteilung"]?></option>
      <?php }?>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Hinzufügen</button>
  </div>
</form>