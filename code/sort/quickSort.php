<?php
/**
 * Created by dreambee
 * User: dreambee
 * Date: 2019/5/15
 * Time: 15:35
 * @description 快速排序
 * 它的基本思想很简单：先确定一个“支点”（pivot），将所有小于“支点”的值都放在该点的左侧，大于“支点”的值都放在该点的右侧，然后对左右两侧不断重复这个过程，直到所有排序完成。
 */

function swap(&$arr,$first,$second){
    $temp  = $arr[$first];
    $arr[$first]  = $arr[$second];
    $arr[$second]  = $temp;
    return $arr;
}

//完成一轮排序
function partition(&$arr,$left,$right){
    //找出参考变量
    //最后找出中间分隔点
    $pivot  = $arr[floor(($left+$right)/2)];
    $il  = $left;
    $ir  = $right;

    while ($il <= $ir){

        while ($arr[$il] < $pivot){
            $il ++;
        }


        while ($arr[$ir] > $pivot){
            $ir --;
        }
        if ($il <= $ir){
            swap($arr,$il,$ir);
            $il++;
            $ir --;
        }
    }
    return $il;
}





function quickSort(&$arr,$left=null,$right=null){
    if(count($arr) < 2) return $arr;

    $left  = $left == null ? 0 : $left;
    $right = $right == null ? count($arr) -1 : $right;
    $index  = partition($arr,$left,$right);


    if($left < $index-1){
        quickSort($arr,$left,$index -1);
    }
    if($index < $right){
        quickSort($arr,$index,$right);
    }

    return $arr;
}

$data = [1,5,8,3,5,7,9,2,4,8,6];

print_r(quickSort($data));

