Tobacco Patents, based on Symfony Standard Edition 2.0.7
========================

Welcome to the Tobacco Patents, based on the Symfony Standard Edition (downloaded, not forked).

1) Goal: Convert a simple database to Symfony / Doctrine
--------------------------------

This recipe shows the steps to convert a simple database to a Symfony2+Doctrine project.  Another recipe shows how to do this with Propel.  It starts with the Symfony Standard distro:

    cd /usr/sites/sf
    git clone http://github.com/symfony/symfony-standard.git patents
    cd patents
    rm -rf .git

2) Dependencies and Installation
---------------

There are no additional bundles or dependencies in this recipe.  Copy parameters.ini.dist 
in /app/config to parameters.ini, and set up the database.

### a) Install the Vendor Libraries

    php bin/vendors install

### b) Configure Apache

Add the following to your httpd.conf file (or however you set up sites in Apache)

    <VirtualHost *:80> 
    ServerName patents
    ServerAlias patents.localsite.us
    DocumentRoot /usr/sites/sf/patents/web
    </VirtualHost>
    

Restart Apache

### c) Access the Application via the Browser

Congratulations! You're now ready to use Symfony. If you've unzipped Symfony
in the web root of your computer, then you should be able to access the
web version of the Symfony requirements check via:

    http://patents.localsite.us/web/app_dev.php
    http://patents.localsite.us/web/config.php

If everything looks good, click the "Bypass configuration and go to the Welcome page"
link to load up your first Symfony page.

You can also use a web-based configurator by clicking on the "Configure your
Symfony Application online" link of the ``config.php`` page.

To see a real-live Symfony page in action, access the following page:

    web/app_dev.php/demo/hello/Fabien

3) Create the patents bundle
-----------------------

* php app/console bundle:generate --namespace=Survos/PatentsBundle

* delete the ``src/Acme`` directory;
* remove the routing entries referencing AcmeBundle in ``app/config/routing_dev.yml``;
* remove the AcmeBundle from the registered bundles in ``app/AppKernel.php``;



Enjoy!
