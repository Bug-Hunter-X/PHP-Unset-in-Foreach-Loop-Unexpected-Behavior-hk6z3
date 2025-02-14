function foo(array $arr) {
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

//Alternative using array_filter
function foo2(array $arr) {
  return array_filter($arr, function ($value) { 
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )