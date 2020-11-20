<?php

declare(strict_types=1);

namespace Kryshtalovich\Algorithms\Sorts;

class Bubble
{
    /**
     * Sorting array with bubble algorithm
     *
     * @param array $arr
     */
    public static function Sort(array &$arr): void
    {
        $count = count($arr);
        $lastKey = $count - 1;
        if ($lastKey !== 0) {
            for ($i = 0; $i < $count; $i++) {
                $changes = false;
                for ($j = $lastKey; $j > $i; $j--) {
                    if ($arr[$j] < $arr[$j - 1]) {
                        $changes = true;
                        [$arr[$j], $arr[$j - 1]] = [$arr[$j - 1], $arr[$j]];
                    }
                }
                if (!$changes) {
                    break;
                }
            }
        }
    }
}