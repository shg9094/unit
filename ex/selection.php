<?php
/**
 * Created by PhpStorm.
 * User: noah
 * Date: 2016-11-09
 * Time: 오후 7:31
 */

//연관 배열
//키와 데이터를 연관지어 보관할때 사용
//회원 한명의 이름과 주소 같은것들

//데이터 할당
$member["name"]="이지은";
//출력  name은 키에 해당 이지은은 value에 해당
print  $member["name"];
?>
<?

$data =array("name" => "이지은" ,"age"=>24);

print $data["name"];
print $data["age"];


$week = array("월","화","수","목","금","토","일");
//두개의 사용법은 완전 같음
$week = array(0=>"월",1=>"화",2=>"수",3=>"목",4=>"금",5=>"토",0=>"일");

?>