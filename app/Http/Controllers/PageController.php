<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display services page.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display pricing page.
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Blog index with pagination.
     */
    public function blog(Request $request)
    {
        $all = collect(config('site_content.blog_posts', []));
        $perPage = 6;
        $total = $all->count();
        $lastPage = max(1, (int) ceil($total / $perPage));
        $page = min(max(1, (int) $request->query('page', 1)), $lastPage);
        $posts = $all->slice(($page - 1) * $perPage, $perPage)->values();

        return view('pages.blog', [
            'posts' => $posts,
            'page' => $page,
            'lastPage' => $lastPage,
            'total' => $total,
            'perPage' => $perPage,
        ]);
    }

    /**
     * Single blog article.
     */
    public function blogShow(string $slug)
    {
        $posts = collect(config('site_content.blog_posts', []))->keyBy('slug');
        abort_unless($posts->has($slug), 404);

        return view('pages.blog-post', ['post' => $posts->get($slug)]);
    }

    /**
     * Display portfolio page.
     */
    public function portfolio()
    {
        return view('pages.portfolio', [
            'projects' => config('site_content.portfolio_projects', []),
        ]);
    }

    /**
     * Portfolio case study detail.
     */
    public function portfolioShow(string $slug)
    {
        $projects = collect(config('site_content.portfolio_projects', []))->keyBy('slug');
        abort_unless($projects->has($slug), 404);

        return view('pages.portfolio-detail', ['project' => $projects->get($slug)]);
    }

    /**
     * Display contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display request demo page.
     */
    public function requestDemo()
    {
        return view('pages.request-demo');
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

    /**
     * Display system development service page.
     */
    public function servicesSystemDevelopment()
    {
        return view('pages.services.system-development');
    }

    /**
     * Display cloud services service page.
     */
    public function servicesCloudServices()
    {
        return view('pages.services.cloud-services');
    }

    /**
     * Display companies page (group companies).
     */
    public function companies()
    {
        return view('pages.companies');
    }

    /**
     * Display accounting & financial services page.
     */
    public function servicesAccounting()
    {
        return view('pages.services.accounting');
    }

    /**
     * Display technology & digital innovation page.
     */
    public function technology()
    {
        return view('pages.technology');
    }

    /**
     * Display solutions page (all services & industry solutions).
     */
    public function solutions()
    {
        return view('pages.solutions');
    }
}
