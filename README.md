Running the site
- This a normal laravel site, can be run with php artisan server.
- composer install
- php artisan server

Part 1 
- The currency API starts as this [CurrencyController](app/Http/Controllers/CurrencyController.php)
    - This uses a service to get the API stuff and convert it.
    - The Route for this is in api.php but also /api/currency/australian-dollars
      - I know slightly different from the example you asked for but i think it probably should have the /api there
    - There are tests in [tests/Feature/CurrencyControllerTest.php](tests/Feature/CurrencyControllerTest.php)

Part 2
- if you look at the [Web.php](routes/web.php) you can see the example of this.
  -  I've added all the code for this in app/Helpers
  - Chosen to do the Factory and decorator patterns.
