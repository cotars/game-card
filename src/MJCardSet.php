<?php

namespace Cotars\Game\Card;

use Cotars\GameProtoCard\MJCARD;

class MJCardSet extends AbstractCardSet
{
    protected $huaCards = [
        MJCARD::MJCARD_CHUN_HUA,
        MJCARD::MJCARD_XIA_HUA,
        MJCARD::MJCARD_QIU_HUA,
        MJCARD::MJCARD_DONG_HUA,
        MJCARD::MJCARD_MEI_HUA,
        MJCARD::MJCARD_LAN_HUA,
        MJCARD::MJCARD_ZHU_HUA,
        MJCARD::MJCARD_JU_HUA,
    ];

    protected $fengCards = [
        MJCARD::MJCARD_DONG_FENG,
        MJCARD::MJCARD_NAN_FENG,
        MJCARD::MJCARD_XI_FENG,
        MJCARD::MJCARD_BEI_FENG,
    ];

    protected $jianCards = [
        MJCARD::MJCARD_ZHONG_JIAN,
        MJCARD::MJCARD_FA_JIAN,
        MJCARD::MJCARD_BAI_JIAN,
    ];

    public function removeHua(): bool
    {
        return $this->removeAll(...$this->huaCards);
    }

    public function removeZhi(): bool
    {
        $this->removeAll(...$this->fengCards);
        $this->removeAll(...$this->jianCards);
        return true;
    }

    public function createNewCards(): bool
    {
        $cards = [
            MJCARD::MJCARD_NIL,
            MJCARD::MJCARD_1_WANG,
            MJCARD::MJCARD_2_WANG,
            MJCARD::MJCARD_3_WANG,
            MJCARD::MJCARD_4_WANG,
            MJCARD::MJCARD_5_WANG,
            MJCARD::MJCARD_6_WANG,
            MJCARD::MJCARD_7_WANG,
            MJCARD::MJCARD_8_WANG,
            MJCARD::MJCARD_9_WANG,
            MJCARD::MJCARD_1_TONG,
            MJCARD::MJCARD_2_TONG,
            MJCARD::MJCARD_3_TONG,
            MJCARD::MJCARD_4_TONG,
            MJCARD::MJCARD_5_TONG,
            MJCARD::MJCARD_6_TONG,
            MJCARD::MJCARD_7_TONG,
            MJCARD::MJCARD_8_TONG,
            MJCARD::MJCARD_9_TONG,
            MJCARD::MJCARD_1_TIAO,
            MJCARD::MJCARD_2_TIAO,
            MJCARD::MJCARD_3_TIAO,
            MJCARD::MJCARD_4_TIAO,
            MJCARD::MJCARD_5_TIAO,
            MJCARD::MJCARD_6_TIAO,
            MJCARD::MJCARD_7_TIAO,
            MJCARD::MJCARD_8_TIAO,
            MJCARD::MJCARD_9_TIAO,
            MJCARD::MJCARD_DONG_FENG,
            MJCARD::MJCARD_NAN_FENG,
            MJCARD::MJCARD_XI_FENG,
            MJCARD::MJCARD_BEI_FENG,
            MJCARD::MJCARD_ZHONG_JIAN,
            MJCARD::MJCARD_FA_JIAN,
            MJCARD::MJCARD_BAI_JIAN,
        ];
        $huaCard = [
            MJCARD::MJCARD_CHUN_HUA,
            MJCARD::MJCARD_XIA_HUA,
            MJCARD::MJCARD_QIU_HUA,
            MJCARD::MJCARD_DONG_HUA,
            MJCARD::MJCARD_MEI_HUA,
            MJCARD::MJCARD_LAN_HUA,
            MJCARD::MJCARD_ZHU_HUA,
            MJCARD::MJCARD_JU_HUA,
        ];

        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$huaCard);
        return true;
    }
}
