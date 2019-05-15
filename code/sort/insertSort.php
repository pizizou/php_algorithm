<?php
/**
 * Created by dreambee
 * User: dreambee
 * Date: 2019/5/14
 * Time: 15:35
 * @description 插入排序
 * 插入排序（insertion sort）比前面两种排序方法都更有效率。它将数组分成“已排序”和“未排序”两部分，一开始的时候，“已排序”的部分只有一个元素，然后将它后面一个元素从“未排序”部分插入“已排序”部分，从而“已排序”部分增加一个元素，“未排序”部分减少一个元素。以此类推，完成全部排序。
 * 参考网址：http://javascript.ruanyifeng.com/library/sorting.html
 */


function insertSort($arr)
{
    $len  = count($arr);

    for($i=0;$i<$len;$i++){
        $value  = $arr[$i];

        for($j = $i-1;$j>-1 && $arr[$j] > $value;$j --){
            $arr[$j+1]  = $arr[$j];
        }
        $arr[$j+1] = $value;
    }

    return $arr;
}


$array = [1,5,8,6,7,2,4,3,9];

print_r(insertSort($array));