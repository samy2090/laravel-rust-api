<?php

namespace App\Http\Traits;

trait apiTrait
{
    public function apiResponse($data = null , $messsage = null , $status = null)
    {
        $array = [
            'data'      => $data ,
            'message'   => $messsage,
            'status'    => $status
        ];
        return response ($array, $status);
    }
}