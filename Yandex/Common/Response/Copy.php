<?php
/**
 * Created by PhpStorm.
 * User: dnkolosov
 * Date: 18.04.2017
 * Time: 12:17
 */

namespace Yandex\Common\Response;

class Copy extends ResponseInterface
{
    protected $goodAnswerCode = array(201);

    /**
     * @return mixed
     */
    function prepare()
    {
        $this->checkCode();

        return $this->data;
    }
}