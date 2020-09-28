<?php

namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Pick{
    public static function getDatabase(){
     $datas = collect([

        
       (object) [ 

        // 1

           'estate' => (object) [
               'name' => 'Primenest Estate',
               'code' => 'primenest',
            ],

            // 2

           'estate' => (object) [
              'name' => 'Lilycourt Estate',
               'code' => 'lilycourt',
            ],
            
            'estate_code' => 'primenest', 
            'name' => 'Bricks Court Abeokuta',
            'price' => '6000000',
            'featured_thumbnail' => '/assets/img/3 1.png',
            'featured_image' => '/img/ifo1.png',
            'img_alt' => 'bricks court abeokuta',
            'img_title' => 'primenest bricks court abeokuta',

            

            'keypoint' => (object) [
                'bedroom' => '03',
                'bathroom' => '03',
                'area' => '300',
                'parking' => '02 Outdoor',
            ],
            'base_floor' => (object) [
                'plan' => '',
                'image' => ''
            ],
            'amenities' => (object) [
                '24hrs security personnel',
                'Children layground',
                'Well drainage system',
                '24hrs uninteruppted power supply',
                'Ample parking space',
                ' CCTV camera',
                'Adequate water supply'
            ],
            'facts' => (object) [ 
                'living_room' => '20 x 16 sq feet', 
                'garage' => '20 x 16 sq feet',
                'bedroom' => '20 x 16 sq feet',
                'bathroom' => '20 x 16 sq feet',
            ]
            

        ],




        //2
       (object) [ 
            'estate_code' => 'primenest', 
            'name' => 'Bricks Court Sagamu',
            'price' => '6000000',
            'featured_thumbnail' => '/assets/img/3 2.png',
            'featured_image' => '/img/ifo2.png',
            'img_alt' => 'bricks court sagamu',
            'img_title' => 'primenest bricks court sagamu',
            

            'keypoint' => (object)[
                'bedroom' => '03',
                'bathroom' => '03',
                'area' => '300',
                'parking' => '02 Outdoor',
            ],
            'base_floor' => (object) [
                'plan' => '<p>Set in two rapidly developing suburbs Ogun State, the Bricks Court Estate is a modern settlement equipped with top-of-the-class facilities, and which provides the level of comfort and serenity you experience in the high-end areas of the state.</p> <p> Bricks Court Estate houses 100 units of 3-bedroom bungalows. Each apartment has a dedicated parking area, treated water supply, and all amenities that guarantee convenience and a luxurious lifestyle. </p>',
                'image' => ''
            ],
            'amenities' => (object)[
                '24hrs security personnel',
                'Children layground',
                'Well drainage system',
                '24hrs uninteruppted power supply',
                'Ample parking space',
                ' CCTV camera',
                'Adequate water supply'
            ],
            'facts' => (object)[
                'living_room' => '20 x 16 sq feet', 
                'garage' => '20 x 16 sq feet',
                'bedroom' => '20 x 16 sq feet',
                'bathroom' => '20 x 16 sq feet',
            ]
            

        ],



        
         //3
        (object)[
            'estate_code' => 'lilycourt', 
            'name' => 'LilyCourt Ajegunle 1',
            'price' => '12800000',
            'featured_thumbnail' => '/assets/img/lilo.png',
            'featured_image' => '/img/biglil.png',
            'img_alt' => 'lilycourt ajegunle 2 bedroom',
            'img_title' => 'lilycourt estate ajegunle 2 bedroom',
            

            'keypoint' => (object) [
                'bedroom' => '02',
                'bathroom' => '03',
                'area' => '300',
                'parking' => '02 Outdoor',
            ],
            'base_floor' => (object) [
                'plan' => '<p>Lily Court is positioned in a laid-back environment in Ifako-Ijaiye, a fast-developing Lagos suburb. An ultra-modern community which boasts elite amenities and optimum security, its location makes it ideal for young families and the business class. </p>  <p> \n\n Lily Court houses 36 units of 2-bedroom apartments with a base floor of 300 sqm. Both rooms are en-suite. The living room combines the lounge and dining area, and the amply-spaced kitchen allows you to define your style. The terraces are excellent for taking in refreshing air and overlooking the scenic landscape. </p>',
                'image' => ''
            ],
            'amenities' => (object) [
                '24hrs security personnel',
                'Children layground',
                'Well drainage system',
                '24hrs uninteruppted power supply',
                'Ample parking space',
                'CCTV camera',
                'Adequate water supply'
            ],
            'facts' => (object) [
                'living_room' => '20 x 16 sq feet', 
                'garage' => '20 x 16 sq feet',
                'bedroom' => '20 x 16 sq feet',
                'bathroom' => '20 x 16 sq feet',
            ]
            
        ],







         //4
         (object)[
            'estate_code' => 'lilycourt', 
            'name' => 'LilyCourt Ajegunle 2',
            'price' => '14800000',
            'featured_thumbnail' => '/assets/img/lilo.png',
            'featured_image' => '/img/biglil.png',
            'img_alt' => 'lilycourt ajegunle 3 bedroom',
            'img_title' => 'lilycourt estate ajegunle 3 bedroom',
            

            'keypoint' => (object) [
                'bedroom' => '03',
                'bathroom' => '04',
                'area' => '300',
                'parking' => '02 Outdoor',
            ],
            'base_floor' => [
                'plan' => '<p> Lily Court is positioned in a laid-back environment in Ifako-Ijaiye, a fast-developing Lagos suburb. An ultra-modern community which boasts elite amenities and optimum security, its location makes it ideal for young families and the business class. \n\n A total 126 units, Lily Court 3-bedroom apartments are based on a 300 sqm. The lounge and dining area covers 31 sqm. The master bedroom claims 18 sqm while the other rooms are 12 sqm large. All rooms are en-suite. </p> <p> The estate provides each apartment with a dedicated parking area, treated water, and 24 x 7 electricity supply. Sitting in the centre of the park is a recreational complex which allows easy access to daily essentials, personal or social, thereby improving your living experience. </p>',
                'image' => ''
            ],
            'amenities' => [
                '24hrs security personnel',
                'Children layground',
                'Well drainage system',
                '24hrs uninteruppted power supply',
                'Ample parking space',
                'CCTV camera',
                'Adequate water supply'
            ],
            'facts' => [
                'living_room' => '20 x 16 sq feet', 
                'garage' => '20 x 16 sq feet',
                'bedroom' => '20 x 16 sq feet',
                'bathroom' => '20 x 16 sq feet',
            ]

         ],

     ])->all();


     return $datas;
    }
}