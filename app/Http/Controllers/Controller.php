<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\City;
use App\Models\Courier;

class Controller extends BaseController
{
    protected $db;
    protected $province;
    protected $city;
    protected $courier;

    public function __construct()
    {
        $this->db = new DB();
        $this->province = new Province();
        $this->city = new City();
        $this->courier = new Courier();
    }
}
