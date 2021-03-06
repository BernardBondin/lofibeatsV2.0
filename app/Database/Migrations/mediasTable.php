<?php

return [
    // Name of the scheme
    'table_name' => 'media',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `media`",

    // The scheme
    'scheme' => "CREATE TABLE `media` (
        `id` int(11) NOT NULL AUTO_INCREMENT,

        `media_id` int(11) NOT NULL,
        `media_type` ENUM('tracks','graphics','playlists'),
        `media_title` varchar(255),
        `media_description_text` varchar(255),

        `artist_id` int(11) NOT NULL,
        `artist_nickname` varchar(80) NOT NULL,

        `total_songs` int(5) NOT NULL,
        `length` decimal NOT NULL,

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