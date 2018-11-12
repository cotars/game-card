<?php

namespace Cotars\Game\Card;

use Cotars\GameProtoCard\MJCARD;

class MJCardSet extends AbstractCardSet
{
    protected $huaCards = [
        MJCard::MJCARD_CHUN_HUA,
        MJCard::MJCARD_XIA_HUA,
        MJCard::MJCARD_QIU_HUA,
        MJCard::MJCARD_DONG_HUA,
        MJCard::MJCARD_MEI_HUA,
        MJCard::MJCARD_LAN_HUA,
        MJCard::MJCARD_ZHU_HUA,
        MJCard::MJCARD_JU_HUA,
    ];

    protected $fengCards = [
        MJCard::MJCARD_DONG_FENG,
        MJCard::MJCARD_NAN_FENG,
        MJCard::MJCARD_XI_FENG,
        MJCard::MJCARD_BEI_FENG,
    ];

    protected $jianCards = [
        MJCard::MJCARD_ZHONG_JIAN,
        MJCard::MJCARD_FA_JIAN,
        MJCard::MJCARD_BAI_JIAN,
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
            MJCard::MJCARD_NIL,
            MJCard::MJCARD_1_WANG,
            MJCard::MJCARD_2_WANG,
            MJCard::MJCARD_3_WANG,
            MJCard::MJCARD_4_WANG,
            MJCard::MJCARD_5_WANG,
            MJCard::MJCARD_6_WANG,
            MJCard::MJCARD_7_WANG,
            MJCard::MJCARD_8_WANG,
            MJCard::MJCARD_9_WANG,
            MJCard::MJCARD_1_TONG,
            MJCard::MJCARD_2_TONG,
            MJCard::MJCARD_3_TONG,
            MJCard::MJCARD_4_TONG,
            MJCard::MJCARD_5_TONG,
            MJCard::MJCARD_6_TONG,
            MJCard::MJCARD_7_TONG,
            MJCard::MJCARD_8_TONG,
            MJCard::MJCARD_9_TONG,
            MJCard::MJCARD_1_TIAO,
            MJCard::MJCARD_2_TIAO,
            MJCard::MJCARD_3_TIAO,
            MJCard::MJCARD_4_TIAO,
            MJCard::MJCARD_5_TIAO,
            MJCard::MJCARD_6_TIAO,
            MJCard::MJCARD_7_TIAO,
            MJCard::MJCARD_8_TIAO,
            MJCard::MJCARD_9_TIAO,
            MJCard::MJCARD_DONG_FENG,
            MJCard::MJCARD_NAN_FENG,
            MJCard::MJCARD_XI_FENG,
            MJCard::MJCARD_BEI_FENG,
            MJCard::MJCARD_ZHONG_JIAN,
            MJCard::MJCARD_FA_JIAN,
            MJCard::MJCARD_BAI_JIAN,
        ];
        $huaCard = [
            MJCard::MJCARD_CHUN_HUA,
            MJCard::MJCARD_XIA_HUA,
            MJCard::MJCARD_QIU_HUA,
            MJCard::MJCARD_DONG_HUA,
            MJCard::MJCARD_MEI_HUA,
            MJCard::MJCARD_LAN_HUA,
            MJCard::MJCARD_ZHU_HUA,
            MJCard::MJCARD_JU_HUA,
        ];

        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$cards);
        $this->push(...$huaCard);
        return true;
    }
}
