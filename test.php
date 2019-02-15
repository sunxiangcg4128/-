<?php
/**
 * @Author: Marte
 * @Date:   2019-02-15 22:22:07
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-02-15 22:22:07
 */
class A {
    public $name = "讲道理还是phpstorm好用啊";
    function test(){
        echo $this->name;
    }
}
$obj = new A();
$obj->test();