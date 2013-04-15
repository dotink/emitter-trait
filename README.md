Emitter (Trait)
============

Simple consistent hooks for your PHP classes.

## Usage

```php
class Foo
{
	use Dotink\Traits\Emitter;
}
```

Once you have a class using the trait, you can do the following:

```php
$foo = new Foo();
$foo->on('signal', function() {
	echo 'Hello World';
});

$foo->emit('signal');
```
