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
</body>
</html>


if(is_array($posts)){
foreach($posts as $userPost){
//Do something.
}
}