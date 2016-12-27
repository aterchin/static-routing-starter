# static-routing-starter (with CSS preprocessor)
Static website, with basic routing system using AltoRouter, and starter kit for Neat, Bourbon, Bitters.  Gulpfile included for minifying, compressing, browsersyncing etc. PHP templating uses Twig files.


## AltoRouter

https://github.com/dannyvankooten/AltoRouter

If all you need is PHP routing, the only files in the /src directory you care about are:

- .htaccess
- index.php
- templates/*

*Requires Composer*

From the command line, run the following:

`composer install`


## Neat, Bourbon, Bitters

https://gulpjs.org/

http://bourbon.io/

https://github.com/mpukit/gulp-bourbon-neat-bitters-starter

*Requires Node and Bower*

From the command line, run the following:

`npm install`

`bower install`

Then run `gulp serve` on the root of the directory to launch the project in your browser. If "use_host" is set to `false` in the **config.yml** file, you will see the static sample html file instead of your templates.

---

### Regarding individual setups

- Change settings in the **config.yml** file to match your setup
- Add your own javascript scripts to "/src/custom"

