<?php
namespace T4web\Authentication\Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
    public function getApplication()
    {
        return $this->getModule('ZF2')->application;
    }
}