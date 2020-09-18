### Eloquent ORM
- The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.

- Before getting started, be sure to configure a database connection in config/database.php.
- Models typically live in the app directory, but you are free to place them anywhere that can be auto-loaded according to your composer.json file. All Eloquent models extend Illuminate\Database\Eloquent\Model.
### Defining An Eloquent Model
class User extends Model {}
- You may also generate Eloquent models using the make:model command:

- php artisan make:model User

Eloquent will assume the User model stores records in the users table. You may specify a custom table by defining a table property on your model:
        
        class User extends Model {
            protected $table = 'my_users';
            }
Eloquent will also assume that each table has a primary key column named id. You may define a primaryKey property to override this convention. Likewise, you may define a connection property to override the name of the database connection that should be used when utilizing the model.
## Insert, Update, Delete
- Insert - To create a new record in the database from a model, simply create a new model instance and call the save method.
        $user = new User;
        $user->name = 'John';
        $user->save();
- Saving A Model And Relationships
Sometimes you may wish to save not only a model, but also all of its relationships. To do so, you may use the push method:
    $user->push();
- Setting The Guarded Attributes On The Model
>    class User extends Model {
    protected $guarded = ['id', 'account_id'];
   }
- Updating A Retrieved Model
 To update a model, you may retrieve it, change an attribute, and use the save method:
>   $user = User::find(1);
   $user->email = 'john@foo.com';
   $user->save();
- Deleting An Existing Model
To delete a model, simply call the delete method on the instance:
> $user = User::find(1);
  $user->delete();

  
  
   