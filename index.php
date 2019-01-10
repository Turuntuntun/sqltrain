<?php
	error_reporting(E_ALL);
    ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'nfnmzyf40404';
	$dbName = 'my';

	$link = mysqli_connect($host,$user,$password,$dbName);
	mysqli_query($link,"SET NAMES 'utf-8'");
    $query = 'SELECT * FROM users WHERE id IN (1,2,3,5,14)';
    
    /*$result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    echo "<br>";
    $query = 'SELECT * FROM users WHERE login IN ("eee","bbb","zzz")';
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    $query = 'SELECT * FROM users WHERE login IN ("admin","user","ivan") AND id IN (1,2,3,7,9)';
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    echo '<br>';
    create_select('login',"('eee','bbb','zzz')",$link);
    create_select('id','(1,2,3,5,14)',$link);
    function create_select($field,$str,$link){
    	$query = "SELECT * FROM users WHERE $field IN $str";
	    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
	    echo "<br>";
    }
    */
    $query = "SELECT * FROM users WHERE salary BETWEEN 100 and 1000";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT * FROM users WHERE salary BETWEEN 300 and 500 AND id BETWEEN 3 and 10";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT id as userid, login as userlogin, salary as userSalary FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT DISTINCT salary FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT DISTINCT val FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT MIN(salary) FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT MAX(salary) FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT SUM(salary) as sum FROM users WHERE val BETWEEN 21 and 25";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT SUM(salary) as sum FROM users WHERE id IN (1,2,3,5)";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT AVG(salary) as sum FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT AVG(val) as sum FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
?>