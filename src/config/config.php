<?php

return [
    'cards_priorities_map' => [
        1 => '2',  2 => '3',  3 => '4',
        4 => '5',  5 => '6',  6 => '7',
        7 => '8',  8 => '9',  9 => '10',
        10 => 'J', 11 => 'Q', 12 => 'K',
        13 => 'A',
    ],

    'cards_suites_map' => [
        1 => 'Heart', 2 => 'Diamond',
        3 => 'Club',  4 => 'Spade'
    ],

    'card_naming' => ':priority :suit',

    'combinations' => [
        \Pagrom\Poker\Combination\HighCard::class => [
            'name' => 'High card',
            'text' => ':combination_name :priority_1(:card_1):kickers_text',
            'text_kicker' => ' with kicker :kicker',
            'text_second_kicker' => ' with kicker :kicker and second kicker :second_kicker',
        ],
        \Pagrom\Poker\Combination\Pair::class => [
            'name' => 'Pair',
            'text' => ':combination_name of :priority_1(:card_1 and :card_2):kickers_text',
            'text_kicker' => ' with kicker :kicker',
            'text_second_kicker' => ' and second kicker :second_kicker',
        ],
        \Pagrom\Poker\Combination\TwoPairs::class => [
            'name' => 'Two pairs',
            'text' => ':combination_name of :priority_1 and :priority_2(:card_1, :card_2, :card_3 and :card_4):kickers_text',
            'text_kicker' => ' with kicker :kicker',
        ],
        \Pagrom\Poker\Combination\Set::class => [
            'name' => 'Set',
            'text' => ':combination_name of :priority_1(:card_1, :card_2 and :card_3):kickers_text',
            'text_kicker' => ' with kicker :kicker',
            'text_second_kicker' => ' and second kicker :second_kicker',
        ],
        \Pagrom\Poker\Combination\Straight::class => [
            'name' => 'Straight',
            'text' => ':combination_name to :priority_1(:card_1, :card_2, :card_3, :card_4 and :card_5)',
        ],
        \Pagrom\Poker\Combination\Flush::class => [
            'name' => 'Flush',
            'text' => ':combination_name of :suit(:card_1, :card_2, :card_3, :card_4 and :card_5)',
        ],
        \Pagrom\Poker\Combination\FullHouse::class => [
            'name' => 'Full house',
            'text' => ':combination_name of :priority_1 and :priority_2(:card_1, :card_2, :card_3, :card_4 and :card_5)',
        ],
        \Pagrom\Poker\Combination\Quad::class => [
            'name' => 'Quad',
            'text' => ':combination_name of :priority_1 (:card_1, :card_2, :card_3 and :card_4):kickers_text',
            'text_kicker' => ' with kicker :kicker',
        ],
        \Pagrom\Poker\Combination\StraightFlush::class => [
            'name' => 'Straight flush',
            'text' => ':combination_name of :suit to :priority_1(:card_1, :card_2, :card_3, :card_4 and :card_5)',
        ],
        \Pagrom\Poker\Combination\RoyalFlush::class => [
            'name' => 'RoyalFlush',
            'text' => ':combination_name of :suit(:card_1, :card_2, :card_3, :card_4 and :card_5)',
        ],
    ],
];