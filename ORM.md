## 4 July 2020
#### Eloquent ORM
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
        
#### Retrieving A Model By Primary Key Or Throw An Exception
Sometimes you may wish to throw an exception if a model is not found. To do this, you may use the firstOrFail method:

    $model = User::findOrFail(1);

    $model = User::where('votes', '>', 100)->firstOrFail();  
    
### Querying Using Eloquent Models
    $users = User::where('votes', '>', 100)->take(10)->get();
    
    foreach ($users as $user)
    {
        var_dump($user->name);
    }  
    
#### Eloquent Aggregates
    
  * Of course, you may also use the query builder aggregate functions.
    
        $count = User::where('votes', '>', 100)->count();
  * If you are unable to generate the query you need via the fluent interface, feel free to use whereRaw:
    
        $users = User::whereRaw('age > ? and votes = 100', [25])->get(); 
        
#### specifying The Query Connection
 You may also specify which database connection should be used when running an Eloquent query. Simply use the on method:
 
        $user = User::on('connection-name')->find(1);
 If you are using read / write connections, you may force the query to use the "write" connection with the following method:
 
        $user = User::onWriteConnection()->find(1);  
        
### Defining Fillable Attributes On A Model
The fillable property specifies which attributes should be mass-assignable. This can be set at the class or instance level.

    class User extends Model {
    
        protected $fillable = ['first_name', 'last_name', 'email'];
    
    }
    s