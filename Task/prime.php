<h3>Prime numbers</h3>
    <?php
  for($i=1;$i<=100;$i++)
  {
    $b=true;
    for($j=2;$j<$i;$j++)
    {
        if($i%$j==0)
            {
          $b=false;
            break;
        }
    } 
        if($b==true)
    {
        echo " $i";
    }
  }
    ?>