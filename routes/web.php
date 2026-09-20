<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects/{slug}', function ($slug) {

    $projects = [

        'bloodconnect' => [
            'number' => '01',
            'title' => 'BloodConnect',
            'category' => 'Web Development',
            'description' => 'Web-based blood donor information system designed to manage donor data and provide blood availability information.',
            'image' => '/images/projects/bloodconnect.png',

            'stack' => [
                'Laravel',
                'PHP',
                'MySQL',
                'Tailwind CSS',
            ],

            'overview' => 'BloodConnect is a web-based information system focused on blood donor data management and blood availability information. The system is designed around an administrator-managed workflow where donor data can be recorded and managed through the system.',

            'problem' => 'Blood donor information needs to be organized in a structured system so that donor records and blood availability can be managed more efficiently compared with maintaining scattered records.',

            'solution' => 'The system provides an integrated interface for managing donor information, blood stock, and blood requests. The interface was designed to keep administrative workflows simple and make important blood information easier to access.',

            'features' => [
                'Donor data management',
                'Blood stock management',
                'Blood request management',
                'Donor screening information',
                'Blood type and rhesus information',
                'Administrative dashboard',
            ],
        ],


        'telufjb' => [
            'number' => '02',
            'title' => 'TeluFJB',
            'category' => 'Android Development',
            'description' => 'Android marketplace platform designed for Telkom University students.',
            'image' => '/images/projects/telufjb.png',

            'stack' => [
                'Kotlin',
                'Android',
                'Firebase',
                'Cloudinary',
            ],

            'overview' => 'TeluFJB is a mobile marketplace application designed to provide Telkom University students with a platform for buying and selling products.',

            'problem' => 'Students need a simple platform where they can discover products offered by other students and communicate with sellers without relying entirely on external marketplace platforms.',

            'solution' => 'TeluFJB provides product browsing, search, product details, and seller communication within a mobile application. Firebase is used for application data while Cloudinary handles image storage.',

            'features' => [
                'Product listing',
                'Product search',
                'Product detail',
                'Seller information',
                'Image upload',
                'Seller communication',
            ],
        ],


        'distanhorti' => [
            'number' => '03',
            'title' => 'Distanhorti Website',
            'category' => 'Web Development / UI UX',
            'description' => 'Website redesign focused on information architecture, interface design, and user experience.',
            'image' => '/images/projects/distanhorti.png',

            'stack' => [
                'Laravel',
                'Tailwind CSS',
                'JavaScript',
                'Figma',
            ],

            'overview' => 'The Distanhorti website redesign focuses on improving the presentation and organization of information for the Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat.',

            'problem' => 'The existing website structure could make it difficult for visitors to quickly discover information because content and navigation needed better organization.',

            'solution' => 'The redesign reorganizes the navigation structure and introduces a cleaner visual interface with a more consistent layout, typography, spacing, and information hierarchy.',

            'features' => [
                'Improved information architecture',
                'Redesigned navigation',
                'Responsive interface',
                'Modern landing page',
                'Public information sections',
                'Program and service navigation',
            ],
        ],

    ];


    abort_unless(isset($projects[$slug]), 404);

    return view('projects.show', [
        'project' => $projects[$slug],
    ]);
});
