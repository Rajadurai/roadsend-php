<?php

$newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
//the names, of course, are not compatible
//echo "New anonymous function: $newfunc\n";
echo $newfunc(2, M_E) . "\n";
// outputs
// New anonymous function: lambda_1
// ln(2) + ln(2.718281828459) = 1.6931471805599
?>

Or, perhaps to have general handler function that can apply a set of operations to a list of parameters:

Example 2. Making a general processing function with create_function()

<?php

function process($var1, $var2, $farr)
{
  for ($f=0; $f < count($farr); $f++) {
    echo $farr[$f]($var1, $var2) . "\n";
  }
}

// create a bunch of math functions
$f1 = 'if ($a >=0) {return "b*a^2 = ".$b*sqrt($a);} else {return false;}';
$f2 = "return \"min(b^2+a, a^2,b) = \".min(\$a*\$a+\$b,\$b*\$b+\$a);";
$f3 = 'if ($a > 0 && $b != 0) {return "ln(a)/b = ".log($a)/$b; } else { return false; }';
$farr = array(
	      create_function('$x,$y', 'return "some trig: ".(sin($x) + $x*cos($y));'),
	      create_function('$x,$y', 'return "a hypotenuse: ".sqrt($x*$x + $y*$y);'),
	      create_function('$a,$b', $f1),
	      create_function('$a,$b', $f2),
	      create_function('$a,$b', $f3)
	      );

	      echo "\nUsing the first array of anonymous functions\n";
	      echo "parameters: 2.3445, M_PI\n";
	      process(2.3445, M_PI, $farr);

	      // now make a bunch of string processing functions
	      $garr = array(
			    create_function('$b,$a', 'if (strncmp($a, $b, 3) == 0) return "** \"$a\" '.
					    'and \"$b\"\n** Look the same to me! (looking at the first 3 chars)";'),
			    create_function('$a,$b', '; return "CRCs: " . crc32($a) . " , ".crc32(b);'),
			    create_function('$a,$b', '; return "similar(a,b) = " . similar_text($a, $b, &$p) . "($p%)";')
			    );
			    echo "\nUsing the second array of anonymous functions\n";
			    process("Twas brilling and the slithy toves", "Twas the night", $garr);
			    ?>

			    and when you run the code above, the output will be:

Using the first array of anonymous functions
			      parameters: 2.3445, M_PI
			      some trig: -1.6291725057799
			      a hypotenuse: 3.9199852871011
			      b*a^2 = 4.8103313314525
			      min(b^2+a, a^2,b) = 8.6382729035898
			      ln(a/b) = 0.27122299212594

			      Using the second array of anonymous functions
			      ** "Twas the night" and "Twas brilling and the slithy toves"
			      ** Look the same to me! (looking at the first 3 chars)
     CRCs: -725381282 , 1908338681
			      similar(a,b) = 11(45.833333333333%)

     But perhaps the most common use for of lambda-style (anonymous) functions is to create callback functions, for example when using array_walk() or usort()

     Example 3. Using anonymous functions as callback functions
       <?php
     $av = array("the ", "a ", "that ", "this ");
array_walk($av, create_function('&$v,$k', '$v = $v . "mango";'));
print_r($av);
?>

outputs:

Array
(
 [0] => the mango
 [1] => a mango
 [2] => that mango
 [3] => this mango
 )

     an array of strings ordered from shorter to longer
<?php

$sv = array("small", "larger", "a big string", "it is a string thing");
print_r($sv);

?>

outputs:

Array
(
 [0] => small
 [1] => larger
 [2] => a big string
 [3] => it is a string thing
 )

     sort it from longer to shorter
<?php

usort($sv, create_function('$a,$b','return strlen($b) - strlen($a);'));
print_r($sv);

?>

outputs:

Array
(
 [0] => it is a string thing
 [1] => a big string
 [2] => larger
 [3] => small
 )

     
