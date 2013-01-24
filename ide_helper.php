<?php

/**
 * @method static void before(Closure $callback) Register a "before" application filter.
 * @method static void after(Closure $callback) Register an "after" application filter.
 * @method static void finished(Closure $callback) Register a "finish" application filter.
 * @method static void close(Closure $callback) Register a "close" application filter.
 * @method static void setLocale(string $locale) Set the current application locale.
 */
class App extends Illuminate\Support\Facades\App {}
class Artisan extends Illuminate\Support\Facades\Artisan{}

/**
 * @method static boolean attempt(array $credentials, boolean $remember = false)
 * @method static void logout()
 * @method static \User user();
 */
class Auth extends Illuminate\Support\Facades\Auth{}
class Blade extends Illuminate\Support\Facades\Blade{}
class Cache extends Illuminate\Support\Facades\Cache{}
class ClassLoader extends Illuminate\Foundation\ClassLoader{}

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
class Crypt extends Illuminate\Support\Facades\Crypt{}
class DB extends Illuminate\Support\Facades\DB{}

/**
 * @method static \Illuminate\Database\Eloquent\Builder where($column, $operator = null, $value = null)
 */
class Eloquent extends Illuminate\Database\Eloquent\Model{}
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
 */
class Input extends Illuminate\Support\Facades\Input{}

/**
 * @method static string get(string $key, array $data = array())
 * @method static bool has(string $key)
 * @method static string getLocale()
 */
class Lang extends Illuminate\Support\Facades\Lang{}
class Log extends Illuminate\Support\Facades\Log{}
class Mail extends Illuminate\Support\Facades\Mail{}
class Paginator extends Illuminate\Support\Facades\Paginator{}

/**
 * @method static \Illuminate\Http\RedirectResponse to(string $path,int $status = 302,array $headers = array(),boolean $secure = false)
 * @method static \Illuminate\Http\RedirectResponse back(int $status = 302,array $headers = array())
 */
class Redirect extends Illuminate\Support\Facades\Redirect{}
class Redis extends Illuminate\Support\Facades\Redis{}
class Request extends Illuminate\Support\Facades\Request{}
class Response extends Illuminate\Support\Facades\Response{}

/**
 * @method static Illuminate\Routing\Route get(string $route, Closure $function)
 */
class Route extends Illuminate\Support\Facades\Route{}

/**
 * @method static void create(string $tableName, Closure $function)
 * @method static void drop(string $tableName)
 */
class Schema extends Illuminate\Support\Facades\Schema{}
class Session extends Illuminate\Support\Facades\Session{}
class URL extends Illuminate\Support\Facades\URL{}
class Validator extends Illuminate\Support\Facades\Validator{}

/**
 * @method static Illuminate\View\View make(string $view, array $data = array())
 * @method static void share(string $tpl_key, mixed $value)
 */
class View extends Illuminate\Support\Facades\View{}

/**
 * @class Fluent
 * @method asd();
 */
