To ensure consistent key ordering when working with numerical indices in PHP arrays, consider using `array_values()` after populating the array:

```php
$myArray = [];
$myArray[1] = 'value1';
$myArray[3] = 'value2';
$myArray[2] = 'value3';

// Re-index the array to ensure numerical order
$myArray = array_values($myArray);

foreach ($myArray as $key => $value) {
echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

Alternatively, to maintain association and insertion order you could use a different data structure such as a SplDoublyLinkedList.