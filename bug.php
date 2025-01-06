In PHP, a common yet often overlooked error involves improper handling of array keys.  Consider this scenario:

```php
$myArray = [];
$myArray[1] = 'value1';
$myArray[3] = 'value2';
$myArray[2] = 'value3';

foreach ($myArray as $key => $value) {
echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

This code *appears* simple, but if you expect keys to be sequential (1, 2, 3) you might get unexpected results:  The output will be: Key: 1, Value: value1, Key: 3, Value: value2, Key: 2, Value: value3.  PHP arrays are not inherently ordered by numerical index in the way you might expect from other languages.