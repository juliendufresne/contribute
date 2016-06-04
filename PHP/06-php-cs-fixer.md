PHP CS Fixer
============

In order to share the same coding style without loosing time fixing everything, we use [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
and provide a configuration file.

[Installation](https://github.com/FriendsOfPHP/PHP-CS-Fixer#globally-manual)
------------

PHP-CS-Fixer is a library. You should install it globally on your system (not in composer.json).  
In case the link is broken, here is how to install it:

```bash
wget http://get.sensiolabs.org/php-cs-fixer.phar -O php-cs-fixer
chmod a+x php-cs-fixer
sudo mv php-cs-fixer /usr/local/bin/php-cs-fixer
```

Installation on new project
---------------------------

* Add the [.php_cs](Resources/.php_cs) file in your project root directory.
* Add an entry `/.php_cs.cache` in your `.gitignore` file.

Usage during development
------------------------

Inside your root project, simply run
```bash
php-cs-fixer fix
```

_Please, be sure to never push non php-cs-fixer valid code under the version control. Our CI server will automatically 
reject your work._

Pro-tips:  
It's always a good practice to check what the php-cs-fixer did.  
Personally, I prefer the git diff over the php-cs-fixer `--diff` option because php-cs-fixer is way more verbose and we
rarely need to have so much context.
Here is the procedure I suggest you to use:

```bash
# First, add all the files you modified to git
git add .
# Second, run php-cs-fixer
php-cs-fixer fix
# Your working tree will probably have some changes. Review them
git diff
```


Usage in continuous integration server
--------------------------------------

1. First, be sure php-cs-fixer is installed during the build.  
2. you can check that the following command does not return a non-zero code:
```bash
php-cs-fixer fix --dry-run --verbose --diff
```
