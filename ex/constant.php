<?php
/**
 * Created by PhpStorm.
 * User: noah
 * Date: 2016-11-03
 * Time: 오후 7:56
 *
 *
 * constant : 상수
 상수란: 코드가 변경 되지않는 값을 미리 설정,할당하는것
 상수명은 항상 대문자로 한다.

 *진위값을 사용하는 true false null이 있음
  특징은 대,소문자 구문을 짓지 않음
보통은 소문자이지만 설명을 위한 값으로 대문자를 씀

 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>constant</title>
</head>
<body>
    <?php
        print 'php 버전은';
        print PHP_VERSION; //버전을 나타내는 상수
        print '입니다.';
        print '이 파일의 이름은';
        print __FILE__; //파일 이름,주소인 경로값까지 표시하는 상수
        print '입니다.';
        print '여기는';
        print __LINE__; //행을 표시하는 상수
        print '행 입니다.';
    ?>
</body>
</html>
