<?php
namespace DNI;

class DNI
{

    public static function find($dni)
    {
        $data = file_get_contents("https://api.reniec.cloud/dni/".$dni);
        $info = json_decode($data, true);

        if($data==='[]')
        {
            return false;
        }
        else
        {
            return (object) [
                'dni' => $info['dni'],
                'cui' => $info['dni'],
                '$paterno' => $info['apellido_paterno'],
                '$materno' => $info['apellido_materno'],
                '$nombres' => $info['nombres'],
                ];
        }
    }
}