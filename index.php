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
$result = $conn->query($sql);

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
            gap: 10%;
        }
    </style>
</head>

<body>
    <main>
        <section class="first_section">
            <div>
                <img class="logoo" src="../fifa/pic/logo.png" alt="logo" />
            </div>
            <div class="container1">

                <div class="titre">
                    <h1>World Cup 2030</h1>
                    <p>Embarquez pour un voyage inoubliable <br> à travers le monde du football <br> lors de la Coupe du Monde. <br> Des stades emplis d'excitation <br> au frisson des compétitions acharnées,<br>chaque moment est une célébration du sport<br> et de la compétition internationale.<br> Vivez la magie du jeu alors que<br> les nations s'affrontent pour la gloire ultime,<br> créant des souvenirs qui resteront gravés dans l'histoire du football</p>
                </div>

            </div>

        </section>
        <section>
            <form class="p-5  row" action="" method="post">
                <label for="" class="text-white p-3 h1 display-6">filter teams by group</label> <br>
                <select class="col-10" name="groupe" class="form-select">
                    <option value="0">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">E</option>
                    <option value="6">F</option>
                    <option value="7">G</option>
                    <option value="8">H</option>
                </select>
                <input type="submit" value="go" name="send" class="col-2 col  btn btn-dark">
            </form>

            <table class="table table-warning text-center mb-5 container">
                <thead class="table-danger">
                    <th class="groupe">Name</th>
                    <th>drapeau</th>

                </thead>
                <tbody>
                    <?php
                    if (@$_POST["send"]) {
                        $idG = $_POST["groupe"];
                        $sql = "select * from equipes where idGroupe = $idG";
                        $req = mysqli_query($conn, $sql);
                        while ($group = mysqli_fetch_row($req)) {

                    ?>
                            <tr>
                                <td><?php echo $group[1] ?></td>

                                <td><img src="<?php echo $group[2] ?>" alt=""></td>

                            </tr>
                    <?php
                        }
                    }
                    ?>



                </tbody>
            </table>

        </section>

        <section class="second_section">
            <div class="groupe">
                <?php
                while ($row = $result->fetch_assoc()) {
                    $groupID = $row["idGroupe"];
                ?>
                    <div class="carte my_carte">
                        <div class="card m-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-dark text-light text-center"><?php echo $row["nom"] ?></li>

                                <li class="list-group-item ">
                                    <?php
                                    $sql2 = "SELECT * FROM equipes WHERE idGroupe = '$groupID';";
                                    $rs1 = $conn->query($sql2);

                                    while ($ow = $rs1->fetch_assoc()) {
                                        // $imageSrc = $ow["drapeau"];
                                        // echo "<img src='$imageSrc' alt='' style='width: 50px; height: auto; width: 40px;
                                        // height: auto;
                                        // left: 110px;
                                        // top: 20px;'>"; 
                                        echo $ow["nom"] . "<br>";
                                    }
                                    ?>
                                </li>


                                <li class="list-group-item bg-dark text-light text-center"><?php echo $row["stade"] ?></li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>

        <!-- ... (le reste de votre code) -->

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>