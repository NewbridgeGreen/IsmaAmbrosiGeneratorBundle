IsmaAmbrosiGeneratorBundle
==========================

This bundle extends the commands provided by [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) adding MongoDB document generator and CRUD generators for these MongoDB documents.

Installation
------------

###Add the bundle to your project.

**Using submodules**

Execute the following command:

```bash
$ git submodule add git://github.com/iambrosi/IsmaAmbrosiGeneratorBundle.git vendor/bundles/IsmaAmbrosi/Bundle/GeneratorBundle
```

**Using Symfony's vendors script**

Add the following lines to your deps file:

    [IsmaAmbrosiGeneratorBundle]
        git=git://github.com/iambrosi/IsmaAmbrosiGeneratorBundle.git
        target=/bundles/IsmaAmbrosi/Bundle/GeneratorBundle

And then run the vendors script:

```bash
$ php ./bin/vendors install
```

###Add the namespace to the autoloader

```php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    'IsmaAmbrosi' => __DIR__.'/../vendor/bundles',
    // ...
));
```