# CommandHandler
Basic Command Handler In PhP

# How To Use 
 
 * To Initialize CommandHandler
 ```php
 CommandHandler::init();
 ```
* Example Of Commands
```php
"example" => new ExampleCommand()
```
* When Initializing Use
```php
use YourName\Abc;
```

# Todo 

* Change Namespace When Using

# Note

* Must Initizalize Handler On Enable
```php
public function onEnable(): void
{
  CommandHandler::init();
}
