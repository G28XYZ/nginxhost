<?php

$templateTable = (string) "<table>
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


function generateRows(array $values): string {
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
      </tr>", $a, $b, $c);
  }
  return $rows;
}

function tableTruth(string $operator, string $templateTable): string {
  $values = (array) array('0' => array('0','0'), '1' => array('0','1'), '2' => array('1','0'), '3' => array('1','1'));
  
  switch((string) $operator) {
    case '&&':
      for ($i=0; $i < count($values); $i++) { 
        $values[$i][2] = $values[$i][0] && $values[$i][1]  ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    case '||':
      for ($i=0; $i < count($values); $i++) { 
        $values[$i][2] = $values[$i][0] || $values[$i][1]  ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    case 'xor':
      for ($i=0; $i < count($values); $i++) { 
        $values[$i][2] = ($values[$i][0] xor $values[$i][1]) ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    default:
      return 'unknown';
  }
}