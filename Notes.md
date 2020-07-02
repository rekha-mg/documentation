#### 2 July 2020
* Laravel Database
Laravel supports four database systems: MySQL , Postgres,SQLite,SQL Server
The database configuration for your application is located at config/database.php. 
By default, Laravel's sample environment configuration is ready to use with Laravel Homestead, which is a convenient virtual machine for doing Laravel development on your local machine.
* SQLite Configuration : After creating a new SQLite database using a command such as touch database/database.sqlite, you can easily configure your environment variables to point to this newly created database by using the database's absolute path:

* DB_CONNECTION=sqlite
* DB_DATABASE=/absolute/path/to/database.sqlite
* Read / Write Connections
Sometimes you may wish to use one database connection for SELECT statements, and another for INSERT, UPDATE, and DELETE statements. Laravel makes this a breeze, and the proper connections will always be used whether you are using raw queries, the query builder, or the Eloquent ORM.

To see how read / write connections should be configured, let's look at this example:
s

    'mysql' => [
        'read' => [
            'host' => '192.168.1.1',
        ],
        'write' => [
            'host' => '196.168.1.2'
        ],
        'driver'    => 'mysql',
        'database'  => 'database',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],

###Running Raw SQL Queries
The DB facade provides methods for each type of query: select, update, insert, delete, and statement.

Running A Select Query
To run a basic query, we can use the select method on the DB facade:


    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }


* The select method will always return an array of results.

##### Using Named Bindings
    $results = DB::select('select * from users where id = :id', ['id' => 1]);
    
* Running An Insert Statement   

        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
* Running An Update Statement 
            $affected = DB::update('update users set votes = 100 where name = ?', ['John']);
* Running A Delete Statement

                $deleted = DB::delete('delete from users');
Running A General Statement
Some database statements should not return any value. For these types of operations, you may use the statement method on the DB facade:

            DB::statement('drop table users');     
* Listening For Query Events
* If you would like to receive each SQL query executed by your application, you may use the listen method. This method is useful for logging queries or debugging. You may register your query listener in a service provider:
        <?php
        
        namespace App\Providers;
        
        use DB;
        use Illuminate\Support\ServiceProvider;
        
        class AppServiceProvider extends ServiceProvider
        {
            /**
             * Bootstrap any application services.
             *
             * @return void
             */
            public function boot()
            {
                DB::listen(function ($query) {
                    // $query->sql
                    // $query->bindings
                    // $query->time
                });
            }
        
            /**
             * Register the service provider.
             *
             * @return void
             */
            public function register()
            {
                //
            }
        }
#### Database: Migrations

* Migrations are typically paired with Laravel's schema builder to easily build your application's database schema.
* Generating Migrations
 
        php artisan make:migration create_users_table
        
* The --table and --create options may also be used to indicate the name of the table and whether the migration will be creating a new table. These options simply pre-fill the generated migration stub file with the specified table:

            php artisan make:migration add_votes_to_users_table --table=users

            php artisan make:migration create_users_table --create=users
### Migration Structure
* A migration class contains two methods: up and down. The up method is used to add new tables, columns, or indexes to your database, while the down method should simply reverse the operations performed by the up method.

        <?php
        
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateFlightsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('flights', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name');
                    $table->string('airline');
                    $table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::drop('flights');
            }
        }  
        
###  Running Migrations    
        php artisan migrate
### Database: Seeding
o generate a seeder, you may issue the make:seeder Artisan command. All seeders generated by the framework will be placed in the database/seeds directory:

        php artisan make:seeder UsersTableSeeder
* A seeder class only contains one method by default: run. This method is called when the db:seed Artisan command is executed. Within the run method, you may insert data into your database however you wish. 
* You may use the query builder to manually insert data or you may use Eloquent model factories.

        <?php
        
        use Illuminate\Database\Seeder;
        use Illuminate\Database\Eloquent\Model;
        
        class DatabaseSeeder extends Seeder
        {
            /**
             * Run the database seeds.
             *
             * @return void
             */
            public function run()
            {
                DB::table('users')->insert([
                    'name' => str_random(10),
                    'email' => str_random(10).'@gmail.com',
                    'password' => bcrypt('secret'),
                ]);
            }
        }
 
 