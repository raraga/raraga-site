<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    private array $projects = [
        [
            'title' => 'BK Precision',
            'description' => 'For over 70 years, B&K Precision is a leading provider in test and measurement solutions.',
            'extendedDescription' => 'This project involved creating a modern, responsive website for B&K Precision, a company with over 70 years of experience in test and measurement solutions. The goal was to showcase their extensive product catalog while providing an intuitive user experience for both B2B and B2C customers. We implemented advanced product filtering, detailed specifications pages, and integrated their existing ERP system for real-time inventory tracking.',
            'image' => 'storage/bk-home.jpg',
            'slug' => 'bk-precision',
            'url' => 'https://www.bkprecision.com',
            'pictures' => [
                'storage/bk-filters.jpg',
                'storage/bk-product-page.jpg',
                'storage/bk-knowledge-base.jpg',
            ],
            'links' => [
                'https://www.bkprecision.com/products/power-supplies',
                'https://www.bkprecision.com/products/power-supplies/9182',
                'https://www.bkprecision.com/knowledge',
            ],
        ],
        [
            'title' => 'MyBK',
            'description' => 'MyBK is a customer portal made to provide continued product support for B&K customers. From RMAs, calibrations and extended warranties.',
            'extendedDescription' => 'MyBK is a comprehensive customer portal designed to provide ongoing product support for B&K Precision customers. The portal enables customers to easily manage RMAs, schedule calibrations, purchase extended warranties, and access product documentation. We built a secure authentication system, real-time status tracking for service requests, and seamless integration with their backend CRM system.',
            'image' => 'storage/mybk-home.jpg',
            'slug' => 'mybk',
            'url' => 'https://my.bkprecision.com',
            'pictures' => [
                'storage/mybk-rma-request.jpg',
                'storage/mybk-register-product.jpg',
            ],
            'links' => [
                //
            ],
        ],
    ];

    public function __invoke(Request $request)
    {
        $project = collect($this->projects)->firstWhere('slug', $request->slug);

        abort_if(! $project, 404);

        return Inertia::render('Project', [
            'project' => $project,
        ]);
    }
}
