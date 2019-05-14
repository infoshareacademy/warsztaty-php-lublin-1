<?php

class Foo {

    function __construct() {
        print "In BaseClass constructor\n";
    }

    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}

$foo = new Foo();
$foo->aMemberFunc();
