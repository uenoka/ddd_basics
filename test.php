<?php
$arr = [
    1 => "bar",
    2 => "foo",
];

$result = in_array('bar',$arr);
var_dump($result?'hoge':'fuga');
