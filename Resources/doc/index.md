# Getting Started With FrameworkExampleBundle


## Installation

Add FrameworkExampleBundle as a requirement in your composer.json:

```
{
    "require": {
        "sumocoders/framework-example-bundle": "dev-master"
    }
}
```

**Warning**
> Replace `dev-master` with a sane thing

Run `composer update`:

Enable the bundle in the kernel.

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    // ...
    $bundles = array(
        // ...
        new SumoCoders\FrameworkExampleBundle\SumoCodersFrameworkExampleBundle(),
    );
}
```

Don't forget to import the config and routing into your configuration and routing-files.

## Usage

There are several example you can use to build your application, but the most 
basic one is the Hello World-example. You can reach it at: /[locale]/example/hello/world.
You can change world into anything you want.

The rest of the examples can be found in the sidebar.
