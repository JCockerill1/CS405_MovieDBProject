CS405 Spring 2017 Movie Project with Yii 2 Basic Project Template
=================================================================

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects. The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

INTRODUCTION
------------

This web application was developed as an assignment for CS405 taught 
by Dr. Licong Cui. The backend of the application is a MySQL database
with the following entities (tablenames):

1. User
2. Movie
3. Genre
4. Tag
5. Crew
6. UserReview
7. MovieGenre
8. MovieTag
9. MovieCrew

The frontend of the application was developed to include the following 
functionality: 

1. Allows users to register. 
2. Allows the assignment of a registered user as a manager. 
3. Allows a manager to add, update, and delete movies; 
   categorize movies into one or more genres; 
   and add, update, and delete movie crew. 
4. Allows a registered user to find movies of interest using faceted 
   search (i.e., search by title, genre, tag, and crew). 
5. Allows a registered user to tag movies. 
6. Allows a registered user to rate and comment movies. 


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


REQUIREMENTS - for project (NOT Yii2)
-------------------------------------

This application was built using the Yii2 Framework for PHP with 
PHP 7.1.3 on a Windows 10 machine. Any php IDE may be used to 
further develop the project. PHPStorm was used on initial development 
and is recommended.


INSTALLATION - for project (NOT Yii2)
-------------------------------------

### PHP 7.1 - http://windows.php.net/download/ (for Windows)

Download the latest PHP 7 zip for your machine from the site above. 
x64 for 64-bit operating system (x86 for 32-bit), Non Thread Safe. 
Once downloaded, extract the contents of the zip to a location of your 
choosing (e.g. C:\PHP\). Open the folder and find the file 
php.ini-development. Open this file and uncomment the following lines:

    extension=php_openssl.dll             <- needed for encryption
    extension=php_pdo_mysql.dll           <- needed for mysql database
    extension=php_gd2.dll                 <- needed for captcha images

Save and close the file and rename it php.ini.

### Movie DB Project with Yii2

Clone or download this project as an archived (.zip) file. Once complete, 
extract the file at a location of your choosing. Afterwards, extract 
the zipped vendor file in the same main project folder you previously 
chose and remove the zipped file.


DEVELOPMENT
-----------

Once you have the necessary files installed, you may proceed to development. 
Open the php IDE of your choice and select the main project folder to 
open the project. The project is broken down into a Model-View-Controller 
(MVC) structure (see DIRECTORY STRUCTURE above). There are separate folders 
for including specific application/database configuration parameters, testing, 
and other scripts. 


CONFIGURATION
-------------

### Database

Before running this file, navigate to and edit the file `config/db.php` 
with real parameter data for your database. The database should be 
of the same structure as outlined in the INTRODUCTION above. The db.php 
file will look similar to the following:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


RUNNING APPLICATION
-------------------
This is a web application and may be ran for manual testing on your local 
machine. As PHP 7 includes it's own built in web server, it's extremely 
simple to run the application. Simply open the command line, navigate into 
your main project folder, and run the following command - 
  php yii serve
Then open your web browser of choice and navigate to: localhost:8080
