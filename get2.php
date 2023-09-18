<form action="get2.php">
    <label for="fname">Nome:</label>
    <input type="text" id="fname" name="fname">
    <input type="submit" value="Enviar">
</form>
<?php
if ($_GET["fname"] == '1') {
    echo "é um né";
} elseif ($_GET["fname"] == '2') {
    echo "rapaz, é dois";
} elseif ($_GET["fname"] == '3') {
    echo "ce n vai acreditar, é três";
} else {
    echo var_dump($_GET);
}
?>
