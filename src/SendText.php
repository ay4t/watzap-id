<?php
/*
 * File: SendText.php
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

class SendText extends Watzap
{

    /**
     * $phone
     *
     * @var string
     */
    protected $phone;

    /**
     * $message
     *
     * @var string
     */
    protected $message;

    /**
     * get
     * 
     * Enpoint ini befungsi untuk mendapatkan List Sejarah pengiriman pesan yang berasal dari aplikasi WatZap.
     * Untuk parameter Number Key bisa anda dapatkan juga pada halaman API Key & Apps pada section Assigned Numbers for API
     * @return mixed
     */
    public function result(string $phone = null, string $message = null)
    {
        if (!empty($phone)) $this->phone        = $phone;
        if (!empty($message)) $this->message    = $message;

        $params = [
            'api_key'       => $this->apiKey,
            'number_key'    => $this->numberKey,
            'phone_no'      => $this->phone,
            'message'       => $this->message,

        ];
        return $this->exce('send_message', $params, 'POST');
    }

    /**
     * Set $phone
     *
     * @param  string  $phone  $phone
     *
     * @return  self
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
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
}
