<?php
/**
 * Created by dreambee
 * User: dreambee
 * Date: 2019/5/14
 * Time: 8:48
 * @description 冒泡排序
 * 依次比较相邻的两个数，如果不符合排序规则，则调换两个数的位置。这样一遍比较下来，能够保证最大（或最小）的数排在最后一位。
  *再对最后一位以外的数组，重复前面的过程，直至全部排序完成。
 * 参考网址：http://javascript.ruanyifeng.com/library/sorting.html
 */


function bubbleSort($arr,$order='asc')
{
    $len  = count($arr);
    for($i=0;$i < $len - 1 ; $i ++){
        for($j=0;$j < $len -1 - $i; $j ++){
            if($arr[$j] > $arr[$j+1]){
                $temp  = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }

    return $arr;
}

$array = [1,5,8,6,7,2,4,3];

print_r(bubbleSort($array));


