# Dump variable as JSON or dump and die the variable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pverhaert/dump.svg?style=flat-square)](https://packagist.org/packages/pverhaert/dump)
[![Total Downloads](https://img.shields.io/packagist/dt/pverhaert/dump.svg?style=flat-square)](https://packagist.org/packages/pverhaert/dump)

## Installation

You can install the package via composer:

```bash
composer require pverhaert/dump
```

## Usage

```php
// controller
public function index()
{
    $users = User::all();
    Dump::var($users);
    return view('allusers', compact('users'));
}
```

```php
// view
<h1>All users</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
    @endforeach
</ul>
```

- `http://testdomain.test/allusers` : shows the regular view with all users
- `http://testdomain.test/allusers?json` : shows the json representation of `$users`
- `http://testdomain.test/allusers?dd` : dump and die the `$users`

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email patrick.verhaert@thomasmore.be instead of using the issue
tracker.

## Credits

- [Patrick Verhaert](https://github.com/pverhaert)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
