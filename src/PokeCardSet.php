<?php

namespace Cotars\Game\Card;

use Cotars\GameProtoCard\PokeCard;

class PokeCardSet extends AbstractCardSet
{
    public function createNewCards(): bool
    {
        $cards = [
            PokeCard::POKE_CARD_SPADE_A,
            PokeCard::POKE_CARD_SPADE_2,
            PokeCard::POKE_CARD_SPADE_3,
            PokeCard::POKE_CARD_SPADE_4,
            PokeCard::POKE_CARD_SPADE_5,
            PokeCard::POKE_CARD_SPADE_6,
            PokeCard::POKE_CARD_SPADE_7,
            PokeCard::POKE_CARD_SPADE_8,
            PokeCard::POKE_CARD_SPADE_9,
            PokeCard::POKE_CARD_SPADE_10,
            PokeCard::POKE_CARD_SPADE_J,
            PokeCard::POKE_CARD_SPADE_Q,
            PokeCard::POKE_CARD_SPADE_K,
            PokeCard::POKE_CARD_HEART_A,
            PokeCard::POKE_CARD_HEART_2,
            PokeCard::POKE_CARD_HEART_3,
            PokeCard::POKE_CARD_HEART_4,
            PokeCard::POKE_CARD_HEART_5,
            PokeCard::POKE_CARD_HEART_6,
            PokeCard::POKE_CARD_HEART_7,
            PokeCard::POKE_CARD_HEART_8,
            PokeCard::POKE_CARD_HEART_9,
            PokeCard::POKE_CARD_HEART_10,
            PokeCard::POKE_CARD_HEART_J,
            PokeCard::POKE_CARD_HEART_Q,
            PokeCard::POKE_CARD_HEART_K,
            PokeCard::POKE_CARD_DIAMOND_A,
            PokeCard::POKE_CARD_DIAMOND_2,
            PokeCard::POKE_CARD_DIAMOND_3,
            PokeCard::POKE_CARD_DIAMOND_4,
            PokeCard::POKE_CARD_DIAMOND_5,
            PokeCard::POKE_CARD_DIAMOND_6,
            PokeCard::POKE_CARD_DIAMOND_7,
            PokeCard::POKE_CARD_DIAMOND_8,
            PokeCard::POKE_CARD_DIAMOND_9,
            PokeCard::POKE_CARD_DIAMOND_10,
            PokeCard::POKE_CARD_DIAMOND_J,
            PokeCard::POKE_CARD_DIAMOND_Q,
            PokeCard::POKE_CARD_DIAMOND_K,
            PokeCard::POKE_CARD_CLUB_A,
            PokeCard::POKE_CARD_CLUB_2,
            PokeCard::POKE_CARD_CLUB_3,
            PokeCard::POKE_CARD_CLUB_4,
            PokeCard::POKE_CARD_CLUB_5,
            PokeCard::POKE_CARD_CLUB_6,
            PokeCard::POKE_CARD_CLUB_7,
            PokeCard::POKE_CARD_CLUB_8,
            PokeCard::POKE_CARD_CLUB_9,
            PokeCard::POKE_CARD_CLUB_10,
            PokeCard::POKE_CARD_CLUB_J,
            PokeCard::POKE_CARD_CLUB_Q,
            PokeCard::POKE_CARD_CLUB_K,
            PokeCard::POKE_CARD_QUEEN,
            PokeCard::POKE_CARD_KING,
        ];
        return $this->push(...$cards);
    }
}
