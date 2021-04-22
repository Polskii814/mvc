<?php


declare(strict_types=1);

use Malz\Dice\Dice;
use Malz\Dice\DiceHand;
use Malz\Dice\GraphicalDice;

$header = $header ?? null;
$message = $message ?? null;

$die = new Dice();
$die->roll();
$diceHand = new DiceHand();
$diceHand->roll();

?>

<h1><?= $header ?></h1>

<?php

$dice = new GraphicalDice();
$rolls = 6;
$res = [];
$class = [];
$prev_rolls = [];
for ($i = 0; $i < $rolls; $i++) {
    $res[] = $dice->roll();
    $class[] = $dice->graphic();
}
array_push($prev_rolls, $res);

?>

<h1>Rolling six graphical dices</h1>
<p class="dice-utf8">
    <?php foreach ($class as $value) : ?>
      <i class="<?= $value ?>"></i>
    <?php endforeach; ?>
</p>

<?php

  echo json_encode($prev_rolls)

?>

<p>DiceHand</p>

<p><?= $diceHand->getLastRoll() ?></p>

<p>Dice</p>

<p><?= $die->getLastRoll() ?></p>
