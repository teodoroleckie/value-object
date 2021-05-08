# Library to implement value-object / nullable-value-object in PHP

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/teodoroleckie/value-object/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/value-object/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/teodoroleckie/value-object/badges/build.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/value-object/build-status/main)
[![Total Downloads](https://img.shields.io/packagist/dt/tleckie/value-object.svg?style=flat-square)](https://packagist.org/packages/tleckie/value-object)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/teodoroleckie/value-object/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)


### Create your own value-object type:
You should only extend from the ValueObject class
```php
<?php

/**
 * Class Age
 */
class Age extends ValueObject
{

}
```

### Compare value-objects:
```php
<?php

/**
 * Class Age
 */
class Age extends ValueObject
{

}

$john = new Age(34);
$mario = new Age(34);
$raquel = new Age("34");


$john->equals($mario);  // true

$john->equals($raquel); // false

$john->equals(new FirstName('Mario')); // false

$raquel->value();       // "34"
```


### Support for polymorphic behavior:
```php
public function handle(ValueObjectInterface $object){
    // ...
}

```

### Force primitive type:
Override the constructor and value() method to indicate the return primitive type.
```php
<?php

/**
 * Class Age
 */
class Age extends ValueObject
{
    /**
    * Age constructor.
    * @param int $value
    */
    public function __construct(int $value)
    {
        parent::__construct($value);
    }
    
    /**
    * @return int
    */
    public function value(): int
    {
        return parent::value();
    }
}

$raquel = new Age("34");
$mario = new Age(34);

$raquel->value();        // int 34
$mario->equals($raquel); // true
(string)$mario;          // string "34"

```

### Nullable value-object
If your object can contain null value you can extend of NullableValueObject class

```php
<?php

/**
 * Class Age
 */
class Age extends NullableValueObject
{

}

// That's all! I hope this helps you

```

