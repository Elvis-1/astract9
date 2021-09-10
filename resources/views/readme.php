<?php
/*
STEPS
1) Start a laravel project
2) Install jetstream : composer require laravel/jetstream
3) Add livewire : php artisan jetstream:install livewire
4) make admin middleware : php artisan make:middleware AuthAdmin
5) configure the AuthAdmin middleware in middleware folder
6) Register it in kernel.php
7) register admin home in routeservice provider
8) create admin layout as the default is for normal user

// configure the admin layout
9) copy app.blade file and paste in the admin layout
10) copy navigation-menu and replace the @livewire(navigation-menu) in script with it;
11) edit the admin route to admin.dashboard
12) edit  profile.show route to profile.admin-show;
13) edit the api.tokens.index route api-tokens.admin-index
//

14) create adminlayout class view - AdminLayout.php
15) copy the content of applayout.php to adminlayout.php and edit it to admin
16) create admin views in the views directory
17) copy user dashboard to the admin dashboard and edit it to admin
18) create admin profile pages
19) create admin api page in api folder and edit
20) locate userfrofilecontroller in vendor folder : Laravel\Jetstream\Http\Controllers\Livewire;
     and configure, also locate apitoken in the same folder and configure
21) Still in the vendor folder, locate attempttoauthenticate file in laravel/fortifer folder  Laravel\Fortify\Actions; and configure;

22) Still in the vendor folder, locate livewire in jetstream and configure
23) Go to jetstream.php in config folder(outside vendor) and enable add profile photo and api

*/




