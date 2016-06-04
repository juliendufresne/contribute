PhpStorm
========

Code Style
----------

- Download file [CodeStyle.xml]
- Open PhpStorm
- Select File > Settings > Editor > Code Style
- Click Manage...
- Click Import...
- Select "Intellij IDEA code style XML"
- Select the file you've just download

Inspections
-----------

- Download file [inspections.xml]
- Open PhpStorm
- Select File > Settings > Editor > Inspections
- Click Manage...
- Click Import...
- Select the file you've just download

Plugins
-------

Sadly, we can't share them directly.  
I put here what I use but you may not require all of them.  
Plugins with a `*` are not bundled.  
Plugins with unchecked checkbox are bundle and desactivated.

- [x] * .ignore
- [ ] Apache config (.htaccess) support
- [ ] ASP
- [x] * BashSupport
- [x] Behat Support
- [ ] Blade Support
- [x] * Codeivate
- [ ] CoffeeScript
- [x] Command Line Tool Support
- [ ] Copyright
- [x] CSS Support
- [ ] CVS Integration
- [x] Database Tools and SQL
- [ ] Drupal Support
- [x] File Watchers
- [x] Gherkin
- [x] Git Integration
- [x] GitHub
- [ ] GNU GetText files support (*.po)
- [ ] Google App Engine Support for PHP
- [ ] HAML
- [ ] hg4idea
- [ ] Ini4Idea
- [x] HMTL Tools
- [x] IntelliLang
- [x] JavaScript Debugger
- [x] JavaScript Intention Power Pack
- [x] JavaScript Support
- [ ] Joomla! Support
- [ ] LESS Support
- [x] * Lines Sorter
- [x] * Markdown Navigator
- [x] * nginx Support
- [ ] Perfoce Integration
- [x] Performance Testing
- [x] Phing Support
- [x] PHP
- [x] * **PHP Annotations**
- [x] *PHP composer.json support
- [x] * **PHP Inspections (EA Extended)**
- [x] PHP Remote Interpreter
- [x] * PhpMetrics
- [x] * PHPUnit code coverage
- [ ] QuirksMode
- [ ] Refactor-X
- [x] Remote Hosts Access
- [x] REST Client
- [x] ReStructuredText Support
- [x] SASS support
- [x] Settings Repository
- [x] SSH Remote Run
- [ ] Subversion Integration
- [x] * **Symfony Plugin** (don't forget to enable it in each projects !!)
- [x] Task Management
- [x] Terminal
- [ ] TextMate bundles support
- [x] Time Tracking
- [x] Twig Support
- [ ] UML Support
- [x] Vagrant
- [x] W3C Validators
- [ ] Wordpress Support
- [ ] XPathView + XSLT Support
- [ ] XSLT-Debugger
- [x] YAML
- [x] * YAML/Ansible support


File and Code Templates
-----------------------

Sadly, we can't share it with a file.

### Files > PHP Class

```php
<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

final class ${NAME}
{

}

```

### Files > PHP Interface

```php
<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

interface ${NAME}
{

}

```

### Files > PHP Trait

```php
<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

trait ${NAME}
{

}

```

### Files > PHPUnit Test

```php
<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};

use PHPUnit_Framework_TestCase;
#end

final class ${NAME} extends PHPUnit_Framework_TestCase
{

}

```

### Includes > PHP Class Doc Comment

```php
/**
 * ${NAME} ${CARET}
 */
```

### Includes > PHP Field Doc Comment

```php
/** ${TYPE_TAG} ${TYPE_HINT} */
```


### Includes > PHP File Header

Empty if non PHP7, otherwise:

```php
declare(strict_types=1);
```

### Includes > PHP Function Doc Comment

```php
/**
${PARAM_DOC}
${THROWS_DOC}
#if (${TYPE_HINT} != "void") * @return ${TYPE_HINT}
#end
*/
```

### Includes > PHP Interface Doc Comment

```php
/**
 * ${NAME} ${CARET}
 */
```

### Code > PHP Constructor

```php
/**
${PARAM_DOC}
*/
public function __construct(${PARAM_LIST})
{
    ${BODY}
}
```

### Code > PHP Fluent Setter Method

```php
/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return ${CLASS_NAME}
 */
public function set${NAME}($${PARAM_NAME})
{
    $this->${FIELD_NAME} = $${PARAM_NAME};

    return $this;
}
```

### Code > PHP Getter Method

```php
/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${GET_OR_IS}${NAME}()
{
#if (${STATIC} == "static")
    return static::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
```


### Code > PHP Implemented Method Body

Leave empty.


### Code > PHP Overridden Method Body

```php
${RETURN} parent::${NAME}(${PARAM_LIST});
```


### Code > PHP Setter Method

```php
/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    static::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}
```


[CodeStyle.xml]: /PhpStorm/CodeStyle.xml
[inspections.xml]: /PhpStorm/inspections.xml
