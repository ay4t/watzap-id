<?php
/*
 * File: ValidateNumber.php
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
 * 
 * Endpoint ini berfungsi untuk mengecek suatu nomor apakah telah terdaftar di WhatsApp atau belum.
 * Untuk parameter Number Key bisa anda dapatkan juga pada halaman API Key & Apps pada section Assigned Numbers for API
 * 
 */

namespace Ay4t\WatzapId;

class ValidateNumber extends Watzap
{

    /**
     * $phoneNumber
     *
     * @var string
     */
    protected $phoneNumber;

    /**
     * get
     *
     * @return mixed
     */
    public function result()
    {
        $params = [
            'api_key'       => $this->apiKey,
            'number_key'    => $this->numberKey,
            'phone_no'      => $this->phoneNumber,
        ];
        return $this->exce('validate_number', $params, 'POST');
    }

    /**
     * Set $phoneNumber
     *
     * @param  string  $phoneNumber  $phoneNumber
     *
     * @return  self
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}
