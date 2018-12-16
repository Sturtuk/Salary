# Tesseract OCR for PHP

#### Extract Salary real number from image format salary Slip


## Installation

Scraper requires [PHP](https://php.net) 7.1 or 7.2. This particular version supports Laravel 5.5 or 5.6 only.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):


Via Composer

``` bash
$ composer require sturt/salary
```

Once installed, if you are not using automatic package discovery, then you need to register the `sturt\salary\SalaryServiceProvider::class,` service provider in your `config/app.php`.

## Configuration

Scraper supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/sa.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.


## Configuration

Open sa.php from Config

```
return [
    // add more patterns if needed
    'patterns'      =>  [
        'net pay',
        'et pay',
        'net payable',
        'gross pay',
        'total pay',
        'net pay',
    ],

    // Image file stored path
    
    'FILE_PATH'     =>   base_path() ."/public/uploads/",
    
    //Change Route ULR
    
    'ROUTE_NAME'    =>  'upload_salary_slip',

    // Change Language - More language coming soon
    'OCR_LANG'      =>  'eng',

]; 
```

## Usage

```
get request to /upload_salary_slip/file.jpg located in public/uploads/

```


## Output

Success

```
{"status":200,"salary":"35,430.00"}
```

File not found
```
{"status":204,"file_not_found":"\/public\/file Not found"}
```



### ![][windows_icon] Note for Windows users

There are [many ways][tesseract_installation_on_windows] to install
[Tesseract OCR][] on your system, but if you just want something quick to
get up and running, I recommend installing the [Capture2Text][] package with
[Chocolatey][].

    choco install capture2text --version 3.9

:warning: Recent versions of [Capture2Text][] stopped shipping the `tesseract` binary.

<br/>

### ![][macos_icon] Note for macOS users

With [MacPorts][] you can install support for individual languages, like so:

    $ sudo port install tesseract-<langcode>

But that is not possible with [Homebrew][]. It comes only with **English** support
by default, so if you intend to use it for other language, the quickest solution
is to install them all:

    $ brew install tesseract --with-all-languages

<br/>


## License

tesseract-ocr-for-php is released under the [MIT License][].



[Tesseract OCR]: https://github.com/tesseract-ocr/tesseract
[Composer]: http://getcomposer.org/
[windows_icon]: https://thiagoalessio.ams3.digitaloceanspaces.com/windows-18.svg
[macos_icon]: https://thiagoalessio.ams3.digitaloceanspaces.com/apple-18.svg
[tesseract_installation_on_windows]: https://github.com/tesseract-ocr/tesseract/wiki#windows
[Capture2Text]: https://chocolatey.org/packages/capture2text
[Chocolatey]: https://chocolatey.org
[MacPorts]: https://www.macports.org
[Homebrew]: https://brew.sh
[MIT License]: https://github.com/Sturtuk/salary/blob/master/MIT-LICENSE
