# Sort and search algorithms

In this repository I'm implementing various algorithms. Currently, a bubble sort algorithm and a binary search algorithm are implemented.

## Installation

Require the package in `composer.json`

```json
"require": {
    "kryshtalovich/algorithms": "1.*"
  }
```

## Usage

### Bubble sorting

```php
use Kryshtalovich\Algorithms\Sorts\Bubble;

//any numeric array
$array = [9, 7, 5, 6, 545, 66, 0, 4];


Bubble::Sort($array);

var_dump($array);
```

Output:
```
array(8) {
  [0]=>
  int(0)
  [1]=>
  int(4)
  [2]=>
  int(5)
  [3]=>
  int(6)
  [4]=>
  int(7)
  [5]=>
  int(9)
  [6]=>
  int(66)
  [7]=>
  int(545)
}
```

### Binary searching

```php
use Kryshtalovich\Algorithms\Search\Binary;

//any numeric array
$array = [7, 7.5, 8, 8.3, 9.4];

$elementKey = Binary::Search($array, 8.3);

var_dump($elementKey);
```

Output:

```
int(3)
```