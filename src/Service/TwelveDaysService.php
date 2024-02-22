<?php

namespace App\Service;

class TwelveDaysService
{
    public const string TEMPLATE = 'On the %s day of Christmas my true love gave to me: %s.';

    public const array PRESENTS = [
        'first' => 'a Partridge in a Pear Tree',
        'second' => 'two Turtle Doves',
        'third' => 'three French Hens',
        'fourth' => 'four Calling Birds',
        'fifth' => 'five Gold Rings',
        'sixth' => 'six Geese-a-Laying',
        'seventh' => 'seven Swans-a-Swimming',
        'eighth' => 'eight Maids-a-Milking',
        'ninth' => 'nine Ladies Dancing',
        'tenth' => 'ten Lords-a-Leaping',
        'eleventh' => 'eleven Pipers Piping',
        'twelfth' => 'twelve Drummers Drumming',
    ];
    private array $presentsString = [];

    public function song(): string
    {
        $stringSong = '';
        $isFirst = true;

        foreach (self::PRESENTS as $key => $value) {
            $this->presentsString[] = $value;
            $array = array_reverse($this->presentsString);
            $last_present = array_pop($array);
            $presents = implode(', ', $array);
            $connector = $isFirst ? '' : ', and ';
            $presents.=  $connector . $last_present;
            $stringSong.= sprintf(self::TEMPLATE, $key, $presents) . '<br><br>';
            $isFirst = false;
        }

        return $stringSong;

    }

}
