<?php
/**
 * Created by PhpStorm.
 * User: Arek
 * Date: 2019-01-01
 * Time: 14:58
 */

namespace App\Models;


class State
{

    const POLAND_CODE = 'PL';

    public static function getStatesByCountrycode(String $countryCode) {
        switch ($countryCode) {
            case self::POLAND_CODE:
                return [
                    1 => 'Dolnośląskie',
                    2 => 'Kujawsko-Pomorskie',
                    3 => 'Lubelskie',
                    4 => 'Lubuskie',
                    5 => 'Łódzkie',
                    6 => 'Małopolskie',
                    7 => 'Mazowieckie',
                    8 => 'Opolskie',
                    9 => 'Podkarpackie',
                    10 => 'Podlaskie',
                    11 => 'Pomorskie',
                    12 => 'Śląskie',
                    13 => 'Świętokrzyskie',
                    14 => 'Warmińsko-Mazurskie',
                    15 => 'Wielkopolskie',
                    16 => 'Zachodniopomorskie'
                ];
                break;
            default :
                return [];
                break;
        }
    }
}