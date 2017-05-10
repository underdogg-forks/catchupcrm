<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

//use Illuminate\Contracts\Routing\Middleware;

use App;
use Closure;
use Cache;
use Config;
use Redirect;
use Setting;
use Caffeinated\Themes\Facades\Theme;
use View;


//class SetTheme implements Middleware {
class SetTheme
{


    public function __construct(
        Application $app,
        Redirector $redirector,
        Request $request
    )
    {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
        $domain_slug = 'localhoz';

        $site_id = 1;
        $site_theme_slug = 'local_default';

        Cache::forget('theme');
        $theme = Cache::get($site_id . '_' . 'theme', $site_theme_slug);

        $theme = explode('_', $theme);

        $theme = $theme[1];

        Theme::setActive($theme);

        dd($theme);


        if ($theme == null) {
            dd('Theme is NULL?');
            $theme = Setting::get('active_theme', Config::get('themes.active', 'bootstrap'));
            Theme::setActive($theme);
        } elseif ($theme == 'default' || $theme == 'bootstrap') {
            //$theme = Setting::get('active_theme', Config::get('themes.active', 'global'));
            Theme::setActive('Flatly');
            dd($theme);
            //$theme = 'flatly';
        }


        //$temp = 'Flatly_layouts.public';

        dd($theme);

        View::share('activeTheme', $theme);
        View::share('theme_public', $theme . '::' . Config::get('themes.public', $theme . '::' . '_layouts.public'));
        View::share('theme_front', $theme . '::' . Config::get('themes.front', $theme . '::' . '_layouts.front'));
        View::share('theme_back', $theme . '::' . Config::get('themes.back', $theme . '::' . '_layouts.back'));
        View::share('theme_simple', $theme . '::' . Config::get('themes.simple', $theme . '::' . '_layouts.simple'));
        View::share('theme_manager', $theme . '::' . Config::get('themes.manager', $theme . '::' . '_layouts.manager'));
        View::share('theme_agent', $theme . '::' . Config::get('themes.agent', $theme . '::' . '_layouts.agent'));
        View::share('theme_client', $theme . '::' . Config::get('themes.client', $theme . '::' . '_layouts.client'));

dd('temp end');



        return $next($request);

    }


}
