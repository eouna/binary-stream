<?php
/**
 * Created by PhpStorm.
 * User: ccl
 * Date: 2020/3/18
 * Time: 11:02
 */

namespace BinaryStream;


interface StreamReader
{
    /**
     * @param $method
     * @param $len
     * @return mixed
     */
    public function read(string $method, int $len = 0);

    /**
     * @return string
     */
    public function getReadSequence(): string;

    /**
     * @return string
     */
    public function getReadStream(): string;
}
