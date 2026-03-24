# laravel-sandbox
php artisan serve --host=0.0.0.0 --port=8000 //this is the command for running the dev serve


A Controller is a PHP class that handles the logic of a request in a Laravel application.

Benefits of Controllers
Keeps routes clean
Organizes logic into classes
Makes code reusable
Supports MVC architecture


//how to create a controller
-> u can directly create controller in app > Http > controllers folder
->other way is using cmd (this is the recommended approach to avoid mistakes as it creates the basic boiler plate of controller code)
->controller name should always start witha capital letter as it is a class

command:
php artisan make:controller <Controller name starting with capital letter>

Ex:
php artisan make:controller 


how to pass data into components

Create component → php artisan make:component Name
Define variables in component class
Accept data in constructor
Use variables in component Blade
Pass values using <x-component />