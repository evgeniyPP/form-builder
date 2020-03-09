<?php

namespace core;

class FormBuilder
{
    public $form;

    public function __construct(Form &$form)
    {
        $this->form = $form;
    }

    public function method()
    {
        return $this->form->getMethod() ?? \METHOD_GET;
    }

    public function fields()
    {
        $inputs = [];

        foreach ($this->form->getFields() as $field) {
            $inputs[] = $this->input($field);
        }

        return $inputs;
    }

    public function input($attributes)
    {
        return sprintf('<input %s>', $this->attributes($attributes));
    }

    private function attributes($attributes)
    {
        $array = [];

        foreach ($attributes as $attribute => $value) {
            $array[] = sprintf('%s="%s"', $attribute, $value);
        }

        return implode(' ', $array);
    }
}