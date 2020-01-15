<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/css/style.css">
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
    <table>
        <tr>
            <th>Klasė</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Kontrolinių darbų vidurkis</th>
            <th>Duomenų formavimo data</th>
        </tr>
        <tr>

            <?php foreach ($mokiniai as $id => $vardas) : ?>

            <td>12C</td>
            <td><?=rand(10,100); ?></td>
            <?php foreach ($vardas as $pavadinimai => $mokslai) : ?>
                <?php if (is_array($mokslai)): ?>
                    <?php $suma=0; $kiekis = 0; ?>
                    <?php foreach ($mokslai as $disciplina => $pazymys) : ?>
                        <?php $suma += $pazymys; $kiekis += count($mokslai); $average =$suma/$kiekis;?>
                        <?=var_dump($suma);?>
                    <?php endforeach; ?>
                    <td><?= number_format((float)$average, 2, '.', ''); ?></td>

                <?php else: ?>
                    <td><?= $mokslai; ?></td>
                <?php endif; ?>
            <?php endforeach; ?>
            <td><?php $tz_object = new DateTimeZone('Europe/Riga'); $datetime = new DateTime();
                $datetime->setTimezone($tz_object);
                echo $datetime->format('Y\-m\-d\ h:i:s');?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


if(is_array($posts)){
foreach($posts as $userPost){
//Do something.
}
}