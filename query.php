<?php
function h($s){
    return htmlspecialchars($s);
}
function connect($s1, $s2, $s3, $s4){
    $settings = "host=$s1 dbname=$s2 user=$s3 password=$s4";
    $resource = pg_connect($settings);
    if (!$resource) die('接続失敗だお。'.pg_last_error());
    return $resource;
}
$db = connect("host", "dbname", "user", "password"); //←ここにデータベースの設定を突っ込む

$result = pg_query($_POST['pd']);

if($result) print '正常に実行できたお。';
else print '失敗したお。'.pg_last_error();

pg_close($db);
