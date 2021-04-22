<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */
declare(strict_types=1);


namespace Malz\Dice\Game;

use Malz\Dice\Game;

$header = $header ?? null;
$message = $message ?? null;

?>

<h1><?= $header ?></h1>

<?php


$_SESSION["game"] = new Game();
//echo $_SESSION["game"]->game();




?>

<form action="">
  <input name="status" type="submit" value="Starta spelet">
</form>
