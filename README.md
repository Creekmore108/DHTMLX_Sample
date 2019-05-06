# DHTMLX_Sample

Built on Laravel 5.8<br>
Built on Bootstrap 4<br>
Uses MySQL Database (can be changed)<br>
Uses Artisan to manage database migration, schema creations, and create/publish page controller templates
Dependencies are managed with COMPOSER<br>
Laravel Scaffolding User and Administrator Authentication.<br>
CRUD (Create, Read, Update, Delete) Themes Management<br>
CRUD (Create, Read, Update, Delete) User Management<br>
Robust Laravel Logging with admin UI using MonoLog<br>
User Registration with email verification<br>
Makes use of Laravel Mix to compile assets<br>
Makes use of Language Localization Files<br>
Active Nav states using Laravel Requests<br>
Restrict User Email Activation Attempts<br>
Capture IP to users table upon signup<br>
Uses Laravel Debugger for development<br>
Makes use of Password Strength Meter<br>
Makes use of hideShowPassword<br>
User Avatar Image AJAX Upload with Dropzone.js<br>
User Gravatar using Gravatar API<br>
User Password Reset via Email Token<br>
User Login with remember password<br>
User Roles/ACL Implementation<br>
Makes use of Laravel's Soft Delete Structure<br>
Soft Deleted Users Management System<br>
Permanently Delete Soft Deleted Users<br>
User Delete Account with Goodbye email<br>
User Restore Deleted Account Token<br>
Restore Soft Deleted Users<br>
View Soft Deleted Users<br>
Captures Soft Delete Date<br>
Captures Soft Delete IP<br>
Admin Routing Details UI<br>
Admin PHP Information UI<br>
Eloquent user profiles<br>
User Themes<br>
404 Page<br>
403 Page<br>
Configurable Email Notification via Laravel-Exception-Notifier<br>
Activity Logging using Laravel-logger<br>
Optional 2-step account login verfication with Laravel 2-Step Verification<br>
Uses Laravel PHP Info package<br>
Uses Laravel Blocker package<br>
<p>&nbsp;</p>

Installation Instructions<br><br>

Run git clone <br>
Create a MySQL database for the project<br>
mysql -u root -p<br>
create database DHTMLX-Sample;<br>
\q<br>
From the projects root run cp .env.example .env<br>
Configure your .env file<br>
Run composer update from the projects root folder<br>
From the projects root folder run:<br>
php artisan vendor:publish --tag=laravelroles &&<br>
php artisan vendor:publish --tag=laravel2step<br>
From the projects root folder run sudo chmod -R 755 ../DHTMLX-Sample<br>
From the projects root folder run php artisan key:generate<br>
From the projects root folder run php artisan migrate<br>
From the projects root folder run composer dump-autoload<br>
From the projects root folder run php artisan db:seed<br>
Compile the front end assets with npm steps or yarn steps.<br>
Build the Front End Assets with Mix<br><br>

User Access

Unverified - Level 0<br>
User - Level 1<br>
Administrator - Level 5<br>
<br>
Permissions<br>
view.users<br>
create.users<br>
edit.users<br>
delete.users<br>
Seeded Users<br>
<br>
<b>Email	Password	Access</b><br>
user@user.com	password	User Access<br>
admin@admin.com	password	Admin Access<br>
<br><br>
BlockedTypeTableSeeder.php<br>
Slug	Name<br>
email	E-mail<br>
ipAddress	IP Address<br>
domain	Domain Name<br>
user	User<br>
city	City<br>
state	State<br>
country	Country<br>
countryCode	Country Code<br>
continent	Continent<br>
region	Region<br>
Blocked Items Seed List<br>
<br><br>
BlockedItemsTableSeeder.php<br>
Type	Value	Note<br>
domain	test.com	Block all domains/emails @test.com<br>
domain	test.ca	Block all domains/emails @test.ca<br>
domain	fake.com	Block all domains/emails @fake.com<br>
domain	example.com	Block all domains/emails @example.com<br>
domain	mailinator.com	Block all domains/emails @mailinator.com<br>
DHTMLX_Sample
