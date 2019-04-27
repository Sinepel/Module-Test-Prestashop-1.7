<?php

namespace CBoulanger\Utils;

use ReflectionClass;

class Hooks
{
    /**
     * All hooks about Products
     */
    const PRODUCT_HOOKS = [
        'displayAdminProductsExtra',
        'displayProductExtraContent',
    ];

    /**
     * All General Hooks
     */
    const OTHER_HOOKS = [
        'header',
        'footer',
    ];

    /**
     * Return all hooks from all constants at once
     *
     * @return array
     */
    public static function getHooks(): array
    {
        $all_hooks = [];

        $oClass = new ReflectionClass(__CLASS__);
        foreach ($oClass->getConstants() as $array) {
            $all_hooks = array_merge($all_hooks, $array);
        }

        return $all_hooks;
    }
}
