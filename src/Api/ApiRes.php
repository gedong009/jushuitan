<?php
namespace jushuitan\Api;
use jushuitan\JuShuiTan;

class ApiRes extends JuShuiTan
{

    public function __construct($config)
    {
        parent::__construct();
        parent::setConfig($config);
    }

}