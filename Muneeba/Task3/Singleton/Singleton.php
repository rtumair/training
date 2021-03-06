<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:24 AM
 */

namespace Task3\Singleton;

/**
 * class Singleton.
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    /**
     * checks if an instance occurs already.
     * makes a new one if there is no prior instance.
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
    /**
     * private constructor to be called from an inernal method only.
     */
    private function __construct()
    {
    }
}

