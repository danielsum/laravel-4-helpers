<?php

/**
 * @method static void before(Closure $callback) Register a "before" application filter.
 * @method static void after(Closure $callback) Register an "after" application filter.
 * @method static void finished(Closure $callback) Register a "finish" application filter.
 * @method static void close(Closure $callback) Register a "close" application filter.
 * @method static void setLocale(string $locale) Set the current application locale.
 * @method static void abort($code, $message = '', array $headers = array()) Throw an HttpException with the given data.
 */
class App extends Illuminate\Support\Facades\App {}

/**
 * @method static void add($command)
 */
class Artisan extends Illuminate\Support\Facades\Artisan{}

/**
 * @method static boolean attempt(array $credentials, boolean $remember = false)
 * @method static void logout()
 * @method static User user()
 * @method static bool check() Determine if the current user is authenticated.
 * @method static \Illuminate\Auth\UserInterface loginUsingId(int $id, $remember = false) Log the given user ID into the application.
 */
class Auth extends Illuminate\Support\Facades\Auth{}
class Blade extends Illuminate\Support\Facades\Blade{}
class Cache extends Illuminate\Support\Facades\Cache{}
class ClassLoader extends Illuminate\Support\ClassLoader{}

/**
 * @method static mixed get(string $key)
 */
class Config extends Illuminate\Support\Facades\Config{}
class Controller extends Illuminate\Routing\Controllers\Controller{}

/**
 * @method static bool has(string $key) Determine if a cookie exists and is not null.
 * @method static mixed get(string $key,mixed $default = null) Get the value of the given cookie.
 * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes) Create a new cookie instance.
 * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value) Create a cookie that lasts "forever" (five years)
 * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name) Expire the given cookie.
 */
class Cookie extends Illuminate\Support\Facades\Cookie{}

/**
 * @method static string encrypt($value);
 * @method static string decrypt($value)
 */
class Crypt extends Illuminate\Support\Facades\Crypt{}

/**
 * @method static delete($sql, $params = array())
 * @method static insert($sql, $params = array())
 * @method static select($sql, $params = array())
 * @method static update($sql, $params = array())
 * @method static statement($sql);
 */
class DB extends Illuminate\Support\Facades\DB{}

/**
 * @method static EloquentHelper where($column, $operator = null, $value = null)
 * @method static EloquentHelper whereNotNull($column)
 * @method static EloquentHelper whereNull($column)
 */
class Eloquent extends Illuminate\Database\Eloquent\Model{}

/**
 * Fake Class for \Illuminate\Database\Query\Builder
 * @method EloquentHelper where($column, $operator = null, $value = null)
 * @method EloquentHelper whereNull($column, $boolean = 'and', $not = false)
 * @method static EloquentHelper whereNotNull($column)
 * @method EloquentHelper take(int $limit) Set the "limit" value of the query.
 * @method int count($column = '*') Retrieve the "count" result of the query.
 * @method \Illuminate\Database\Eloquent\Collection get($columns = array('*')) Execute the query as a "select" statement.
 * @method Eloquent first()
 * @method EloquentHelper orderBy($column, $type)
 */
class EloquentHelper {}
class Event extends Illuminate\Support\Facades\Event{}
class EventSubscriber extends Illuminate\Events\Subscriber{}
class File extends Illuminate\Support\Facades\File{}

/**
 * @method static string make(string $secret)
 * @method static boolean check(string $secret, string $hashedSecret)
 */
class Hash extends Illuminate\Support\Facades\Hash{}

/**
 * @method static mixed old(string $key)
 * @method static bool has(string $key)
 */
class Input extends Illuminate\Support\Facades\Input{}

/**
 * @method static string get(string $key, array $data = array())
 * @method static bool has(string $key)
 * @method static string getLocale()
 */
class Lang extends Illuminate\Support\Facades\Lang{}
class Log extends Illuminate\Support\Facades\Log{}

/**
 * @method static void send($view, array $data, $callback) Send a new message using a view.
 */
class Mail extends Illuminate\Support\Facades\Mail{}
class Paginator extends Illuminate\Support\Facades\Paginator{}
class Password extends Illuminate\Support\Facades\Password{}
class Queue extends Illuminate\Support\Facades\Queue{}

/**
 * @method static \Illuminate\Http\RedirectResponse to(string $path,int $status = 302,array $headers = array(),boolean $secure = false)
 * @method static \Illuminate\Http\RedirectResponse back(int $status = 302,array $headers = array())
 */
class Redirect extends Illuminate\Support\Facades\Redirect{}
class Redis extends Illuminate\Support\Facades\Redis{}

/**
 * Class Request
 * @method static string url()
 * @method static string path()
 * @method static bool secure()
 * @method static array query()
 * @method static string getMethod()
 * @methode static string getRequestUri()
 */
class Request extends Illuminate\Support\Facades\Request{}
class Response extends Illuminate\Support\Facades\Response{}

/**
 * @method static Illuminate\Routing\Route get(string $route, Closure $function)
 * @method static Illuminate\Routing\Route post(string $route, Closure $function)
 * @method static void controllers(array $controllers) Register an array of controllers with wildcard routing.
 * @method static void controller(string $uri, string  $controller) Route a controller to a URI with wildcard routing.
 */
class Route extends Illuminate\Support\Facades\Route{}

/**
 * @method static void create(string $tableName, Closure $function)
 * @method static void table (string $tableName, Closure $function)
 * @method static void drop(string $tableName)
 */
class Schema extends Illuminate\Support\Facades\Schema{}

/**
 * @method static void put(string $name, mixed $value)
 * @method static void flash(string $name, mixed $value)
 * @method static mixed get(string $name, mixed $default = null) Returns an attribute.
 * @method static void forget(string $name)
 * @method static bool has(string $name)
 */
class Session extends Illuminate\Support\Facades\Session{}
class Str extends Illuminate\Support\Str{}
class URL extends Illuminate\Support\Facades\URL{}
class Validator extends Illuminate\Support\Facades\Validator{}

/**
 * @method static Illuminate\View\View make(string $view, array $data = array())
 * @method static void share(string $tpl_key, mixed $value)
 */
class View extends Illuminate\Support\Facades\View{}
