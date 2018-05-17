<?php
/**
 * Created by PhpStorm.
 * User: isac
 * Date: 12/05/2018
 * Time: 8:21 PM
 */


require __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'    => 'mysql',
	'host'      => '127.0.0.1',
	'database'  => 'gsoc18',
	'username'  => 'root',
	'password'  => 'root',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => 'q371b_',
]);

// Set the event dispatcher used by Eloquent models... (optional)
//use Illuminate\Events\Dispatcher;
//use Illuminate\Container\Container;
//$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

class User extends Illuminate\Database\Eloquent\Model {
	protected $table = "#__users";
}

//$users = Capsule::table('users')->where('sendEmail', '=', 0)->get();
//$users = Capsule::table('users')->select('*')->get();
//$users = Capsule::table('users')->get();

$users = User::all();

//var_dump($users);
