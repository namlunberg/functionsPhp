<?php
header("Content-Type: text/html; charset=UTF-8");
echo $_GET["blockId"], "\n";
?>

<form action="">
    <input type="text" name="name" placeholder="Имя" value="<?php if (isset($_GET['name'])) echo $_GET['name'] ?>"><br/>
    <input type="number" name="age" placeholder="Возраст" max="100" min="1" value="<?php if (isset($_GET['age'])) echo $_GET['age'] ?>"><br/>
    <textarea name="desc" id="" cols="30" rows="10"><?php if (isset($_GET['desc'])) echo $_GET['desc'] ?></textarea><br/>
    <input type="submit"><br/>
</form>

<?php
$name = $_GET["name"];
$age = $_GET["age"];
$desc = $_GET["desc"];
echo "Привет, $name, $age лет" . "<br/>" . "Твоё сообщение: $desc" . "<br/>";
?>
<?php
if (!isset($_GET["ageTwo"])) {
?>
<form action="" >
<input type="number" name="ageTwo" placeholder="Возраст" max="100" min="1"><br/>
</form>
<?php
}
?>
<?php
$ageTwo = $_GET["ageTwo"];
echo $ageTwo;
?>

<form action="" >
    <input type="text" name="login" placeholder="логин"><br/>
    <input type="password" name="password" placeholder="Пароль"><br/>
    <input type="submit"><br/>
</form>

<?php
$login = 'admin';
$pass = 12345;
if ((isset($_GET["login"])) or (isset($_GET["password"]))) {
    if (($_GET["login"] == $login) and ($_GET["password"] == $pass)) {
        echo "Доступ разрешен!", "<br/>";
    } else {
        echo "Доступ запрещен!", "<br/>";
    }
}
?>


