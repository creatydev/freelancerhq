<h2>Freelancer HQ</h2>

Freelancer HQ is a simple single page CRM software, Built with Laravel 5.6 and Vue.js for Freelancer and Small Business like me.

I am using it as my personal CRM software, so you will get almost every features with high level UIX.

<h3>Some features of Freelancer HQ:</h3>

* Build and send Proposal using HTML and CSS template.
* Dynamic and Advance Dasheboard
* Clients and COntacts management
* Easy to manage Media Library
* Advance Leads Management
* Easy Contracts Management
* Advance Projects Management
* Awesome Invoice Management
* Advance Search and Filtering options with custom Algorithm
* Dynamic Tempalting system
* Custom Field system
* Dynamic Status System
* Access and ROle Based management
* Easy User Invitation system
* Online Payment Gateway: Stripe, Paypal and Rozerpay
* Single page web application
* Generate PDF easily
* Easy to install. Even my 2 years age son also can install it. :)
* Easy Translation system
* Off course, Developer Friendly

<h3>REQUIREMENTS</h3>

Before start to deploy Freelancer HQ in your server, make sure you hvae requirements like bellow:

* Linux/Windows Operating System
* Nginx / Apache
* PHP >= 7.1.3
* MYSQL 5.7+
* OpenSSL PHP Extension
* PDO PHP Extension
* XML PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Composer as dependency manager

I used composer to utilize Freelancer HQ, so make sure your local server or live server has  Composer installed.

<h3>Cron Job</h3>

`* * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1`


<h3>Pretty URLs</h3>

For Apache: If my pre added .htaccess dont work, then use this credentials:

`
Options +FollowSymLinks
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
`

For Nginx:

`location / {
    try_files $uri $uri/ /index.php?$query_string;
}`

<h3>How to install</h3>

First run:

`
composer install
npm install
`

After then create a new database and add your database credentials to your .env file:

`
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=freelancerhq
DB_USERNAME=root
DB_PASSWORD=
`

Also dont forget to update the App url:

`APP_URL=localhost/freelancerhq`

Once done everything, run this command:

`php artisan freelancerhq:install`

The above comand will run `php artisan key:generate --force` and `php artisan migrate --force`


Default Admin Login xredentials:

`
Email: admin@freelancerhq.dev
Password: password
`

Before you deploy make sure you have set proper settings in .env file

`
APP_ENV=production
APP_DEBUG=false
`