# BulkDeleteOperation

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides Bulk Delete Operation functionality for projects that use the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. 

If you earn money using Laravel Backpack, please buy the Pro version to support them..


## Installation

Via Composer

``` bash
composer require winnie/bulk-delete-operation
```

## Usage

To use the field this package provides, inside your custom CrudController do:

```php
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

// Bulk Delete Operation
use \Winnie\BulkDeleteOperation\Http\Controllers\Admin\Operations\BulkDeleteOperation;
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/winnie/bulk-delete-operation/releases).

## Testing

``` bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email winnie131212592@gmail.com instead of using the issue tracker.

## Credits

- [Winnie Damayo][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information. 

However, please note that you do need Backpack installed, so you need to also abide by its [YUMMY License](https://github.com/Laravel-Backpack/CRUD/blob/master/LICENSE.md). That means in production you'll need a Backpack license code. You can get a free one for non-commercial use (or a paid one for commercial use) on [backpackforlaravel.com](https://backpackforlaravel.com).


[ico-version]: https://img.shields.io/packagist/v/winnie/bulk-delete-operation.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/winnie/bulk-delete-operation.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/winnie/bulk-delete-operation
[link-downloads]: https://packagist.org/packages/winnie/bulk-delete-operation
[link-author]: https://github.com/winnie
[link-contributors]: ../../contributors
