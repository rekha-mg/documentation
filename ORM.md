## 4 sJuly 2020
####Eloquent ORM
* The EloquentORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.

* Before getting started, be sure to configure a database connection in config/database.php.

###Basic Usage
* To get started, create an Eloquent model. Models typically live in the app directory, but you are free to place them anywhere that can be auto-loaded according to your composer.json file. All Eloquent models extend Illuminate\Database\Eloquent\Model.

* Defining An Eloquent Model
* class User extends Model {}
* You may also generate Eloquent models using the make:model command:

        php artisan make:model User
        
        class User extends Model {
        
            protected $table = 'my_users';
        
        }
        
* Retrieving All Records

        $users = User::all();

* Retrieving A Record By Primary Key
                            
        $user = User::find(1);
        var_dump($user->name);
        