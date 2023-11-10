<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rank XI RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header class="container bg-warning text-white display-1">
        <div class="row">
            <div class="col-12 py-8 text-center">
                <marquee>
                    <p><font color="white">WELCOME TO XI PPLG</font></p>
                </marquee>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-4">
                <h1>INPUT DATA</h1>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nilai</label>
                            <input type="number" name="nilai" class="form-control">
                        </div>
                        <button class="btn btn-warning" type="submit">KIRIM</button>
                    </form>
            </div>
            <div class="col-8">
                <h1>INPUT RANKING</h1>
                    <table class="table table-bordered table table-striped text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php foreach($data as $key => $d): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $d['name'] ?></td>
                  <td><?= $d['score'] ?></td>
                </tr>
                <?php endforeach ?>
              </tbody>
                        <tfoot>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tfoot>
                    </table>
                            </div>
                        </div>
                    </main>

    <footer class="container bg-light">
        <div class="row">
            <div class="col-12 py-4">
               <center>&copy; happy coding bersama pak mujahid</center> 
            </div>
        </div>
    </footer>

</body>

</html>