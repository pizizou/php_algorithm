<?php
/**
 * Created by PhpStorm.
 * User: dreambee
 * Date: 2019/5/14
 * Time: 下午9:14 合并排序
 * 它的基本思想是，将两个已经排序的数组合并，要比从头开始排序所有元素来得快。因此，可以将数组拆开，分成n个只有一个元素的数组，然后不断地两两合并，直到全部排序完成。
 */


function merge($left,$right){
    $result  = [];
    $il = 0;
    $ir = 0;
    while ($il < count($left) && $ir < count($right)){
        if($left[$il] < $right[$ir]){
            array_push($result,$left[$il++]);
        }else{
            array_push($result,$right[$ir++]);
        }
    }

    return array_merge($result,array_slice($left,$il),array_slice($right,$ir));

}


function mergeSort($arr)
{
    if(count($arr) < 2){
        return $arr;
    }

    $middle  = floor(count($arr)/2);

    $left  = array_slice($arr,0,$middle);
    $right = array_slice($arr,$middle);


    return merge(mergeSort($left),mergeSort($right));

}

print_r(mergeSort([1,5,8,3,5,7,9,2,4,8,6]));