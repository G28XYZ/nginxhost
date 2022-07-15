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
      foreach ($values as $key => $value) {
        $values[$key][2] = $values[$key][0] && $values[$key][1]  ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    case '||':
      foreach ($values as $key => $value) {
        $values[$key][2] = $values[$key][0] || $values[$key][1]  ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    case 'xor':
      foreach ($values as $key => $value) {
        $values[$key][2] = ($values[$key][0] xor $values[$key][1]) ? 1 : 0;
      }
      return sprintf($templateTable, $operator, generateRows($values));
      break;
    default:
      return 'unknown';
  }
}

return 'tableTruth';