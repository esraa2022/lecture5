<?php
# Q1---------
echo "Q1--------------------------------------------------------------------------------<br>";
function fromOneToTEn()
{
    for($i=1;$i<=10;$i++)
    {
        if($i==1)
        echo $i;
    else 
    echo "-".$i;
    
 }

}

$result = fromOneToTEn();
echo "<br>";


# Q2---------
echo "Q2--------------------------------------------------------------------------------<br>";
function removeDublicatedAndstor($arr)
{
    
    sort($arr);
    $j=1;
    
    $result[0]=$arr[0];
    for($i=1;$i<count($arr);$i++)
    {
        if($arr[$i]!=$arr[$i-1])
        {
            $result[$j]=$arr[$i];
            $j++;
        }
    }
    print_r($result);
    
 }


 $arr= [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;
 $arr= [ 1 , 1 ,  7 , 2 , 2, 3 ,6  , 7 ,4 ,1,9,-1] ;

$result = removeDublicatedAndstor($arr);
echo "<br>";


# Q3---------
echo "Q3--------------------------------------------------------------------------------<br>";
function countR($string)
{
    $c=0;
   
    for($i=0;$i<strlen($string);$i++)
    {
        if($string[$i]=='r')
        $c++;
    }
    return $c;
    
 }




$result = countR("eraasoft");
echo $result."<br>";




# Q4---------
echo "Q4--------------------------------------------------------------------------------<br>";
function FizzBuzz()
{
    
   
    for($i=1;$i<=50;$i++)
    {
        if($i%3==0 && $i%5==0)
        echo 'FizzBuzz--';
        else if($i%3==0)
        echo 'Fizz--';
        else if($i%5==0)
        echo 'Buzz--';
        else 
        echo $i.'--';
        
    }
    
    
 }




$result = FizzBuzz();
echo "<br>";
   

#Q5
echo "Q5--------------------------------------------------------------------------------<br>";
function sumtion()
{
    
   $sum=0;
    for($i=1;$i<=30;$i++)
    {
        
        $sum+=$i;
    }
    
    return $sum;
 }




$result = sumtion();
echo " The sum of the numbers 0 to 30 is ".$result."<br>";


#Q6
echo "Q6--------------------------------------------------------------------------------<br>";
function largestNumber($arr)
{
    
   $num=$arr[0];
    for($i=1;$i<count($arr);$i++)
    {
        
        if($arr[$i]>$num)
        {
            $num=$arr[$i];
        }

    }
    
    return $num;
 }


$arr= [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];

$result = largestNumber($arr);
echo $result."<br>";


#Q7
echo "Q7--------------------------------------------------------------------------------<br>";
function smallestNumber($arr)
{
    
   $num=$arr[0];
    for($i=1;$i<count($arr);$i++)
    {
        
        if($arr[$i]<$num)
        {
            $num=$arr[$i];
        }

    }
    
    return $num;
 }


$arr= [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];

$result = smallestNumber($arr);
echo $result."<br>";





#Q8
echo "Q8--------------------------------------------------------------------------------<br>";
function factorial($n)
{
    
   $fact=1;
    for($i=1;$i<=$n;$i++)
    {
        
        $fact*=$i;
    }
    
    return $fact;
 }

$result = factorial(4);
echo $result."<br>";


#Q9
echo "Q9--------------------------------------------------------------------------------<br>";
function odd()
{
    $i=1;
   
    while($i<=15)
    {
        if($i%2!=0)
        echo $i."  ";
    $i++;
    }
    
    
 }

$result = odd();
echo $result."<br>";

#Q10
echo "Q10--------------------------------------------------------------------------------<br>";
function Even()
{
    
    $i=1;
   
    while($i<=15)
    {
        if($i%2==0)
        echo $i."  ";
        $i++;
    }
    
    
    
 }

$result =  Even();
echo $result."<br>";





#Q11
echo "Q11--------------------------------------------------------------------------------<br>";
function associativeArray($arr)
{
    
   
    foreach($arr as $key=>$value)
    {
              echo $key."=>".$value." , " ;  
    }
    
    
 }


$person = array("name" => "John", "age" => 30, "city" => "New York");
$result =   associativeArray($person);
echo $result."<br>";


#Q12
echo "Q12-------------------------------------------------------------------------------<br>";
function  sum0fValues($arr)
{
    
$sum=0;
    foreach($arr as $value)
    {
             $sum+=$value;
    }
    
    return $sum;
 }

 $sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
 
$result =   sum0fValues( $sales);
echo $result."<br>";


#Q13
echo "Q13-------------------------------------------------------------------------------<br>";
function  multiplication()
{
    

    for($i=1; $i<=12;$i++)
    {
             echo "$i"." * "."8"." = ".$i*8 ."<br>";
    }
    
    
 }


 
$result =   multiplication();
echo $result."<br>";

#Q14
echo "Q14--------------------------------------------------------------------------------<br>";
function  multiAssociativeArray($arr)
{
    
  
    foreach($arr as $item)
    {
        foreach($item as $key=>$value)
    {
              echo $key."=>".$value." , " ;  
    }
    echo "<br>";
    }
   

 }

 $students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);

$result =    multiAssociativeArray( $students);
echo "<br>";

#Q15
echo "Q15--------------------------------------------------------------------------------<br>";
function divisibleBy_3 ()
{
    
  $i=1;
    do{
        if($i%3==0)
        {
            echo $i."  ";
        }
        $i++;
    }while($i<=100);
   

 }



$result =   divisibleBy_3 ();
echo "<br>";

?>