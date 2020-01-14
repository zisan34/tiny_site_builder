<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema
use Illuminate\Support\Facades\View;

use App\SocialMedia;
use App\Menu;
use App\Slider;
use App\Widget;
use App\Logo;
use App\Album;
use App\AlbumImage;
use App\Video;
use App\HeaderFooter;
use App\Quote;
use App\WelcomePageSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // set default timezone
        date_default_timezone_set('Asia/Dhaka');
        // Pass current date and time to all views
        $CURRENT_DATE = date('d-m-Y');
        $CURRENT_TIME = date('H:i:s');
        //
        Schema::defaultStringLength(191); //NEW: Increase StringLength

        // Get GLOBAL Records
        $SOCIAL_MEDIAS = SocialMedia::where('status' , '1')->orderBy('order')->get();

        $TOP_SLIDERS = Slider::where('position' , '=', '0')->orderBy('order')->get();

        $MIDDLE_SLIDERS = Slider::where('position' , '=', '1')->orderBy('order')->get();

        $MENUS = Menu::where('parent_id', '=', NULL )->orderBy('order', 'asc')->get();

        $COMMON_WIDGETS = Widget::where('parent_page_id', '=', 0)->orderBy('order', 'asc')->get();

        $HEADER_FOOTERS = HeaderFooter::latest()->first();

        $QUOTE = Quote::latest()->first();

        $LATEST_IMAGES = AlbumImage::where('album_id', '!=', NULL)->wherein('album_id', Album::where('visibility', '0')->get()->pluck('id'))->latest()->take(9)->get();

        $LATEST_VIDEO = Video::where('status', '=', '1')->latest()->first();

        $LOGOS = Logo::latest()->first();
        // GLOBAL default variable init.

        $WelcomePageSetting = WelcomePageSetting::latest()->first();


        // Share values in all views
        View::share([
            'CURRENT_DATE'  => $CURRENT_DATE,
            'CURRENT_TIME'  => $CURRENT_TIME,
            'SOCIAL_MEDIAS' => $SOCIAL_MEDIAS,
            'MENUS'         => $MENUS,
            'TOP_SLIDERS'   => $TOP_SLIDERS,
            'MIDDLE_SLIDERS'=> $MIDDLE_SLIDERS,
            'LOGOS'         => $LOGOS,
            'COMMON_WIDGETS'=> $COMMON_WIDGETS,
            'HEADER_FOOTERS'=> $HEADER_FOOTERS,
            'QUOTE'         => $QUOTE,
            'LATEST_IMAGES' => $LATEST_IMAGES,
            'LATEST_VIDEO' => $LATEST_VIDEO,
            'WelcomePageSetting' => $WelcomePageSetting,
        ]);
    }
}
