<?php

namespace Laravel\TestPackage;

use Illuminate\Support\Facades\Http;

class TestPackage
{
    protected $mobileNumber;
    protected $message;

    public function __construct()
    {
        $this->username = config('config.username');
        $this->password = config('config.password');
    }
    public function returnUrl($mobileNumber, $message){
        $url = 'The URL is'.$mobileNumber.$message.$this->username.$this->password.'-complete.';

        echo $url;
    }
}

