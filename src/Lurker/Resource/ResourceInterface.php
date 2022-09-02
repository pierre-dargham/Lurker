<?php

namespace Lurker\Resource;

/**
 * @package Lurker
 */
interface ResourceInterface
{
    /**
     * @return boolean
     */
    public function exists();

    /**
     * @return integer
     */
    public function getModificationTime();

    /**
     * @return integer
     */
    public function getSize();

    /**
     * @return string
     */
    public function getId();
}
