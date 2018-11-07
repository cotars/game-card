<?php

namespace Cotars\Game\Card;

interface CardSetInterface
{
    /**
     * 尾部增加
     *
     * @param integer ...$cards
     * @return boolean
     */
    public function push(int ...$cards): bool;

    /**
     * 尾部移出
     *
     * @param integer $cnt
     * @return array
     */
    public function pop(int $cnt): array;

    /**
     * 头部移出
     *
     * @param integer $cnt
     * @return array
     */
    public function shift(int $cnt): array;

    /**
     * 移动单个
     *
     * @param integer $cards
     * @return array
     */
    public function remove(int ...$cards): bool;

    /**
     * 移动所有类型
     *
     * @param integer $cards
     * @return array
     */
    public function removeAll(int ...$cards): bool;

    /**
     * 移牌
     *
     * @param CardSetInterface $cardSet
     * @param integer ...$cards
     * @return boolean
     */
    public function moveTo(CardSetInterface $cardSet, int ...$cards): bool;

    /**
     * 洗牌
     *
     * @return bool
     */
    public function reshuffle(): bool;

    /**
     * 排序
     *
     * @return bool
     */
    public function sort(): bool;

    /**
     * 创建新牌
     *
     * @return array
     */
    public function createNewCards(): bool;

    /**
     * 获取牌组
     *
     * @return array
     */
    public function getCards(): array;
}
