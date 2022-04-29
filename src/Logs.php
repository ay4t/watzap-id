<?php
/*
 * File: Logs.php
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

class Logs extends Watzap
{

    /**
     * $page
     *
     * @var int
     */
    protected $page;

    /**
     * $perpage
     *
     * @var int
     */
    protected $perpage;


    /**
     * get
     * 
     * Enpoint ini befungsi untuk mendapatkan List Sejarah pengiriman pesan yang berasal dari aplikasi WatZap.
     * Untuk parameter Number Key bisa anda dapatkan juga pada halaman API Key & Apps pada section Assigned Numbers for API
     * @return mixed
     */
    public function result()
    {
        $params = [
            'api_key'   => $this->apiKey,
            'number_key' => $this->numberKey,
            'page'      => $this->page,
            'perpage'   => $this->perpage,
            'sort'      => [
                'phone_no' => 'asc'
            ],
        ];
        return $this->exce('logs', $params, 'POST');
    }

    /**
     * Set $page
     *
     * @param  int  $page  $page
     *
     * @return  self
     */
    public function setPage(int $page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * Set $perpage
     *
     * @param  int  $perpage  $perpage
     *
     * @return  self
     */
    public function setPerpage(int $perpage)
    {
        $this->perpage = $perpage;
        return $this;
    }
}
