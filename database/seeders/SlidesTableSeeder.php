<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'upper_title' => 'منصة معراج التعليمية',
                'title' => 'عن النبي صلى الله عليه وسلم قال : (خيركم من تعلم القرآن وعلمه)',
                'image' => 'slide1.jpg',
                'link' => '#',
            ],
            [
                'upper_title' => 'منصة معراج التعليمية',
                'title' => 'قال الله تعالى : (وَرَتِّلِ الْقُرْآنَ تَرْتِيلا)',
                'image' => 'slide2.jpg',
                'link' => '#',
            ],


        ];

        foreach ($slides as $slide) {

            Slide::create($slide);

        }//end of foreach

    }//end of run

}//end of seeder
