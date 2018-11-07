<?php

namespace Cotars\Game\Card;

use RuntimeException;

abstract class AbstractCardSet implements CardSetInterface
{
    /**
     * @var [int]
     */
    protected $cards = [];

    /**
     * 尾部增加
     *
     * @param integer ...$cards
     * @return boolean
     */
    public function push(int ...$cards): bool
    {
        array_push($this->cards, ...$cards);
        return true;
    }

    /**
     * 尾部移出
     *
     * @param integer $cnt
     * @return array
     */
    public function pop(int $cnt): array
    {
        $cards = [];
        if (count($this->cards) < $cnt) {
            throw new RuntimeException('card set pop error:' . $cnt);
        }
        for ($i = 0; $i < $cnt; $i++) {
            array_push($cards, array_pop($this->cards));
        }
        return $cards;
    }

    /**
     * 头部移出
     *
     * @param integer $cnt
     * @return array
     */
    public function shift(int $cnt): array
    {
        $cards = [];
        if (count($this->cards) < $cnt) {
            throw new RuntimeException('card set pop error:' . $cnt);
        }
        for ($i = 0; $i < $cnt; $i++) {
            array_push($cards, array_shift($this->cards));
        }
        return $cards;
    }

    /**
     * 移除
     *
     * @param integer $cards
     * @return array
     */
    public function remove(int ...$cards): bool
    {
        foreach ($cards as $card) {
            $this->removeOne($card);
        }
        return true;
    }

    /**
     * 移动所有类型
     *
     * @param integer $cards
     * @return array
     */
    public function removeAll(int ...$cards): bool
    {
        foreach ($cards as $card) {
            if (!in_array($card, $this->cards)) {
                throw new RuntimeException('card set not found card:' . $card);
            }
        }
        $this->cards = array_diff($this->cards, $cards);
        return true;
    }

    /**
     * 移除
     *
     * @param integer $card
     * @return array
     */
    protected function removeOne(int $card): bool
    {
        if (!in_array($card, $this->cards)) {
            throw new RuntimeException('card set not found card:' . $card);
        }
        foreach ($this->cards as $key => $val) {
            if ($card == $val) {
                unset($this->cards[$key]);
                return true;
            }
        }
        throw new RuntimeException('card set not found card:' . $card);
    }

    /**
     * 移牌
     *
     * @param CardSetInterface $cardSet
     * @param integer ...$cards
     * @return boolean
     */
    public function moveTo(CardSetInterface $cardSet, int ...$cards): bool
    {
        $this->remove(...$cards);
        return $cardSet->push(...$cards);
    }

    /**
     * 洗牌
     *
     * @return bool
     */
    public function reshuffle(): bool
    {
        return shuffle($this->cards);
    }

    /**
     * 排序
     *
     * @return bool
     */
    public function sort(): bool
    {
        return true;
    }

    /**
     * 创建新牌
     *
     * @return array
     */
    abstract public function createNewCards(): bool;

    /**
     * 获取牌组
     *
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}
