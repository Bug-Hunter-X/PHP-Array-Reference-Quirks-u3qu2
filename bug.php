function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    throw new InvalidArgumentException('Index out of bounds');
  }
  $arr[$index]++;
}

$myArray = [1, 2, 3];
incrementValue($myArray, 3); // This will throw an exception
print_r($myArray);