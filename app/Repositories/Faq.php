<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Faq{
    public static function getFaq(){

        $datas = collect([

            (object)[

                // 1
                'question' => 'Are there payment plans asides from one-off purchases?',
                'answer' => 'You can make a one-off payment, or you can subscribe to instalment or mortgage plans. An outright payment guarantees you complete ownership of the property, with no additional or future charges. However, our payment plans are flexible. We have three instalment plans which allows you to stretch your payments, either over the period of 12 months (1 year), 18 months (1 ½ years), and 24 months (2 years). Our mortgage payment plan stretches over a period of 20 years, at a fixed premium.',
            ],
         
            (object)[
                 // 2
                 'question' => 'What happens if I couldn’t complete payment in due time?',
                 'answer' => 'We have set up a structure that’s designed to help manage your budget, in a way that it doesn’t take a heavy toll on your finances. Whether you’re looking to pay for your property in instalments or on mortgage, make sure to draw up a financial plan that projects your potential income and expenditure for the next few years, to be able to determine if you’ll be able to meet up with the payment.',
            ],

            (object)[
                  // 3
                'question' => 'Which company oversees the project?',
                'answer' => 'Leveraging industry professionals and multiple years of experience, Prime Nest Solutions is an infrastructure development company overseeing the Bricks Court project.',
            ],

            (object)[
                 // 4
                 'question' => 'People lose their properties through government acquisitions. How safe is my investment?',
                 'answer' => 'While many unscrupulous real estate outfits would sell houses that pose a risk of government future acquisition, we ensure that all our properties are safe for purchase, and free of troubles that may arise in the future. We obtain all necessary documents (including C of O’s) to guarantee your peace of mind.',
            ],

        ])->all();

        return $datas;
    }
}