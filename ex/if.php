<?php
// []안에 공백도 먹히니 주의!!
$id = "user";
$pwd = 123;

$db_data["id"] = "user";
$db_data["pwd"] = 123;

if($db_data ["id"] == $id && $db_data["pwd"] == $pwd){
    print  "회원 입니다";
} else {
    print "비회원";
}