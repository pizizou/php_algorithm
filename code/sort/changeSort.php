<?php
/**
 * Created by dreambee
 * User: dreambee
 * Date: 2019/5/14
 * Time: 14:41
 * @description 选择排序
 * 选择排序（Selection Sort）与冒泡排序类似，也是依次对相邻的数进行两两比较。不同之处在于，它不是每比较一次就调换位置，而是一轮比较完毕，找到最大值（或最小值）之后，将其放在正确的位置，其他数的位置不变
 * 参考网址：http://javascript.ruanyifeng.com/library/sorting.html
 */
function changeSort($arr){
    $len  =  count($arr);
    for($i=0;$i<$len-1;$i++){
        $min = $i;

        //找出最小序号
        for($j = $i+1;$j < $len; $j++){
            if($arr[$j] < $arr[$min]){
                $min  = $j;
            }
        }

        if($i != $min){
            $temp  = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min]  = $temp;
        }
    }
    return $arr;
}

$array = [1,5,8,6,7,2,4,3,9];

print_r(changeSort($array));