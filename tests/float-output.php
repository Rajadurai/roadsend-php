<?


$a[] = 1.2;
$a[] = 1.23;
$a[] = 1.234;
$a[] = 1.2345;
$a[] = 1.23456;
$a[] = 1.234567;
$a[] = 1.2345678;
$a[] = 1.23456789;
$a[] = 1.234567890;
$a[] = 1.2345678901;
$a[] = 1.23456789012;
$a[] = 1.234567890123;
$a[] = 1.2345678901234;
$a[] = 1.23456789012345;
$a[] = 1.234567890123456;
$a[] = 1.2345678901234567;
$a[] = 1.23456789012345678;
$a[] = 1.234567890123456789;
$a[] = 1.2345678901234567890;

$a[] = 12.2345678901234567890;
$a[] = 123.2345678901234567890;
$a[] = 1234.2345678901234567890;
$a[] = 12345.2345678901234567890;
$a[] = 123456.2345678901234567890;
$a[] = 1234567.2345678901234567890;
$a[] = 12345678.2345678901234567890;

// at high resolution we, generated code rounds
// the scm literals we generate for bigloo to compile 
// are already losy (see -rm or --dump-ast)

//$a[] = 123456789.2345678901234567890;
//$a[] = 1234567890.2345678901234567890;
//$a[] = 12345678901.2345678901234567890;
//$a[] = 123456789012.2345678901234567890;
//$a[] = 1234567890123.2345678901234567890;
//$a[] = 12345678901234.2345678901234567890;
//$a[] = 123456789012345.2345678901234567890;
//$a[] = 1234567890123456.2345678901234567890;

//$a[] = 123456789.2345678901234567890;
//$a[] = 1234567890.2345678901234567890;

$a[] = 1.30;
$a[] = 1.300;
$a[] = 1.3000;
$a[] = 1.30000;
$a[] = 1.300000;
$a[] = 1.3000000;
$a[] = 1.30000000;
$a[] = 1.300000000;
$a[] = 1.3000000000;
$a[] = 1.30000000000;
$a[] = 1.300000000000;
$a[] = 1.3000000000000;
$a[] = 1.30000000000000;

$a[] = 130.0;
$a[] = 1300.0;
$a[] = 13000.0;
$a[] = 130000.0;
$a[] = 1300000.0;
$a[] = 13000000.0;
$a[] = 130000000.0;
$a[] = 1300000000.0;
$a[] = 13000000000.0;
$a[] = 130000000000.0;
$a[] = 1300000000000.0;

$a[] = 1.0;
$a[] = 12.0;
$a[] = 123.0;
$a[] = 1234.0;
$a[] = 12345.0;
$a[] = 123456.0;
$a[] = 1234567.0;
$a[] = 12345678.0;
$a[] = 123456789.0;
$a[] = 1234567890.0;
$a[] = 12345678901.0;
$a[] = 123456789012.0;
$a[] = 1235567890123.0;
$a[] = 12345678901234.0;
//$a[] = 123456789012345.0;
//$a[] = 1234567890123456.0;
//$a[] = 12345678901234567.0;

$a[] = 0.7;
$a[] = 0.07;
$a[] = 0.007;
$a[] = 0.0007;
$a[] = 0.00007;
$a[] = 0.000007;
$a[] = 0.0000007;
$a[] = 0.00000007;
$a[] = 0.000000007;
$a[] = 0.0000000007;
$a[] = 0.00000000007;
$a[] = 0.000000000007;
$a[] = 0.0000000000007;

$a[] = -0.7;
$a[] = -0.07;
$a[] = -0.007;
$a[] = -0.0007;
$a[] = -0.00007;
$a[] = -0.000007;
$a[] = -0.0000007;
$a[] = -0.00000007;
$a[] = -0.000000007;
$a[] = -0.0000000007;
$a[] = -0.00000000007;
$a[] = -0.000000000007;
$a[] = -0.0000000000007;

$a[] = -3e1;
$a[] = -3e2;
$a[] = -3e3;
$a[] = -3e4;
$a[] = -3e5;
$a[] = -3e6;
$a[] = -3e7;
$a[] = -3e8;
$a[] = -3e9;
$a[] = -3e10;
$a[] = -3e11;
$a[] = -3e12;

$a[] = 123e1;
$a[] = 123e2;
$a[] = 123e3;
$a[] = 123e4;
$a[] = 123e5;
$a[] = 123e6;
$a[] = 123e7;
$a[] = 123e8;
$a[] = 123e9;
$a[] = 123e10;
$a[] = 123e11;
$a[] = 123e12;
$a[] = 1234e11;
$a[] = 123e13;
$a[] = 123e14;
$a[] = 123e15;


$a[] = (1000000*1000000);

foreach ($a as $f) {
    var_dump($f);
    echo("echo: $f\n");
    printf("printf(f): %f\n",$f);
    printf("printf(e): %e\n",$f);
}


?>