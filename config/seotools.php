<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Affordable and Elegance Housing in Nigeria', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['low income housing in Nigeria, affordable housing in Lagos Nigeria, affordable housing in Abeokuta Nigeria, cheap housing in Sagamu Nigeria , cheap housing in Ajegunle Nigeria , housing with flexible payment plan , get two bedroom apartment in Lagos , get three bedroom apartment in Lagos, housing with guaranteed security in Lagos , fully furnished apartment in Lagos Nigeria , housing with guaranteed security in Abeokuta Nigeria , fully furnished apartment in Abeokuta Nigeria , cheap housing in Ifo Nigeria'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
            

        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => 'C9E40CE04FC37ADEA608C2742EBD138C',
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => '658ef63ed076dc84',
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Affordable and Elegance Housing in Nigeria', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            // 'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Affordable and Elegance Housing in Nigeria', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
