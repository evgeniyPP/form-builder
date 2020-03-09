<?php

use core\FormBuilder;
use core\PageBuilder;
use forms\SignUpForm;

function __autoload($classname)
{
    include_once __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
}

const METHOD_GET = 'get';
const METHOD_POST = 'post';

$signUpForm = new FormBuilder(new SignUpForm);

echo PageBuilder::build(
    __DIR__ . './views/form.html.php',
    [
        'form' => $signUpForm,
    ]
);