<?php
class A{
    private static $obj;
    public static function getObj(){
        if(empty(self::$obj)){
            self::$obj=new A();
        }
        return self::$obj;
    }
    private function __construct()
    {
    }

}
class B extends A{
    public function __construct()
    {
        parent::getObj();
    }
}
$a=new B();
$b=new B();
var_dump($a);
var_dump($b);

