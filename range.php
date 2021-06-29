<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>"Input the upper and lower limit"</h4>
    <?php
        Function rangeNum($start, $end){
          $qw = [];
          for ($x=$start; $x <= $end ; $x++) {
            $qw[$x] = $x;
          }
          echo $qw[$x];
          return $qw;
        }

        function sumNumbers($num){
          $y = array_sum($num);
          echo $y;
        }

        rangeNum(1,10);
        var_dump($q);
        sumNUmbers($q);
      /*function numbers($start, $end){
        $range[0] = $start;
        for ($i = $start; $i <= $end ; $i++) {
            array_push($range, $i);
        }
        print_r($range);
        return $range;
      }
      numbers(0,10);*/
     ?>
  </body>
</html>
