<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?=siteName;?></title>
</head>
<body>
    <h2><?=siteName;?></h2>

    <?php
        $skrydisNr=['08546','95134','75364','48526'];
        $bagazas=[10, 20, 30, 40, 50];
        $isKur=['KNS','VLN','PGN'];
        $iKur=['HEL','LON','BCN','BVA'];

        if(isset($_POST['submit'])){
            foreach ($_POST as $value){
                //echo "$value<br>";
                //var_dump($_POST);
               // var_dump($_POST['kaina']);
            }
        }

    ?>
    <h2 style="text-align: center;">Lektuvo Bilietai</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-4">
                <form method="post" action="view/bilietas.view.php">
                    <div class="form-group">
                        <select name="skrydzionr" id="skrydzionr" >
                            <option selected disabled>--Pasirinkite skrydzio numeri--</option>
                            <?php foreach ($skrydisNr as $skrydisid):?>
                            <option value="<?=$skrydisid;?>"><?=$skrydisid;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="asmkodas">Iveskite asmens koda.</label>
                        <input type="number" class="form-control" id="asmkodas" name="asmkodas">
                    </div>
                    <div class="form-group">
                        <label for="vardas">Vardas</label>
                        <input type="text" class="form-control" id="vardas" name="vardas">
                    </div>
                    <div class="form-group">
                        <label for="pavarde">Pavarde</label>
                        <input type="text" class="form-control" id="pavarde" name="pavarde">
                    </div>
                    <div class="form-group">
                        <select name="iskur" id="iskur" >
                            <option selected disabled>--Pasirinkite is kur skrisite--</option>
                            <?php foreach ($isKur as $isvykimas):?>
                                <option value="<?=$isvykimas;?>"><?=$isvykimas;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ikur" id="ikur" >
                            <option selected disabled>--Pasirinkite i kur skrisite--</option>
                            <?php foreach ($iKur as $atvykimas):?>
                                <option value="<?=$atvykimas;?>"><?=$atvykimas;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kaina">Iveskite skrydzio kaina</label>
                        <input type="number" class="form-control" id="kaina" name="kaina">
                    </div>
                    <div class="form-group">
                        <select name="bagazas" id="bagazas" >
                            <option selected disabled>--Pasirinkite bagazo svori--</option>
                            <?php foreach ($bagazas as $svoris):?>
                                <option value="<?=$svoris;?>"><?=$svoris;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pastabos">Iveskite pastabas</label>
                        <textarea class="form-control" id="pastabos" name="pastabos" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Siusti duomenis</button>

                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Atvaizdavimas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col header">
                <h5>Bilieto informacija</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Kaina: <?=$kaina?>
            </div>
            <div class="col-4">
                2
            </div>
            <div class="col-4 header">
                3
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                4
            </div>
            <div class="col-4">
                5
            </div>
            <div class="col-4 header">
                6
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                7
            </div>
            <div class="col-4 header">
                8
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
