<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\Usercomposer;
use App\Http\View\Composers\EssayComposer;
use App\Http\View\Composers\DocumentComposer;
use App\Http\View\Composers\EducationComposer;
use App\Http\View\Composers\ExperienceComposer;

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

        //use bootstrap for pagination
        Paginator::usebootstrap();

        //pass UserComposer to class
        View::composer('master.sidebar', Usercomposer::class );
        View::composer(['user.update_education', 'user.preview_data'], EducationComposer::class );
        View::composer(['user.update_experience', 'user.preview_data'], ExperienceComposer::class);
        View::composer(['user.update_document', 'user.preview_data'], DocumentComposer::class);
    }
}
