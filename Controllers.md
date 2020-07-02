####Controllers
* Controllers can group related HTTP request handling logic into a class. Controllers are stored in the app/Http/Controllers directory.

## Basic Controllers
* All Laravel controllers should extend the base controller class included with the default Laravel installation:

        <?php
        
        namespace App\Http\Controllers;
        
        use App\User;
        use App\Http\Controllers\Controller;
        
        class UserController extends Controller
        {
            /**
             * Show the profile for the given user.
             *
             * @param  int  $id
             * @return Response
             */
            public function showProfile($id)
            {
                return view('user.profile', ['user' => User::findOrFail($id)]);
            }
        }
        
 * We can route to the controller action like so:
        
        Route::get('user/{id}', 'UserController@showProfile');
##Controllers & Namespaces
* It is very important to note that we did not need to specify the full controller namespace when defining the controller route.
* We only defined the portion of the class name that comes after the App\Http\Controllers namespace "root". By default, the RouteServiceProvider will load the routes.php file within a route group containing the root controller namespace.
                
        Route::get('foo', 'Photos\AdminController@method');
## Naming Controller Routes
 Like Closure routes, you may specify names on controller routes:
 
        Route::get('foo', ['uses' => 'FooController@method', 'as' => 'name']);
 You may also use the route helper to generate a URL to a named controller route:
 
        $url = route('name');
        
### RESTful Resource Controllers
* Resource controllers make it painless to build RESTful controllers around resources. For example, you may wish to create a controller that handles HTTP requests regarding "photos" stored by your application. Using the make:controller Artisan command, we can quickly create such a controller:
        
        php artisan make:controller PhotoController --resource
        
