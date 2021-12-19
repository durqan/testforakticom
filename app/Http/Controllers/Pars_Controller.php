<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Parsing_File;
use App\Http\Controllers\PageController;
use App\Models\products;

class Pars_Controller extends Controller
{
    public function get_url()
    {
        $parsing = new Parsing_File();
        $result = $parsing->getData($_FILES['file']['tmp_name']);

        $this->to_base($result);
    }

    public function to_base($data)
    {
        array_shift($data);
        $data_array = [];
        $i = 0;

        foreach ($data as $array)
        {
            $data_array[$i]['code'] = $array[0];
            $data_array[$i]['name'] = $array[1];
            $data_array[$i]['level_1'] = $array[2];
            $data_array[$i]['level_2'] = $array[3];
            $data_array[$i]['level_3'] = $array[4];
            $data_array[$i]['price'] = $array[5];
            $data_array[$i]['price_sp'] = $array[6];
            $data_array[$i]['property_fields'] = $array[7];
            $data_array[$i]['joint_purchases'] = $array[8];
            $data_array[$i]['unit_of_measurement'] = $array[9];
            $data_array[$i]['picture'] = $array[10];
            $data_array[$i]['display_on_the_main_page'] = $array[11];
            $data_array[$i]['description'] = $array[12];
            $i++;
        }

        products::insert($data_array);
    }
}
