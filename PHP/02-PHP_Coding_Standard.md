Coding Standard
===============

To ensure a consistent code base, you should make sure the code follows [Symfony Coding Standards].
Run [php-cs-fixer] to automatically "fix" files.  
You don't need to remember **all** the rules. Most of them are handled by [php-cs-fixer].

Please read at least:
- [Best Practices] section.
- [Risky] section.

[Best Practices]: #best-practices
[php-cs-fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
[RFC 2119]: http://www.ietf.org/rfc/rfc2119.txt
[Risky]: #risky
[Symfony Coding Standards]: https://symfony.com/doc/current/contributing/code/standards.html

Additions to Symfony Coding Standards
-------------------------------------
The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD",
"SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this document are to be
interpreted as described in [RFC 2119].

### Best Practices

If you have to remember two rules, it's these ones:

1. Class SHOULD use the `final` keyword unless it is really extended.  
 It is better to remove the final keyword when you need to than allow every classes to be extended.  
 When you want to refactor a class, if the final keyword is present, you are safe. Otherwise you need to check if there
 is a class extending it and check that this class will not be impacted by your refactorization. This is painful.
2. Properties and methods visibility SHOULD be set to `private` unless you really need a more open visibility.  
 Again, when you refactor a class, you need to know where the property or method is used.  
 It is not that obvious to track every usage. For instance, it's almost impossible to track property access when you
 have code like:
```php
$baz = new Baz();
$foo = 'bar';
echo $baz->$foo;
```

### Risky

1. Comparison MUST be strict (`===` and `!==`)
2. Functions MUST be used with `$strict` param
3. Class names MUST match the file name.
4. `intval`, `floatval`, `doubleval`, `strval`, `boolval` MUST be replaced by type casting operator. 
```php
$foo = intval($bar);
$foo = floatval($bar);
$foo = doubleval($bar);
$foo = strval($bar);
$foo = boolval($bar);
// replace to
$foo = (int) $bar;
$foo = (float) $bar;
$foo = (double) $bar;
$foo = (string) $bar;
$foo = (bool) $bar;
```

### Conflict with Symfony Coding Standards

1. Consecutive double arrow MUST be aligned.
2. Consecutive assignment MUST be aligned.

```php
$longerVar = 'value';
$foo       = [
    'foo'      => 'bar',
    'long_key' => 'value',
];
```

### Other coding Standards
```php
# Rule 1
// WRONG
<?=$foo?>
// GOOD
<?php
echo $foo;
?>
<?php
# Rule 2
use Bar;
use Baz;
# Rule 3 - elements ordering
class Foo
{
    use BarTrait;
    use BazTrait;
    const C1 = 1;
    const C2 = 2;
    public static $pubStatProp1;
    public static $pubStatProp2;
    protected static $protStatProp;
    private static $privStatProp;
    public $pubProp1;
    var $pubProp2;
    public $pubProp3;
    protected $protProp;
    private $privProp;
    protected function __construct() {}
    public function __destruct() {}
    public function __toString() {}
    # Rule 4
    /**
     * Hello there!
     *
     * Long description
     * goes here.
     *
     * @internal
     *
     *
     * @custom Test!
     *         asldnaksdkjasdasd
     *
     *
     *
     * @param string $foo
     * @param bool   $bar Bar
     * @throws Exception|RuntimeException dfsdf
     *         jkaskdnaksdnkasndansdnansdajsdnkasd
     * @return bool Return false on failure.
     * @return int  Return the number of changes.
     */
    public static function pubStatFunc1($foo, $bar)
    {
        # Rule 5
// WRONG
//        if ($foo === $bar) {
//           return false;
//        } else {
//           return 1;
//        }
// GOOD
        if ($foo === $bar) {
           return false;
        }
        //
        return 1;
    }
    static function pubStatFunc2($foo, $bar)
    {
        # Rule 6
// WRONG
//      unset($foo);
//      unset($bar);
// GOOD
        unset($foo, $bar);
    }
    public static function pubStatFunc3()
    {
        # Rule 7
// WRONG
//      $foo = array('bar');
// GOOD
        $foo = ['bar'];
    }
    protected static function protStatFunc() {}
    private static function privStatFunc() {}
    public function pubFunc1() {}
    function pubFunc2() {}
    public function pubFunc3() {}
    protected function protFunc() {}
    private function privFunc() {}
}
```

1. short echo tag `<?=` MUST NOT be use.
2. imports MUST be ordered alphabetically.
3. elements in class, trait and interface SHOULD be ordered.
4. phpdoc MUST be ordered.
5. `else` MUST be omitted when unnecessary.
6. Consecutive `unset` MUST be combined.
7. arrays MUST use short syntax
