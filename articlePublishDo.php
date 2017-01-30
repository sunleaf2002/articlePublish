<?php
 header("content-type:text/html;charset=utf8");
 date_default_timezone_set('Asia/Shanghai');
 $title=trim($_POST['title']);
 $content=trim($_POST['content']);
 $time=date("y-m-d H:i:s");
 require_once 'init.php';
 
  $sql="select count(*) from article ";
   $res=$conn->query($sql);
  
   $arr=$res->fetch_assoc();
   while(list($key,$val)=each($arr)){
    $count = (int)$val; 
   }
   $count++;
 
 $sql="insert into article values('$count','$title','$content','$time')";
 //echo $sql;
 $re= $conn->query($sql);//执行sql语句
 if($re){
  echo "发布成功";
  echo '<a href="articleList.php">返回文章列表</a>';
  
 }else{
  echo "发布失败";
  echo '<a href="articleList.php">返回文章列表</a>';
 }
 $conn->close();//关闭数据库