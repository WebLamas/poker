<?php
/**
 * Created by PhpStorm.
 * User: m1x
 * Date: 017 17.10.18
 * Time: 11:40
 */

namespace Pagrom\Poker\Traits;


use Pagrom\Poker\Card;
use Pagrom\Poker\CardsCollection;

trait HasCardsTrait
{
    /**
     * @var CardsCollection $cards
     * */
    private $cards;

    /**
     * @return CardsCollection
     */
    public function getCards(): CardsCollection
    {
        return $this->cards ?? new CardsCollection([]);
    }

    /**
     * @param Card $card
     */
    public function addCard(Card $card): void
    {
        if (!($this->cards instanceof CardsCollection)) {
            $this->cards = new CardsCollection($this->cards ?? []);
        }
        $this->cards[] = $card;
    }
}