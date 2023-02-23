<h3>The Leap Year is:</h3>
<?php  
  
for($i=2001;$i<=2023;$i++)
{
if((0 == $i % 4))
{
echo "$i is a Leap Year.<br>";    
}
 
else  
{  
echo "$i is not a Leap Year.<br>";    
}
}
?> 