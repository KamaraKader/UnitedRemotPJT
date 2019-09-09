## Application for full-stack option of United Remot test with PHP and laravel framework

This application is the test of United Remote for the Full-Stack Coding Chaleng Option. for the techologie, I work with the laravel framework of php.

## The different features I created in the application are:
 
- As a User, I can sign up using my email & password
- As a User, I can sign in using my email & password
- As a User, I can display the list of shops sorted by distance
- As a User, I can like a shop, so it can be added to my preferred shops
- when I like a shop, I can not like it a second time as long as I have not deleted it     from the list of favorite stores

## For the Bonus point, I did :

- As a User, I can display the list of preferred shops
- As a User, I can remove a shop from my preferred shops list

## what I did not do:

In the bonus part, I have note done :
- [As a User, I can dislike a shop, so it won’t be displayed within “Nearby Shops” list during the next 2 hours]

## How install the project in locale machine

- Clone the repository with git clone
- Copy .env.example file to .env and edit database/Stripe credentials there
- Run composer install
- Run php artisan key:generate
- Run php artisan migrate --seed (it has some seeded data for your testing)

for the password you need to enter 8 caracteres


## project architecture
Laravel use the MVC (Model view controller), Controller to handle user requests and retrieve data, by leveraging Models, Models to interact with your database and retrieve your objects’ information, Views to render pages.

The Controllers of this project
This project have 4 Controllers : HomeController.php, ShopController.php, RegisterController.php and LoginController.php.
HomeController.php and ShopController.php are in app\Http\Controllers folder and RegisterController.php and LoginController.php are in app\Http\Controllers\Auth folder.

In the HomeController.php I created one function to get all shop in the main page,
In the ShopController.php I created diffrentes functions to get, store,  and remove the preferreds shop of an user.

LonginController.php allows a user who is already registered to log in.
RegisterController.php allows a user to signup

The Model of this application : 
This application have 2 model : User.php and Shop.php, these models are in folder named app, User and Shop model are connected to the databases named "users" and "shops". also I created different relationship beetween these models, I explained thes relationships in each model file as a comment.

## tables of the database

For this application, I created 3 table : users, shops and preferreds tables, I created the seed file to be able to display shops on the main page. The database file are in database\migrations folder and the seed file named ShoptableSeeder.php is in migration\seeds folder.

## the views and html/css
for this project, I created 4 pages : home.blade.php the main page, fav.blade.php the page to get the user preferred shop in resources\views folder , login.blade.php for login and register.blade.php for sign up in resources\views\auth folder.

for the CSS, there are 2 CSS file : style.css for main page and the favorite shop page, 
style2.css for the login and register page. the CSS file are in public\css folder

## the routes
you can see the list of routes in the folder named routes and the route file is web.php
