<?php
    namespace Dhanushka\Contactform;
    use Illuminate\Support\ServiceProvider;

    use Illuminate\Support\Facades\Schema;

    class ContactFormServiceProvider extends ServiceProvider 
    {
        public function boot()
        {
            Schema::defaultStringLength(191);
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
            // $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }

        public function register()
        {

        }
    }
?>