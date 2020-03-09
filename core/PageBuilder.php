<?php

namespace core;

class PageBuilder
{
    public static function build(string $template, array $props = [])
    {
        extract($props);
        ob_start();
        include $template;
        return ob_get_clean();
    }
}