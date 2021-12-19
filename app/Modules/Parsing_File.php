<?php

namespace App\Modules;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Parsing_File
{
    public function getData($url)
    {
        $file = file($url);
        $array_products = [];

        foreach ($file as $product)
        {
            $processed_string = $this->processing_string($product);
            $processed_string = explode(";", $processed_string);
            $array_products[] = $processed_string;
        }

        return $array_products;
    }

    protected function processing_string($string)
    {
        $string = rtrim($string, "\n\r,");
        $string = str_replace('"', "", $string);

        return $string;
    }
}
