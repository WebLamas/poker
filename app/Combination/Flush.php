<?php
/**
 * Created by PhpStorm.
 * User: m1x
 * Date: 017 17.10.18
 * Time: 13:04
 */

namespace App\Combination;


use App\Card;
use App\Interfaces\SuitOrientedCombinationInterface;

class Flush extends CombinationAbstract implements SuitOrientedCombinationInterface
{
    /**
     * @const int WEIGHT
     * */
    public const WEIGHT = 6;

    /**
     * @return int
     */
    public function getTotalWeight(): int
    {
        $totalWeight = self::WEIGHT;

        foreach ($this->cards->sortByPriority(true) as $card) {
            $totalWeight .= $card->getWeight();
        }

        return (int) $totalWeight;
    }

    /**
     * @return int
     */
    public function getSuit(): int
    {
        return $this->cards[0]->getSuit();
    }
}