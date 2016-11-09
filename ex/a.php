<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue는 $obj->value의 참조로, 42입니다.
$obj->value = 42;
echo $myValue;

// $obj->value의 새 값, 즉 2를 출력합니다.

$data = 43;

function a(){
    global $data;
    return $data;
}

print a();
?>

<?php

$numbers = array(17,1,5,6,9);
sort($numbers);
print_r($numbers);

$numbers = array(17,1,5,6,9);
rsort($numbers);
print_r($numbers);

function s()
{
    $numbers = array('김', '이', '최', '박', '유');
    sort($numbers);
    return print_r($numbers);

}
print s();9

?>