<?php
class HelloWorldController extends Controller {
public $name = 'HelloWorld';
public $uses=null; 
public $autoRender=false;
public function index() {//The default action for a CakePHP controller
echo 'HelloWorld';
}
}

?>