<?php
    
    $num=$_POST['num'];
    $todo=$_POST['todo'];
    $por=$_POST['por'];
    if($por=='')
    {
       $res=($num*100)/$todo;
       echo $res;
    }
    if($todo=='')
    {
        $res=($num*100)/$por;
        echo $res;
    }
    if($num=='')
    {
        $res=($todo*$por)/100;
        echo $res;
    }
      





?>