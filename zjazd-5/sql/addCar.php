<?php include 'header.php';


$tes = <<<EOD
<div class="container mt-5">
        <h2>dodaj samochow</h2>
        <form action="sqlAddCar.php" method="POST">
            <div class="form-group">
                <label for="id">id</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="marka">marka</label>
                <input type="text" class="form-control" id="marka" name="marka" required>
            </div>
            <div class="form-group">
                <label for="model">model</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="cena">cena</label>
                <input type="number" class="form-control" id="cena" name="cena" required>
            </div>
                  <div class="form-group">
                <label for="rok">rok</label>
                <input type="number" class="form-control" id="rok" name="rok" required>
            </div>
                  <div class="form-group">
                <label for="opis">opis</label>
                <input type="text" class="form-control" id="opis" name="opis" required>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
EOD;
echo $tes;