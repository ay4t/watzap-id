<?php
/*
 * File: Watzap.php
 * Project: src
 * Created Date: Fr Apr 2022
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Fri Apr 29 2022
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2022 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 */

namespace Ay4t\WatzapId;

class Watzap
{
    /**
     * $apiKey
     *
     * @var string
     */
    protected $apiKey;

    /**
     * $numberKey
     *
     * @var string
     */
    protected $numberKey;

    /**
     * $base_url
     *
     * @var string
     */
    protected $base_url     = 'https://api.watzap.id/v1/';

    /**
     * __construct
     *
     * @param mixed $apiKey
     */
    public function __construct()
    {
        #try to get key from .env file
        if (empty($apiKey)) $this->apiKey    = getenv('watzap_api_key');
    }

    /**
     * exce
     *
     * @param string $endpoint
     * @param array $params
     * 
     * @return mixed
     */
    public function exce(string $endpoint = '', array $params = [], string $method = 'POST')
    {

        $curl   = new \Curl\Curl($this->base_url);
        $curl->setHeader('Content-Type', 'application/json');
        $response   = $curl->post($endpoint, $params);
        return $response;
    }

    /**
     * Set $apiKey
     *
     * @param  string  $apiKey  $apiKey
     *
     * @return  self
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Set $numberKey
     *
     * @param  string  $numberKey  $numberKey
     *
     * @return  self
     */
    public function setNumberKey(string $numberKey)
    {
        $this->numberKey = $numberKey;
        return $this;
    }
}
