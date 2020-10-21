<?php

namespace phpdesignmode\register;

class Container {

    private static $ALL_OBJECTS = [];

    public static function register($name, $obj) {
        self::$ALL_OBJECTS[$name] = $obj;
    }

    public static function get($name) {
        if (isset(self::$ALL_OBJECTS[$name])) {
            return self::$ALL_OBJECTS[$name];
        }
        return null;
    }

    public static function romove($name) {
        if (isset(self::$ALL_OBJECTS[$name])) {
            unset(self::$ALL_OBJECTS[$name]);
        }
    }

}
