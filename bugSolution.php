function incrementValue(array &$arr, int $index): void {
  $count = count($arr);
  if ($index < 0 || $index >= $count) {
    throw new InvalidArgumentException(
        sprintf('Index %d is out of bounds for an array of size %d', $index, $count)
    );
  }
  $arr[$index]++;
}

$myArray = [1, 2, 3];
try {
  incrementValue($myArray, 3); 
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
print_r($myArray); 