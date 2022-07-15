<?php

$templateTable = "<table>
<thead>
  <tr>
      <th>a</th>
      <th>b</th>
      <th>a %s b</th>
  </tr>
  <tbody>
    %s
  </tbody>
</table>";


function generateRow($values): string {
  $rows = '';
  for ($i = 0; $i < count($values); $i++) {
    $a = $values[$i][0];
    $b = $values[$i][1];
    $c = $values[$i][2];
    $rows = $rows . sprintf(
      "<tr>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
      </tr>", $a, $b, $c ?: 0);
  }
  return $rows;
}

function tableTruth(string $operator, $templateTable): string {
  $values = array('0' => array('0','0'), '1' => array('0','1'), '2' => array('1','0'), '3' => array('1','1'));
  
  switch($operator) {
    case '&&':
      for ($i=0; $i < count($values); $i++) { 
        $values[$i][2] = $values[$i][0] && $values[$i][1];
      }
      return sprintf($templateTable, $operator, generateRow($values));
      break;
    case '||':
      for ($i=0; $i < count($values); $i++) { 
        $values[2] = $values[0] || $values[1];
      }
      return sprintf($templateTable, $operator, generateRow($values));
      break;
    case 'xor':
      for ($i=0; $i < count($values); $i++) { 
        $values[2] = $values[0] xor $values[1];
      }
      return sprintf($templateTable, $operator, generateRow($values));
      break;
    default:
      return 'unknown';
  }
}