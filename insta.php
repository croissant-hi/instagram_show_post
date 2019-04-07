<?php
//POSTリクエストの場合のみ受付
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
    $access_token = "*"; //取得したアクセストークンを設置
    $count = 8; //表示件数


    //JSONデータを取得して出力
    echo @file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token='.$access_token."&count=".$count);
    //終了
    exit;
}
?>
