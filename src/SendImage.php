<?php
/*
 * File: SendImage.php
 * Project: src
 * Created Date: Sa Apr 2022
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Sat Apr 30 2022
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2022 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 */

namespace Ay4t\WatzapId;

class SendImage extends Watzap
{

    /**
     * get
     *
     * @return string
     */
    private $phoneNumber;

    /**
     * $url
     *
     * @var string
     */
    private $url;

    /**
     * $message
     *
     * @var string
     */
    private $message;

    /**
     * $separate_caption
     *
     * @var bool
     */
    private $separate_caption = 0;

    public function result()
    {
        $params = [
            'api_key'       => $this->apiKey,
            'number_key'    => $this->numberKey,
            'phone_no'      => $this->phoneNumber,
            'url'      => $this->url,
            'message'      => $this->message,
            'separate_caption'      => $this->separate_caption,
        ];
        return $this->exce('send_image_url', $params, 'POST');
    }

    /**
     * Set get
     *
     * @return  self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Set $url
     *
     * @param  string  $url  $url
     *
     * @return  self
     */
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Set $message
     *
     * @param  string  $message  $message
     *
     * @return  self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Set $separate_caption
     *
     * @param  bool  $separate_caption  $separate_caption
     *
     * @return  self
     */
    public function setSeparate_caption(bool $separate_caption)
    {
        $this->separate_caption = $separate_caption;

        return $this;
    }
}
