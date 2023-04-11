<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: text/html; charset=UTF-8");
$minYear = (date('Y') + 1);
?>

<form action="">
    <input type="number" name="year" min='<?php echo $minYear ?>' max='3000'><br>
    <input type='submit'></input><br>
</form>

<?php
// високосный?
$year = $_GET["year"];
$today = date('z');
$new = date('z', mktime(0, 0, 0, 12, 31, $year));
$toNewYear = ($new - $today) + 1;
if ($year > $minYear) {
    $result = $year - $minYear;
    $result *= 365;
    $toNewYear += $result;
}
// високосный?

// Дни дол нового года и проверка на високосный год
if (isset($_GET["year"])) {
    echo "До нового года осталось $toNewYear дней!", "\n";
}
?>

<form action="">
    <input type="number" name="leapYear" min='1' max='3000'><br>
    <input type='submit'></input><br>
</form>

<?php
$leap = $_GET["leapYear"];
$leapYear = date('L', mktime(0, 0, 0, 1, 1, $leap));
if (isset($_GET["leapYear"]) && $leapYear) {
    echo "високосный", "\n";
} elseif(isset($_GET["leapYear"])) {
    echo "не високосный";
}
// Дни дол нового года и проверка на високосный год

// дата в формате '01.12.1990'
?>

<form action="">
    <input type="text" name="yearDate"><br>
    <input type='submit'></input><br>
</form>

<?php

$week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота',];
$dayOfWeek = $_GET["yearDate"];
if (isset($_GET["yearDate"])) {
    $array = explode(".", $dayOfWeek);
    $date = date('w', mktime(0, 0, 0, $array[1], $array[0], $array[2]));
    $result = $week[$date];
    echo "сегодня $result", "<br>";
    $today = date('z');
    $birthday = date('z', mktime(0, 0, 0, $array[1], $array[0]));
    if ($birthday >= $today) {
        $result = $birthday - $today;
        echo "до дня рождения $result дней", "<br>";
    } else {
        $result = $today - $birthday;
        $new = date('z', mktime(0, 0, 0, 12, 31));
        $new += 1;
        $result = $new - $result;
        echo "до дня рождения $result дней", "<br>";
    }
}
// дата в формате '01.12.1990'


// дата в формате '12 мая 2015 года, воскресенье'
echo date('j F Y года, l');
// дата в формате '12 мая 2015 года, воскресенье'

// колличество дней до малсленницы 
// $today = date('z');
// $year = date('Y');
// $nextYear = $year + 1;
// $array = [];
// $arrayOfFriday
// $daysOfFebruary = date('t', mktime(0, 0, 0, 2));
// for ($i = 1; $i <= $daysOfFebruary; $i++)
// {
//     $numberOfDay = date('w', mktime(0, 0, 0, 2, $i));
//     $array[] = $numberOfDay;
// }
// var_dump($array);
// колличество дней до малсленницы 

// знак зодика и предсказания

?>


<form action="">
    <input type="text" name="zodiac"><br>
    <input type='submit'></input><br>
</form>

<?php
$zodiacSearch = 
[
    ['dateStart' => '19.2', 'dateEnd' => '20.3', 'zodiacName' => 'Рыбы', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '21.4', 'dateEnd' => '21.5', 'zodiacName' => 'Телец', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '21.3', 'dateEnd' => '20.4', 'zodiacName' => 'Овен', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '21.1', 'dateEnd' => '18.2', 'zodiacName' => 'Водолей', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '22.5', 'dateEnd' => '21.6', 'zodiacName' => 'Близнецы', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '22.6', 'dateEnd' => '22.7', 'zodiacName' => 'Рак', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '23.7', 'dateEnd' => '23.8', 'zodiacName' => 'Лев', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '24.8', 'dateEnd' => '22.9', 'zodiacName' => 'Дева', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '23.9', 'dateEnd' => '23.10', 'zodiacName' => 'Весы', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '24.10', 'dateEnd' => '22.11', 'zodiacName' => 'Скорпион', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '23.11', 'dateEnd' => '21.12', 'zodiacName' => 'Стрелец', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
    ['dateStart' => '22.12', 'dateEnd' => '20.1', 'zodiacName' => 'Козерог', 'predictions' => ['Предсказание 1', 'Предсказание 2', 'Предсказание 3']],
];
$zodiac = $_GET["zodiac"];

function dateExplode(string $str):array {
    $result = explode(".", $str);

    return $result;
}

if (isset($_GET["zodiac"])) {
    $arrayEnter = dateExplode($zodiac);
    list($dayEnter, $monthEnter) = $arrayEnter;
    foreach ($zodiacSearch as $value)
    {
        $arrayStart = dateExplode($value['dateStart']);
        list($dayStart, $monthStartr) = $arrayStart;
        $arrayEnd = dateExplode($value['dateEnd']);
        list($dayEnd, $monthEnd) = $arrayEnd;
        if (($monthEnter == $monthStart && $dayEnter >= $dayStart) || ($monthEnter == $monthEnd && $dayEnter <= $dayEnd))
        {
            echo $value['zodiacName'];
            echo '<br>';
            echo $value['predictions'][array_rand($value['predictions'])];
            break;
        }

    }
}

echo "<br>";


// знак зодика и предсказания

// Праздники
$holidays = 
[
    date('z', mktime(0,0,0,4,3)),
    date('z', mktime(0,0,0,7,21)),
    date('z', mktime(0,0,0,2,23)),
    date('z', mktime(0,0,0,1,1)),
    date('z', mktime(0,0,0,4,2)),
    date('z', mktime(0,0,0,9,1)),
    date('z', mktime(0,0,0,8,2))
];

$today = date('z');
$result ='не праздник';
foreach ($holidays as $value)
{
    if ($value == $today) {
        $result = "праздник";
        break;
    }
}

echo $result;

// Праздники

// Текстаареа и кнопка

?>


<form action="">
    <textarea name="textarea" id="" cols="30" rows="10"></textarea>
    <input type='submit'></input><br>
</form>

<?php

$string = $_GET["textarea"];
if (isset($_GET["textarea"]))
{
    // $wordsSum = str_word_count($string); не считает русские буковы
    $words = explode(" ", $string);
    $wordsSum = count($words);
    echo "в строке $wordsSum слов", "<br>";
    $symbolSum = strlen($string);
    echo "в строке $symbolSum символов", "<br>";
    $sympbolClear = str_replace(" ", "", $string);
    $symbolSumClear = strlen($sympbolClear);
    echo "в строке $symbolSumClear символов за вычетом пробелов", "<br>";

    echo "<br>";

    $arrayOfString = str_split($string);
    $arraySum = count($arrayOfString);
    $arraySumString = array_count_values($arrayOfString);
    foreach ($arraySumString as $key => $value)
    {
        if ($key == " ")
        {
            $key = "Пробел";
        }
        $valuePercent = ($value * 100)/$arraySum;
        $valuePercent = round($valuePercent, 1);
        echo "В искомой строке $valuePercent% символов $key от общего количества символов", "<br>";
    }


    echo "<br>";

    function findFirstSymbol(string $str):string 
    {
        $result = substr($str, 0, 1);
        return $result;
    }
    $result = [];
    foreach ($words as $word)
    {
        $result[findFirstSymbol($word)][] = $word;
    }

    ksort($result);

    echo "<br>";

    $header = '';

    foreach ($result as $key => $values)
    {
        $header .= "Слова на букву $key" . "<br>";
        foreach ($values as $value)
        {
            $header .= $value . "<br>";
        }
    }

    echo $header;

}

// Текстаареа и кнопка

// Массив слов, инпут и кнопка

?>

<form action="">
    <input type="text" name="compare"><br>
    <input type='submit'></input><br>
</form>

<?php

function stringToUniqueSymbols(string $str):array
{
    $result = str_split($str);
    asort($result);
    $result = array_unique($result);
    return $result;

}

$arrayOfWords = 
[
    "goldfinch",
    "lorry",
    "provide",
    "apse",
    "Indolent",
    "faith",
    "quiver",
    "hair",
    "purchase",
    "interest",
];

$string = $_GET["compare"];
if (isset($_GET["compare"]))
{

    $symbolsToCompare = stringToUniqueSymbols($string);
    $symbolCount = count($symbolsToCompare);
    echo "<br>";
    foreach ($arrayOfWords as $value)
    {
        $wordSplit = stringToUniqueSymbols($value);
        $wordCount = count($wordSplit);
        if ($symbolCount < $wordCount)
        {
            continue;
        }
        $compareOfArrays = array_intersect($wordSplit, $symbolsToCompare);
        $compareCount = count($compareOfArrays);
        if ($compareCount === $wordCount)
        {
            echo "слово $value прошло проверку<br>";
        }
    }

}

// Массив слов, инпут и кнопка

// Транслит строки

?>

<form action="">
    <input type="text" name="translete"><br>
    <input type="radio" name="langChange" value="rusToEng" id="langChange1" checked>
    <label for="langChange1">русский в английски</label>
    <input type="radio" name="langChange" value="engToRus" id="langChange2">
    <label for="langChange2">английский в русский</label><br>
    <input type='submit'></input><br>
</form>

<?php

$arrayTrans = 
[
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ж' => 'j',
    'з' => 'z',
    'и' => 'i',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shc',
    'ы' => 'bi',
    'э' => 'ae',
    'ю' => 'yu',
    'я' => 'ya',
];

$string = $_GET["translete"];
$radio = $_GET["langChange"];


function sortKeyStrlen($a, $b) {
	return  mb_strlen($b) - mb_strlen($a);
}


function transliter(array $array, string $string):string {
    foreach($array as $key => $value) {
        if (mb_strpos($string, $key) !== false)
        {
            $string = str_replace($key, $array[$key], $string);
        }
    }

    return $string;
}


if (isset($string))
{
    if ($radio == "rusToEng")
    {
        $string = transliter($arrayTrans, $string);
        echo $string;
    } else {
        $arrayTransCopy = array_flip($arrayTrans);
        uksort($arrayTransCopy, 'sortKeyStrlen');
        $string = transliter($arrayTransCopy, $string);
        echo $string;
    }
}
// Транслит строки

