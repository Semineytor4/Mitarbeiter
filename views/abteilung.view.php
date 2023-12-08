<h2>Abteilung</h2>
<hr/>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>

              <th scope="col">Abteilung</th>
              <th scope="col">Löchen</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              require "fun/getAbteilungen.php";
              $query = "SELECT * FROM abteilung";
              $antwort = getAbteilung($query);

              foreach ($antwort as $key => $value) {
            ?>
            <tr>
              <td><?= $value["id"]?></td>
              <td><?= $value["abteilung"]?></td>
              <td><a href="/abteilung/delete?id=<?= $value["id"]?>">Löchen</a></td>
            </tr>
          <?php }?>
          </tbody>
        </table>
      </div>