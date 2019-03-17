<?php
  if($_POST['b1'])
 {
  $s=$_POST['t1'];
  echo"EMAIL id is:$s<br>";
  $c=substr_count($s,"@");
  if($c=1)
  {
   $a=explode("@",$s);
   echo"<br>";
   if(ereg("^[a-z][a-z0-9]*[\.]?[a-z 0-9]+$",$a[0]))
   $flag=1;
   else
   $flag=0;

   if(ereg("^[a-z0-9]+(\.)[a-z]+[\.]?[a-z]+$",$a[1]))
   $flag1=1;
   else
   $flag1=0;
   
   if(($flag==1)&&($flag1==1))
   echo"valid email";
   else
   echo"not valid";
  }
   else
   echo"not valid";
 }
?> 
