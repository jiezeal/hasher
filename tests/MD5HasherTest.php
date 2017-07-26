<?php

use PHPUnit\Framework\TestCase;
use Jiezeal\Hasher\MD5Hasher;

/**
 * Created by PhpStorm.
 * User: zhulinjie
 * Date: 2017/7/26
 * Time: 14:25
 */
class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passwordjiezeal');
        $passwordTwo = $this->hasher->make('password', ['salt' => 'jiezeal']);

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);

        $this->assertTrue($passwordCheck);
    }

    public function testMD5HasherCheckWithSalt()
    {
        $password = md5('passwordjiezeal');
        $passwordCheck = $this->hasher->check('password', $password, ['salt' => 'jiezeal']);

        $this->assertTrue($passwordCheck);
    }
}