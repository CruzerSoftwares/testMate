<?php
namespace Cruzer\Cruzer;

class Bike
{
    private $q = 15; // VIOLATION - Field
    protected $reallyLongIntName = -3; // VIOLATION - Field
    private $i = 5; // Unused
    protected $property_name;

    const MY_NUM = 0; // ok
    const MYTEST = ""; // fail

     // this is bad because it is PHP 4 style
    public function BikeStarter()
    {
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        print('So this line might be there again. So this line might be there again. So this line might be there again. ');
        $name = $this->BikeStart();
    }

    public function BikeStart()
    {
        $name = 'abc';
    }

    // this is good because it is a PHP 5 constructor
    public function __construct()
    {
    }

    public function example()
    {
        if ($a == $b) {
            if ($a1 == $b1) {
                fiddle();
            } elseif ($a2 == $b2) {
                fiddle();
            } else {
                fiddle();
            }
        } elseif ($c == $d) {
            while ($c == $d) {
                fiddle();
            }
        } elseif ($e == $f) {
            for ($n = 0; $n < $h; $n++) {
                fiddle();
            }
        } else {
            switch ($z) {
                case 1:
                    fiddle();
                    break;
                case 2:
                    fiddle();
                    break;
                case 3:
                    fiddle();
                    break;
                default:
                    fiddle();
                    break;
            }
        }
    }

    public function addData(
        $p0,
        $p1,
        $p2,
        $p3,
        $p4,
        $p5,
        $p5,
        $p6,
        $p7,
        $p8,
        $p9,
        $p10
    ) {
    }

    public function barif($flag)
    {
        if ($flag) {
            // one branch
        } else {
            // another branch
        }
    }

    function foo()
    {
        $bar = true;
        $bar = true;
    }

    public function bar_static()
    {
        Bar::baz();
    }

    public function bartrue($flag = true)
    {
    }

    public function barmethod($param)
    {
        if ($param === 42) {
            exit(23);
        }
    }

    public function bareval($param)
    {
        if ($param === 42) {
            eval('$param = 23;');
        }
    }

    public function bargoto($param)
    {
        A:
        if ($param === 42) {
            goto X;
        }
        Y:
        if (time() % 42 === 23) {
            goto Z;
        }
        X:
        if (time() % 23 === 42) {
            goto Y;
        }
        Z:
        return 42;
    }

    public function doSomething(array $items)
    {
        foreach ($items as $i => $item) {
            if ('qafoo' == $item) {
                var_dump($i);
            }
        }
    }

     /**
     * @return boolean
     * Looks for methods named 'getX()' with 'boolean' as the return type.
     * The convention is to name these methods 'isX()' or 'hasX()'.
     */
    public function getFoo()
    {
        $name = $_POST['foo'];
    } // bad
    /**
     * @return bool
     */
    public function isFoo(); // ok

    public function horn()
    {
        $unsed = 5; // Unused
        return true                   ;
    }
    private function foo()
    {
    }
    private function bar($howdy)
    {
        // $howdy is not used
    }

    public static function main(array $as)
    {
 // VIOLATION - Formal
        $r = 20 + $this->q; // VIOLATION - Local
        for (int $i = 0; $i < 10; $i++) { // Not a Violation (inside FOR)
            $r += $this->q;
        }
    }

    public static function main2(array $argumentsList)
    {
 // VIOLATION - Formal
        $otherReallyLongName = -5; // VIOLATION - Local
        for ($interestingIntIndex = 0; // VIOLATION - For
             $interestingIntIndex < 10;
             $interestingIntIndex++) {
        }
    }
    public function a($index)
    {
 // Violation
    }
}
