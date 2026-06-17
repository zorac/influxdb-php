<?php
/**
 * @author Stephen "TheCodeAssassin" Hoogendijk
 */

namespace InfluxDB\Driver;

use InfluxDB\ResultSet;

/**
 * Interface QueryDriverInterface
 *
 * @package InfluxDB\Driver
 */
interface QueryDriverInterface extends DriverInterface
{

    /**
     * @return ResultSet
     */
    public function query();
}