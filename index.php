<?php
require_once './Cube.php';

$cube = new Cube();
?>
<form action="#" method="post">
    <label for="scramble">Scramble</label>
    <input type="text" name="scramble" size="80"/>
    <button type="submit">Perform Scramble!</button>
</form>
<?php
if(($_POST) != "") {
    $cube->performScramble($_POST['scramble']);

    var_dump($cube->getStatus());
    echo "<br />\n";

}