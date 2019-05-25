<!doctype html>
<?php
    $koneksi = new mysqli("localhost","root@localhost","","test");
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <title>Data Programmers</title>
    <style>
        *{
            margin:20px auto;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="table-responsive-lg">
            <table class="table table-bordered">
            <tbody>
                <tr>
                    <td colspan="2">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-10">
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Programmer">
                            </div>
                            <div class="col-lg-2">
                            <button type="submit" value="submit"  class="btn btn-success" name="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <?php 
        $no=1;
        $ambildata = $koneksi->query("SELECT * FROM users order by id ASC");
        while($data = $ambildata->fetch_assoc()){ ?>
        <div class="table-responsive-lg">
            <table class="table table-bordered ">
            <tbody>
                <tr>
                    <td width="50%"><?=$no.'. '.$data['name']?></td>
                    <td rowspan="2">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-lg-8">
                                <input type="text" class="form-control" name="skill_name" placeholder="Masukan Kemampuan Programmer">
                                <input type="hidden" class="form-control" name="id_user" value="<?=$data['id']?>">
                                </div>
                                <div class="col-lg-2">
                                <button type="submit" value="tambah_skill"  class="btn btn-danger" name="submit_skill">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                      <?php
                      $kemampuan = "";
                        $getSkill = $koneksi->query("SELECT * FROM skills where user_id=$data[id] ");
                        while($skill = $getSkill->fetch_assoc()){ 
                            $kemampuan .= $skill['name'].', ';
                        }
                        echo substr($kemampuan,0,-2);
                      ?>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>

        <?php $no++; }  ?>

    </div>


    <?php
        if (isset($_POST['submit'])){
            mysqli_query($koneksi,"INSERT INTO users VALUES('','$_POST[nama]')");
            echo "<script>location='index.php';</script>";
        }

        if (isset($_POST['submit_skill'])){
            mysqli_query($koneksi,"INSERT INTO skills VALUES('','$_POST[skill_name]','$_POST[id_user]')");
            echo "<script>location='index.php';</script>";
        }
    ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>