Grace Manager & CMS
=============

### Laravel 5.1 Content Managment System

## not stable!

<img src="https://github.com/gracecompany/develop/blob/master/public/temp/ProductManager.png" width="900" />

## Features

* Laravel 5.1
  * Bootstrap
  * Authentication Sentinel
  * Bootstrap Code Prettify
  * Full Tranlation Implementation
  * File Manager
  * Dropzone.js
  * Backend
  * Manage menu (nested)
  * Manage article (category, tag)
  * Manage tag
  * Manage article category
  * Manage page
  * Manage news
  * Careers
  * FAQs
    * interactive forms
  * Chat Comming Soon
  * Users
    * Roles
    * permissions
    * account management
  * Warehouse
    * manager
    * storage
    * products
    * identifiers
    * quantity
  * eCommerce shop coupons best_sellers etc
    * HR manager
    * Product Manager
    * Combo Product Manager
      * dealer manager
  * locations
  * Google analytics
  * schema Implementation
    * microdata
    * json-ltd
  * Standard SEO Implementation
  * Google tag manager Implementation
  * Manage photo gallery
  * SummerTime Editor for post creation and editing (filemanager)
  * Form post manage
  * Site settings
  * Log view page
* Frontend
  * Blog
  * Page
  * News
  * Contact Form
  * Tutorials
  * FAQs
  * Community
  * Social Networks
  * Shop
  * Chat Comming Soon
  * Photo Gallery (Lazy load image, responsive fancybox)
  * Breadcrumbs



## Screenshots

<img src="https://github.com/gracecompany/develop/blob/master/public/temp/ManagerLogin.png" width="900" />
<img src="https://github.com/gracecompany/develop/blob/master/public/temp/GraceAdmin.png" width="900" />
<img src="https://github.com/gracecompany/develop/blob/master/public/temp/BlogManager.png" width="900" />
<img src="https://github.com/gracecompany/develop/blob/master/public/temp/ProductManager.png" width="900" />
<img src="https://github.com/gracecompany/develop/blob/master/public/temp/DeveloperLogViewer.png" width="900" />
<img src="https://github.com/gracecompany/develop/blob/master/public/temp/developer-tool-route-reference-by-phillip-madsen.png" width="900" />

## Layout Overview TreeView

  [GitHub]/gracecompany/develop/GraceWebsiteTreeLayout.md

## Task List
- [] Finish Cart and Checkout
- [] Add These Pages
  - [] Qni 21"
  - [] Qni Features
  - [] Luminescent

## Requirements

- php 7.0
- git
  - git-lfs


## Installation
1. git clone https://github.com/gracecompany/develop
2. Add the following packages to your composer.json if they are not already there.

    ```json
        "require": {
            "php": ">=5.5.9",
            "laravel/framework": "5.1.*",
            "laravelcollective/html": "5.1.*",
            "cartalyst/sentinel": "2.0.*",
            "mcamara/laravel-localization": "1.0.*",
            "davejamesmiller/laravel-breadcrumbs": "3.0.*",
            "sseffa/video-api": "2.0.*",
            "laracasts/flash": "^1.3",
            "rap2hpoutre/laravel-log-viewer": "^0.5.3",
            "cviebrock/eloquent-sluggable": "^3.1",
            "intervention/image": "^2.3",
            "caffeinated/menus": "^2.3",
            "doctrine/dbal": "^2.5",
            "webpatser/laravel-uuid": "^2.0",
            "stripe/stripe-php": "3.*",
            "sentry/sentry-laravel": "^0.3.0",
            "barryvdh/reflection-docblock": "^2.0",
            "milon/barcode": "^5.2",
            "paypal/rest-api-sdk-php": "*",
            "roumen/sitemap": "^2.6",
            "prettus/l5-repository": "^2.6",
            "jlapp/swaggervel": "dev-master",
            "beaudierman/ups": "^1.1"
     }
```


3. Update your packages

    ```bash
    composer update
    ````
4. Add the service providers to the providers array in `{root}\config\app.php`

    ```php
    ...

    ...
    ```
5. Add the following aliases in `{root}\config\app.php`

    ```php
    ...

    ...
    ```

## Contributing
Just let me know your ideas and let's work together

### Coding style
It would be great if we follow the PSR-2 coding standard and the PSR-4 autoloading standard.

### License
This package is licensed under the [MIT license](http://opensource.org/licenses/MIT)
