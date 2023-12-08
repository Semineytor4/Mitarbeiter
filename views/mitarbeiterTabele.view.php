<h2>Mitarbeiter Liste</h2>
<hr/>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Bearbeiten</th>
              <th scope="col">Löschen</th>
              <th scope="col">id</th>
              <th scope="col">Vorname</th>
              <th scope="col">Nachname</th>
              <th scope="col">Alter</th>
              <th scope="col">Geburtsdatum</th>
              <th scope="col">Abteilung</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              require "fun/getMitarbeiter.php";
              require "fun/getAbteilungen.php";
              $query = "SELECT * FROM mitarbeiter";
              $antwort = getMitarbeiter($query);

              foreach ($antwort as $key => $value) {
         
                
            ?>
            <tr>
            <td><a href="/mitarbeiter/update?id=<?= $value["id"]?>">Bearbeiten</a></td>
              <td><a href="/mitarbeiter/delete?id=<?= $value["id"]?>">Löschen</a></td>
              <td><?= $value["id"]?></td>
              <td><?= $value["vorname"]?></td>
              <td><?= $value["nachname"]?></td>
              <td><?= $value["age"]?></td>
              <td><?= $value["geburts_datum"]?></td>
              <td>
                <?php
                  $id = $value["abteilung"];
                  $query = "SELECT * FROM abteilung WHERE id=$id";
                  $antwort = getAbteilung($query);
                  foreach ($antwort as $key => $value) {
                    echo $value["abteilung"];    
                  }
                  ?>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>