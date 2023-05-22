<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Blueprint::macro('additionalColumns', function (){
            $this->boolean('status')->default(0);
            $this->foreignId('created_by')->references('id')->on('users')->cascadeOnUpdate();
            $this->foreignId('updated_by')->nullable()->references('id')->on('users')->cascadeOnUpdate();
            $this->softDeletes();
            $this->timestamps();
        });

        Builder::macro('withWhereHas', fn($relation, $constraint)=> $this->whereHas($relation, $constraint)->with([$relation=>$constraint]));
    }
}
