<p style="text-align:center;width:100%;"><img src="https://github.com/tauseedzaman/laravel-customer-support/assets/64689921/c72bd476-5ae1-4423-8b9e-4d47f34c80a3" alt="Chatify Laravel Package"></p>


<p align="center">
<a href="https://github.com/laravel/telescope/actions"><img src="https://poser.pugx.org/tauseedzaman/laravel-customer-support/v/stable?style=flat-square" alt="Build Status"></a>
<a href="https://packagist.org/packages/tauseedzaman/laravel-customer-support"><img src="https://poser.pugx.org/tauseedzaman/laravel-customer-support/downloads?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/tauseedzaman/laravel-customer-support"><img src="https://poser.pugx.org/tauseedzaman/laravel-customer-support/license?style=flat-square" alt="License"></a>
</p>

## Chatify-Based Laravel Customer Support Package
This is the customer service version for Chatify package, we have customized the Chatify so this can be used as a customer service live chat package...

this will allow webmasters to chat live with their customers,


## Installation
```
composer require tauseedzaman/laravel-customer-support
```

install

```
php artisan chatify:install
```

Configure the Pusher 


add this header in your layouts file

```
<meta name="url" content="{{ url('') . '/' . config('chatify.routes.prefix') }}" data-user="{{ auth()->id() }}">
```
put this in the header of your layouts file
```
{!! view('Chatify::layouts.ClientHeader') !!}
```

put this somewhere in your layouts file. i.e app.blade.php
```
{!! view('Chatify::layouts.ClientChatBox') !!}
```

put this in the footer/bottom section of your layouts file
```
{!! view('Chatify::layouts.ClientFooter') !!}
```
You are good to go

 if you get this error in your browser console
![image](https://github.com/tauseedzaman/laravel-customer-support/assets/64689921/c6f4d26c-7248-4679-9cb5-985d9f501471)


then change strict to false in app/database.php
```
'strict' => false
```
## Demo

- Demo app - [Click Here](https://laravel-customer-support-demo.tauseedzaman.com).

## Chatify Official Documentation

As This Package is Derived from Chatify, Here Are The Chatify official [documentation](https://chatify.munafio.com)

## License

Laravel-Customer-Support is licensed under the [MIT license](https://choosealicense.com/licenses/mit/)
