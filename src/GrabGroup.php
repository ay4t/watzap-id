<?php
/*
 * File: GrabGroup.php
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
 * Enpoint ini befungsi untuk mendapatkan List Group yang ada pada WhatsApp anda.
 * Untuk parameter Number Key bisa anda dapatkan juga pada halaman API Key & Apps pada section Assigned Numbers for API
 * 
 */

namespace Ay4t\WatzapId;

class GrabGroup extends Watzap
{

    /**
     * get
     * 
     * Enpoint ini befungsi untuk mendapatkan List Group yang ada pada WhatsApp anda.
     * Untuk parameter Number Key bisa anda dapatkan juga pada halaman API Key & Apps pada section Assigned Numbers for API
     * @return mixed
     */
    public function result()
    {
        $params = [
            'api_key'       => $this->apiKey,
            'number_key'    => $this->numberKey,
        ];
        return $this->exce('groups', $params, 'POST');
    }
}
