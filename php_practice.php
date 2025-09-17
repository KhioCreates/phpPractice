<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1{
        color:blue;
    }
</style>

<script>
    alert("Hello World!");
</script>
-->

<?php

      //echo "Hello World!";
     # echo "Hello World!";
?>

<!-- Hello -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP Page</h1> -->

    <?php 
    

    //
    // $a = 5;
    // var_dump($a);
    // var_dump("John");
    // var_dump(3.14);
    // var_dump(true);
    // var_dump([1,2,3]);
    // var_dump(null);
    // 


    // $a = 5; //global
    // echo $a. "<br>";

    // function test(){
    //     // $a = 0; //local
    //     static $a = 0; //static
    //     echo $a."<br>";
    //     $a++;
    // }

    // test();
    // test();


    // echo ("Hello<br>"),("Hello<br>"),("Hello<br>");
    // echo "World! <br>","World! <br>","World! <br>";
    // print ("Hello<br>");
    // print "World! <br>";

    // $a =5;
    // echo "$a Eggs";


    // $a = "Khio Ramos";
    // $b = -5;
    // $c = 3.14;
    // $d = false;
    // $e = [1,2,3];
    // $f = new stdClass();
    // $g =  null;
    // $h = fopen("php_practice.php" , "r");

    // var_dump($a);
    // echo '<br>';
    //  var_dump($b);
    // echo '<br>';
    //  var_dump($c);
    // echo '<br>';
    //  var_dump($d);
    // echo '<br>';
    //  var_dump($e);
    // echo '<br>';
    //  var_dump($f);
    // echo '<br>';
    //  var_dump($g);
    // echo '<br>';
    //  var_dump($h);
    // echo '<br>';

    // echo strlen($a), "<br>";
    // echo str_word_count($a), "<br>";
    // echo strpos($a,"Ramos"), "<br>";
    // echo strtoupper($a), "<br>";
    // echo strtolower($a), "<br>";
    // echo str_replace("Ramos", "Alonzo", $a), "<br>";
    // echo strrev($a), "<br>";
    // echo trim("Hello Love!  "), "<br>";
    // var_dump (explode("o", "Hello Love!"), );
    
    // echo var_dump("Hello"."World!");
    // $x = "Hello";
    // $y = "World";

    // echo "$x $y", "<br>" ;

    // echo "John \$Bai\" Cruz";

    // $a = 5;
    // $b= 3.14;
    // $c = "25";


    // echo PHP_INT_MAX, "<br>"; 
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE, "<br>";
    
    // echo is_integer($a), "<br>";

    // echo PHP_FLOAT_MAX, "<br>"; 
    // echo PHP_FLOAT_MIN, "<br>"; 
    // echo PHP_FLOAT_DIG, "<br>"; 
    // echo PHP_FLOAT_EPSILON, "<br>"; 

    // echo is_float($b), "<br><br>";

    // echo is_numeric($c), "<br>";

    // $a = (string) "Khio Ramos";
    // $b = (string) -5;
    // $c = (string) 3.14;
    // $d = (string) true;
    // $e = (string)  null;
    // $f = (string) fopen("php_practice.php" , "r");

    // $a = (int) "eggs5";
    // $b = (int) -5;
    // $c = (int) 3.14;
    // $d = (int) false;
    // $e = (int)  null;
    // $f = (int) fopen("php_practice.php" , "r");

    // $a = (float) "5 Khio Ramos";
    // $b = (float) -5;
    // $c = (float) 3.14;
    // $d = (float) false;
    // $e = (float)  null;
    // $f = (float) fopen("php_practice.php" , "r");

    // $a = (bool) "5 Khio Ramos";
    // $b = (bool) -5;
    // $c = (bool) 3.14;
    // $d = (bool) false;
    // $e = (bool)  null;
    // $f = (bool) fopen("php_practice.php" , "r");

    // $a = (array) "5 Khio Ramos";
    // $b = (array) -5;
    // $c = (array) 3.14;
    // $d = (array) false;
    // $e = (array)  null;
    // $f = (array) fopen("php_practice.php" , "r");

    // $a =  "Khio Ramos";
    // $b =  -5;
    // $c =  3.14;
    // $d =  false;
    // $e =   null;
    // $f =  fopen("php_practice.php" , "r");

    // // unset($a);

    //  var_dump($a);
    // echo '<br>';
    //  var_dump($b);
    // echo '<br>';
    //  var_dump($c);
    // echo '<br>';
    //  var_dump($d);
    // echo '<br>';
    //  var_dump($e);
    // echo '<br>';
    //  var_dump($f);
    //  echo '<br>';


    // echo pi(), "<br>";

    // echo min(5,34,534,25,12,54,);
    // echo max(5,34,534,25,12,54,);

    // echo abs(10);

    // echo sqrt(25);

    // echo round(3.45);
    // echo rand(5,10);

    // $x =10;
    // define("_GREETING","Hello World");

    // // echo $x;
    // // var_dump(_GREETING);

    // const _GREETING2 = "Hello People!";

    // echo _GREETING2;

    // function test() {

    //     echo _GREETING;
    // }

    // test();

    // echo $x;
    // unset(_GREETING);
    // // echo _GREETING;

    //ARITHMETICS

    //ADDITION

    // echo 10 +100 + 200, "<br>";

    // //SUBTRACTION
    //  echo 10 -100 - 200, "<br>";

    //  //add and subtract  -- left to right

    //  echo 10 - 20 + 100 - 10, "<br>";

    //  //multiplication
    //         echo 10 *100 * 200, "<br>";

    //  //division

    //  echo 10 /100 / 200, "<br>";    

    //  //multiplication adn division
    //  echo 10 /5 * 2, "<br>"; 

    //  //addtion/subtraction and division/ multi
    //  echo 50 +10 / 2, "<br>";  //multi/div before add/sub

    //  //modulus
    //  echo  7%3, "<br>";

    //  //exponential

    //  echo 10 **10, "<br>";;

    // = equals

    // $x = 10;

    //+=
    // $x = $x +10;
    // $x +10;

    //-=

    // $x = $x - 10;

    // $x -= 10;

    ///=
    // $x = $x /10;

    // $x /= 10;

    //*=
    // $x = $x * 10;

    // $x *= 10;

    //comparison
    //== equals to = similar
    // var_dump(10 == "10");
    // // === identical  = similar value and data types
    // var_dump(10 === "10");
    // // != ,  <> not equal to  = not similar value
    // var_dump(10 != "10");
    // var_dump(10 <> "10");
    // // !== not identical  = not similar value or data types
    // var_dump(10 !== "10");
    // // < less than = check if 1st value is less than second value
    // var_dump(10 < "10");
    // // > less than = check if 1st value is greater than second value
    // var_dump(10 > "10");
    // // <= less than or equals to =  check if 1st value is less than or similar to second value
    // var_dump(10 <= "10");
    // // >= 
    // var_dump(10 >= "10");
    // // <=> spaceship = check if 1st value is less than or equals or greater than seecond value
    // var_dump(1 <=> 2 );
    //  var_dump(2 <=> 2 );
    //   var_dump(4 <=> 2 );


    // increment and decre

    // pre-incre 
    // $x = 10;
    // echo ++$x,"<br>";

    // //post - incre 
    // $y = 10;
    // echo  $y--,"<br>";
    // echo  $y,"<br>";

    // // decrement

    // // pre - incre 
    //  $x = 10;
    // echo --$x,"<br>";

    // // echo $x, "<br>";


//    $gender = "female";
//     $x = $gender == "male" ? "Mr." : "Ms.";

//     echo $x;

        // $color = "R" ?? "Red";

        // echo $color;


        $students = array(
        array("name"=> "Mary", "gender" => "Female", "age"=>16),
        array("name"=> "Ray", "gender" => "Male" , "age"=>17),
        array("name"=> "Hardy", "gender" => "Male", "age"=>20),
        array("name"=> "Dennis", "gender" => "Female", "age"=>23),
    );
        // foreach ($students as $students) {

        //     echo "Name: " .$students["name"]. "<br>";

        //     echo "Gender: " .$students["gender"]. "<br>";

        // }

    //    foreach ($students as $student){
    //     echo "<h1>Name: ".$student["name"] . "<h1>";
    //     echo "<ul>";
    //         echo "<li>". $student["gender"] ."</li>";
    //         echo "<li>". $student["age"] ."</li>";
    //     echo "</ul>";
    // }


    ?>

   <!-- <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php } ?>
    </table> -->

        <!-- <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <?php foreach ($student as $value){ ?>
                <tr>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table> -->





</body>
</html>

<?php 
 function test() {

    echo "sample"
 }

?>