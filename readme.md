# [Laravel](https://laravel3.veliovgroup.com/docs) - A PHP Framework For Web Artisans

## L3 is no longer maintained, so here is a version which works with the latest PHP and security patches

- based on a clone of https://github.com/laravel/laravel/tree/3.0 with only the changes needed. No "extra" stuff.
- Tested with php 7.4
- mcrypt dependency removed for php >=7.1
- replaced "yield" function because that became a keyword
- get_magic_quotes_gpc() dependency removed for php >=7.4
- constructors named as class-name instead of __construct altered
- included basic composer.json to get phpunit up and running
- made testing possible in application/tests

[OLD Documentation ](https://laravel3.veliovgroup.com/docs)

After installation you can see the docs using the /docs route

## --------------------------------------------------------

Laravel is a clean and classy framework for PHP web development. Freeing you
from spaghetti code, Laravel helps you create wonderful applications using
simple, expressive syntax. Development should be a creative experience that you
enjoy, not something that is painful. Enjoy the fresh air.

## Feature Overview

- Simple routing using Closures or controllers.
- Views and templating.
- Driver based session and cache handling.
- Database abstraction with query builder.
- Authentication.
- Migrations.
- PHPUnit Integration.
- A lot more.

## A Few Examples

### Hello World:

```php
<?php

Route::get('/', function()
{
	return "Hello World!";
});
```

### Passing Data To Views:

```php
<?php

Route::get('user/(:num)', function($id)
{
	$user = DB::table('users')->find($id);

	return View::make('profile')->with('user', $user);
});
```

### Redirecting & Flashing Data To The Session:

```php
<?php

return Redirect::to('profile')->with('message', 'Welcome Back!');
```

## Contributing to Laravel

Contributions are encouraged and welcome; however, please review the Developer
Certificate of Origin in the "license.txt" file included in the repository. All
commits must be signed off using the `-s` switch.

```bash
git commit -s -m "this commit will be signed off automatically!"
```

## License

Laravel is open-sourced software licensed under the MIT License.
