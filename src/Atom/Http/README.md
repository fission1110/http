*Basic usage*
==============
First step is to call the Request or Response singleton objects to gain access into the objects contained withing those namespaces.

For example
```php
$foo = new \Atom\Http\Request::Post()->get($bar);
```
$foo now contains the value of the post key $bar;
===========
```php
$baz = new \Atom\Http\Response::Header();
```
$baz no contains a Header object. Let's set some new headers.
```php
$baz->set('Content-Type', 'application/pdf');
```
Awesome! Now lets finalize it, and send the headers.
```php
$baz->submit();
```
