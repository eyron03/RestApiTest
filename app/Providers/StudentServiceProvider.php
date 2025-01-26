<?php

namespace App\Providers;

use App\Interfaces\StudentInterface;
use App\Repositories\StudentRepository;
use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(StudentInterface::class, StudentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
