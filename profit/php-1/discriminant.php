<?php

function formatResult(array $result): string {
  return sprintf('<h2>Уравнение: %sx<sup>2</sup> + %sx + %s = 0 дискриминант = %s, x:  %s</h2>', ...$result);
}

function discriminant(int $a, int $b, int $c): array {
  if($a == 0) {
    return formatResult([$a,$b,$c, 0,"a = $a , не должно быть равно нулю"]);
  }
  $D = $b**2 - 4*$a * $c;

  if($D < 0) {
    return ['result' => formatResult([$a,$b,$c, $D,'Корней нет']), 'discriminant' => 'Корней нет'];
  } elseif($D === 0) {
    echo $b;
    $x1 = (-$b)/(2*$a);
    return ['result' => formatResult([$a,$b,$c, 0, "x<sub>1</sub> = $x1, x<sub>2</sub> = 0"]), 'discriminant' => 0];
  } else {
    $x1 = (-$b - sqrt($D))/(2*$a);
    $x2 = (-$b + sqrt($D))/(2*$a);
    return ['result' => formatResult([$a,$b,$c, $D, "x<sub>1</sub> = $x1, x<sub>2</sub> = $x2"]), 'discriminant' => $D];
  }
}