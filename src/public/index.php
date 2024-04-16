<?php
/*課題1*/
$countries = [
    'ブラジル' => 100,
    '日本' => 150,
    'スペイン' => 50000,
];
foreach ($countries as $country => $num) {
    echo $country . ':' . $num . '人';
    echo '<br>';
}

/*課題2*/
$animals1 = ['いぬ' => 1, 'ねこ' => 2, 'うさぎ' => 6];
$animals2 = ['ぞう' => 1, 'きりん' => 1, 'さい' => 4];
$animalsList = ['小動物' => $animals1, '大動物' => $animals2];

foreach ($animalsList as $animals) {
    foreach ($animals as $animalName => $animalNum) {
        if ($animalNum >= 2) {
            $myOwnAnimalList[] = $animalName;
        }
    }
}
echo implode('<br>', $myOwnAnimalList);
?>
