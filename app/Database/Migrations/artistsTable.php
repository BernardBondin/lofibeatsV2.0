<?php

return [
    // Name of the scheme
    'table_name' => 'artists',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `artists`",

    // The scheme
    'scheme' => "CREATE TABLE `artists` (
        `id` int(11) NOT NULL AUTO_INCREMENT,

        `artist_type` ENUM('tracks','graphics','playlists'),
        `artist_first_name` varchar(30),
        `artist_middle_name` varchar(30),
        `artist_last_name` varchar(30),
        `artist_full_name` varchar(70),

        `artist_nick_name` varchar(80) NOT NULL,

        `country` int(11),

        `role` varchar(50),
        `email` varchar(50),
        `facebook` varchar(50),
        `instagram` varchar(50),
        `twitter` varchar(50),
        `tiktok` varchar(50),
        `deviantart` varchar(50),
        `artstation` varchar(50),
        `spotify` varchar(50),
        `soundcloud` varchar(50),
        `youtube` varchar(50),

        `comment` varchar(255),
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'first_name' => "Joe",
            'last_name'  => "Satriani",
            'country'    => 232,
            'birthday'   => "1956-07-15",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'first_name' => "Steve",
            'last_name'  => "Vai",
            'country'    => 232,
            'birthday'   => "1960-06-06",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'first_name' => "John",
            'last_name'  => "Petrucci",
            'country'    => 232,
            'birthday'   => "1967-07-12",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'first_name' => "Yngwie",
            'last_name'  => "Malmsteen",
            'country'    => 200,
            'birthday'   => "1968-07-12",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'first_name' => "Richie",
            'last_name'  => "Blackmore",
            'country'    => 225,
            'birthday'   => "1948-07-12",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ]),
    ],
];