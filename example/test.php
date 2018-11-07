<?php

use Cotars\GameProtoCard\CARD;
use Cotars\Game\Card\PokeCardSet;

require_once __DIR__ . '/../vendor/autoload.php';

$set = new PokeCardSet;
$set->createNewCards();
$set->removeAll(CARD::CARD_QUEEN, CARD::CARD_KING);
$set->reshuffle();

$handSet1 = new PokeCardSet;
$handSet1->push(...$set->shift(17));

$handSet2 = new PokeCardSet;
$handSet2->push(...$set->pop(17));

print_r($handSet2->getCards());
