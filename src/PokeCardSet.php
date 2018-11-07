<?php

namespace Cotars\Game\Card;

use Cotars\GameProtoCard\CARD;

class PokeCardSet extends AbstractCardSet
{
    public function createNewCards(): bool
    {
        $cards = [
            CARD::CARD_SPADE_A,
            CARD::CARD_SPADE_2,
            CARD::CARD_SPADE_3,
            CARD::CARD_SPADE_4,
            CARD::CARD_SPADE_5,
            CARD::CARD_SPADE_6,
            CARD::CARD_SPADE_7,
            CARD::CARD_SPADE_8,
            CARD::CARD_SPADE_9,
            CARD::CARD_SPADE_10,
            CARD::CARD_SPADE_J,
            CARD::CARD_SPADE_Q,
            CARD::CARD_SPADE_K,
            CARD::CARD_HEART_A,
            CARD::CARD_HEART_2,
            CARD::CARD_HEART_3,
            CARD::CARD_HEART_4,
            CARD::CARD_HEART_5,
            CARD::CARD_HEART_6,
            CARD::CARD_HEART_7,
            CARD::CARD_HEART_8,
            CARD::CARD_HEART_9,
            CARD::CARD_HEART_10,
            CARD::CARD_HEART_J,
            CARD::CARD_HEART_Q,
            CARD::CARD_HEART_K,
            CARD::CARD_DIAMOND_A,
            CARD::CARD_DIAMOND_2,
            CARD::CARD_DIAMOND_3,
            CARD::CARD_DIAMOND_4,
            CARD::CARD_DIAMOND_5,
            CARD::CARD_DIAMOND_6,
            CARD::CARD_DIAMOND_7,
            CARD::CARD_DIAMOND_8,
            CARD::CARD_DIAMOND_9,
            CARD::CARD_DIAMOND_10,
            CARD::CARD_DIAMOND_J,
            CARD::CARD_DIAMOND_Q,
            CARD::CARD_DIAMOND_K,
            CARD::CARD_CLUB_A,
            CARD::CARD_CLUB_2,
            CARD::CARD_CLUB_3,
            CARD::CARD_CLUB_4,
            CARD::CARD_CLUB_5,
            CARD::CARD_CLUB_6,
            CARD::CARD_CLUB_7,
            CARD::CARD_CLUB_8,
            CARD::CARD_CLUB_9,
            CARD::CARD_CLUB_10,
            CARD::CARD_CLUB_J,
            CARD::CARD_CLUB_Q,
            CARD::CARD_CLUB_K,
            CARD::CARD_QUEEN,
            CARD::CARD_KING,
        ];
        return $this->push(...$cards);
    }
}
