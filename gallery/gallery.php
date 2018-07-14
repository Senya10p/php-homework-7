<?php

require __DIR__ . '/../classes/View.php';


$list = scandir(__DIR__ . '/images');
$list = array_diff($list, ['.', '..']);
//   var_dump($list);

$v = new View();

$v->assign('list', $list);

$v->display( __DIR__ . '/../templates/gal/index.php')
/*

// Выводим в браузер изображения из папки images
foreach ($list as $img) {
    ?>
    <img src="/gallery/images/<?php echo $img; ?>" height="30%">
    <?php
}

*/
?>