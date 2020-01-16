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
    <nav>
        <ul>
            <?php foreach ($nav as $href => $title): ?>
            <li><a href="http://www.<?=$href;?>.lt"><?=$title;?></a></li>
            <?php endforeach;?>
        </ul>
    </nav>
    <ul>
        <?php foreach ($mokiniai as $mokinys => $duomenys): ?>
            <?php foreach ($duomenys as $visi => $pazymiai): ?>
                <?php if(is_array($pazymiai)):?>
                <?php foreach ($pazymiai as $data => $duom): ?>
                <?=$data;?>
                <?=$duom;?>
               <?php endforeach;?>
                <?php else :?>
                <?=$pazymiai;?>
                <?php endif; ?>
            <?php endforeach;?>
        <?php endforeach;?>
    </ul>
    <br>
    <?php
        $padaliniai =['IT','Marketingas','Buhalterija'];

        if(isset($_POST['submit'])){
            foreach ($_POST as $value){
                echo "$value<br>";
            }
        }
    ?>
    <h2 style="text-align: center;">Forma</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <select name="padaliniai" >
                            <option selected disabled>--Pasirinkite--</option>
                            <?php foreach ($padaliniai as $padalinys):?>
                            <option value="<?=$padalinys;?>"><?=$padalinys;?></option>
                            <?php endforeach; ?>
                        </select>
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
                        <label for="mail">El. pastas</label>
                        <input type="email" class="form-control" id="mail" name="mail">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Siusti</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
