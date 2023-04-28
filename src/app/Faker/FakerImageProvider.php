<?php

namespace App\Faker;


use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class  FakerImageProvider extends  Base
{

    public function loremflickr(string $dir = '', int $width = 500, int $height = 500): string
    {
        $outName =Str::random(6) . '.jpg';
        $name =$dir . '/' .  $outName;

        Storage::put(
            $name,
            file_get_contents("https://loremflickr.com/$width/$height")
        );

        return $outName;
    }
}
