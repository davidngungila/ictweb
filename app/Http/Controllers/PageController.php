<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the portfolio page.
     */
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    /**
     * Display contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display web development service page.
     */
    public function servicesWebDevelopment()
    {
        return view('pages.services.web-development');
    }

    /**
     * Display mobile app development service page.
     */
    public function servicesMobileAppDevelopment()
    {
        return view('pages.services.mobile-app-development');
    }

    /**
     * Display network installation service page.
     */
    public function servicesNetworkInstallation()
    {
        return view('pages.services.network-installation');
    }

    /**
     * Display cybersecurity service page.
     */
    public function servicesCybersecurity()
    {
        return view('pages.services.cybersecurity');
    }

    /**
     * Display IT support service page.
     */
    public function servicesItSupport()
    {
        return view('pages.services.it-support');
    }

    /**
     * Display ICT consultancy service page.
     */
    public function servicesIctConsultancy()
    {
        return view('pages.services.ict-consultancy');
    }
}
