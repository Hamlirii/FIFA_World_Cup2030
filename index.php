<?php


$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "woldcup";


$conn = new mysqli($serverName, $userName, $password, $dbName);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM groupes;";
$sql2 = "SELECT * FROM equipes;";
$result = $conn->query($sql);

$rs1 = $conn->query($sql2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FIFAWORLDCUP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <style>

    .groupe {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      /* justify-content: center; */
      /* align-items: center; */
      gap:10%;
    }
  </style>
</head>

<body>
  <main>
    <section class="first_section">
      <div>
        <img src="LWC30-removebg-preview.png" alt="logo" />
      </div>
      <div class="container1">

        <div class="titre">
          <h1>World Cup 2030</h1>
          <p>Embarquez pour un voyage inoubliable à travers le monde du football lors de la Coupe du Monde. Des stades emplis d'excitation au frisson des compétitions acharnées,chaque moment est une célébration du sport et de la compétition internationale. Vivez la magie du jeu alors que les nations s'affrontent pour la gloire ultime, créant des souvenirs qui resteront gravés dans l'histoire du football</p>
        </div>

      </div>

    </section>
    <section>
      <div class="btns">
        <button>View All</button>
        <button>Groupe A</button>
        <button>Groupe B</button>
        <button>Groupe C</button>
        <button>Groupe D</button>
        <button>Groupe E</button>
        <button>Groupe F</button>
        <button>Groupe G</button>
        <button>Groupe H</button>
      </div>
    </section>
    <section class="second_section">
      <div class="groupe">
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
          <div class="carte">
            <div class="card m-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark text-light text-center"><?php echo $row["nom"] ?></li>

                <li class="list-group-item"></li>

                <li class="list-group-item bg-dark text-light text-center"><?php echo $row["stade"] ?></li>
              </ul>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- <img src="./flagss/icons8-afrique-du-sud.png" alt=""> -->
      </div>
    </section>
  </main>
<?php
      
?>

<!-- pop up -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Equipe Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        equipe infos
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- end pop up -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>