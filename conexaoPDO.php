<?php
try{
    $dbh = new PDO('mysql:host=localhost', 'root', '');
}catch(PDOException $e){
    print "Error!: ".$e->getMessage()."<br/>";
    die();
}finally{
    echo "OK.";
}
?>
