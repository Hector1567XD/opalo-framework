# Opalo Framework

Opalo Framework, is a wordpress framework for the elaboration of personalized themes, that nobody asked for, made by beginners and for beginners who seek to violate the KISS principle but learn a lot in the process!

## Installation

This still doesn't work HAHAHA, but I'm trying to make it a composer package to be able to do:

```bash
composer require opalo-framework
```

At the moment the only way to use it is to download the repository and start working from there 👍

## Usage

It is simple, in fact it is the only simple thing... in the functions.php of your template place

```php
require_once 'vendor/autoload.php'; //Yeah, composer

$app = new App\App();
$app->initialize();
```

## Why is it called Opalo (Opal)?
Because "Opal" already exists, is it a framework for clinical applications or something like that (?

And also because ... All I wanna be ... is someone who gets to see ... a giant woman ... 🎵
## Contributing
Of course you are welcome to be part of our disaster! Pull requests are welcome.

Of course, we look forward to hard but constructive feedback on how the framework works to help us improve and develop better pieces of code in the future :)

Current contributors:
- Feredev
- Moncki21

## License
[MIT](https://choosealicense.com/licenses/mit/)
Obviously, no one would pay for this in its current state
