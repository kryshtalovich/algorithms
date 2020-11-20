<?php

declare(strict_types=1);

namespace Kryshtalovich\Algorithms\Search;

class Binary
{
    /**
     * Search with binary algorithm
     *
     * @param array $arr
     * @param $element
     * @return int|null
     */
    public static function Search(array $arr, $element): ?int
    {
        $elementsCount = count($arr);
        $firstKey = key($arr);
        $lastKey = $elementsCount - 1;
        $middleIndex = floor(($firstKey + $lastKey) / 2);
        for ($i = 0; $i !== $elementsCount; $i++) {
            if (isset($arr[$middleIndex])) {
                if ($arr[$middleIndex] === $element) {
                    return (int)$middleIndex;
                }
                if ($arr[$middleIndex] < $element) {
                    $firstKey = $middleIndex;
                    $middleIndex = floor(($middleIndex + $lastKey) / 2);
                }

                if ($arr[$middleIndex] > $element) {
                    $lastKey = $middleIndex;
                    $middleIndex = floor(($firstKey + $middleIndex) / 2);
                }
            }
        }
        return null;
    }
}