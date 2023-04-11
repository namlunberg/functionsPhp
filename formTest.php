<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: text/html; charset=UTF-8");

// вопросы и ответы


$arrayOfQuestions =
[
    'сколько будет 2 + 2',
    'кто сильнее, солнце или триллион львов?',
    'загадка от жака фреско, на размышление 3 секунды',
];

$arrayOfAnswer =
[
    '4',
    'чеченец',
    'да',
];

$answers = $_GET;

$arrayOfAnswerCount = count($arrayOfAnswer);

//вариант с инпутом
?>
<form action="">
<?php
for ($i = 0; $i < $arrayOfAnswerCount; $i++) { 
    echo $arrayOfQuestions[$i], "<br>";
    if (empty($answers[$i])){
    ?>
        <input type="text" name="<?echo $i?>"><br> 
    <?php
    } else {
        if ($answers[$i] == $arrayOfAnswer[$i]) {
            $result = 'ваш ответ: ' . $answers[$i] . ' верно!';
        } else {
            $result = 'ваш ответ: ' . $answers[$i] . ' неверно! Правильный ответ: ' . $arrayOfAnswer[$i];
        }
        echo $result . "<br>";
    }
}
?>
<input type="submit">
</form>
<?php
//вариант с инпутом

//вариант с радиокнопками

$arrayOfTest =
[
    ['id' => 10, 'question' => 1, 'answer' => 1, 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 20, 'question' => 2, 'answer' => 2, 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 30, 'question' => 3, 'answer' => 3, 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 40, 'question' => 4, 'answer' => 4, 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
];


$answers = $_GET;
?>
<form action="">
<?php
foreach ($arrayOfTest as $key => $test)
{
    $answersKey = $test['id'];
    if (empty($answers[$answersKey]))
    {
        echo $test['question'], "<br>";
        shuffle($test['variants']);
        foreach ($test['variants'] as $variant)
        {
            ?>
            <input type="radio" name="<?echo $test['id']?>" value="<?echo $variant['id']?>" id="<?echo $variant['value']?>">
            <label for="<?echo $variant['value']?>"><?echo $variant['id']?></label>
            <?
        }
        echo "<br>";
    } else {
        if ($answers[$answersKey] == $test['answer']) {
            $result = 'ваш ответ: ' . $answers[$answersKey] . ' верно!';
        } else {
            $result = 'ваш ответ: ' . $answers[$answersKey] . ' неверно! Правильный ответ: ' . $test['answer'];
        }
        echo $result . "<br>";
    }
}
?>
<input type="submit">
</form>
<?php
//вариант с радиокнопками


// вариант с чекбоксами

$arrayOfTest =
[
    ['id' => 10, 'question' => 1, 'answer' => [1, 3], 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 20, 'question' => 2, 'answer' => [1], 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 30, 'question' => 3, 'answer' => [2, 4], 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
    ['id' => 40, 'question' => 4, 'answer' => [1, 3, 4], 'variants' => [['id' => 1, 'value' => 11], ['id' => 2, 'value' => 22], ['id' => 3, 'value' => 33], ['id' => 4, 'value' => 44]]],
];
$answers = $_GET;

?>
<form action="">
<?php
foreach ($arrayOfTest as $key => $test)
{
    $answersKey = 'question' . $test['id'];
    echo $test['question'], "<br>";
    if (empty($answers[$answersKey]))
    {
        shuffle($test['variants']);
        foreach ($test['variants'] as $variant)
        {
            ?>
            <input type="checkbox" name="<?echo $answersKey?>[]" value="<?echo $variant['id']?>" id="<?echo $variant['value']?>">
            <label for="<?echo $variant['value']?>"><?echo $variant['id']?></label>
            <?
        }
        echo "<br>";
    } else {
        $answersCheck = array_intersect($test['answer'], $answers[$answersKey]);
        $answersString = implode(", ", $test['answer']);

        $answersCheckSum = count($answersCheck);
        $answersResultSum = count($answers[$answersKey]);
        $answersSum = count($test['answer']);


        if (($answersCheckSum == $answersSum) && ($answersResultSum == $answersSum))
        {
            $result = "все ответы верны";
        } elseif (($answersSum > $answersCheckSum) && ($answersCheckSum != 0)) {
            $result = "не все ответы верны, правильными ответами были " . "$answersString";
        } else {
            $result = "правильных ответов нет, правильными ответами были " . "$answersString"; 
        }

        echo $result, "<br>";
    }
}
?>
<input type="submit">
</form>
<?php
// вариант с чекбоксами
// вопросы и ответы