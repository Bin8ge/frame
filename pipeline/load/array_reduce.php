<?php




$array = [
    'o' ,
    'p',
    'w',
    'w'
];

// array_reduce : 会根据我们传递的数组, 会把数组每一个元素 会以递归的方式传递自定义的方法中
// $y 永远是递归之后执行的结果
// $r 是当前传递值
array_reduce($array, function ($y, $r){
    echo $y .' $y <br>';
    echo $r .' $r <br>';
    $return = $y. "=> ".$r;
    return $return;
    // var_dump($y);
},'l');

// $y = $return ;
//
// function reduce($y, $r)
// {
//     // $r = reduce();
// }
