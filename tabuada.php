<html>

<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="num">Número:</label>
        <select name="num" id="num" onchange ="this.form.submit()">

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST["num"]);
        }
        for ($i = 1; $i <= 10; $i++) {
            if($i == $numero) {
                echo "<option selected value='$i'>$i</option>";
            }
            else{
                echo "<option value='$i'>$i</option>";
            }
           
        }
        ?>
        </select>
        
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["num"]);

    echo "<h2>Tabuada do $numero</h2>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i=$resultado<br>";
    }
}
?>
