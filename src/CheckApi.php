<?php
/*
 * File: CheckApi.php
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
 * Endpoint checking_key berguna untuk mengecek status API Key Anda, Apakah masih VALID atau TIDAK.
 * 
 * 
 */

namespace Ay4t\WatzapId;

class CheckApi extends Watzap
{

    /**
     * get
     *
     * @return mixed
     */
    public function result()
    {
        $params = [
            'api_key'   => $this->apiKey
        ];
        return $this->exce('checking_key', $params, 'POST');
    }
}
