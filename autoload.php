<?php

function controllers_autoload($classname){
    include 'controllers/'.$classname.'php';
}

spl_autoload('controllers_autoload');

