<?php
$conn=pg_connect("host=localhost port=5432  dbname=stud user=postgres password=123456");
$dn=$_GET['value'];
if(!$conn)
{

echo("An error.....in connection");
}
else
{
echo("connection succesfull");
 
	  
         echo("<table border='3' >");
         echo("<tr><th> MAXIMUM SALARY</th><th> MINIMUM SALARY</th><th> SUM SALARY</th></tr>");
         echo("<br>");  
  
          $s1="  select max(salary) as m1,min(salary) as m2,sum(salary) as m3 from emp,dept where ((emp.d_no=dept.d_no) and (dept.dname='$dn'))";


	  $result = pg_query($conn, $s1);
		if (!$result)
		{
			echo"ERROR.....";
			exit;
		}
	    while($r=pg_fetch_assoc($result))
   		{
    			 echo("<tr>");     echo("<td>");
         		 echo $r['m1'];   echo("</td><td>");
         		 echo $r['m2'];      echo("</td><td>");
           		 echo $r['m3'];     echo("</td></tr>");
        		  
    		}
 	echo("</table>");
}
?>



