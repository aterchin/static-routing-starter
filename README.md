# static-routing-starter (with CSS preprocessor)
Static website, with basic routing system using AltoRouter, and starter kit for Neat, Bourbon, Bitters.  Gulpfile included for minifying, compressing, browsersyncing etc.


## AltoRouter

https://github.com/dannyvankooten/AltoRouter

If all you need is PHP routing, the only files in the /src directory you care about are:

- .htaccess
- index.php
- pages/*

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

Then run `gulp serve` on the root of the directory to launch the project in your browser.



### Regarding individual setups

- Change `static-routing-starter` in index.php to match your root directory. If your webroot is the "src" directory then comment that line out.

- Add your own javascript scripts to "/src/custom"

- browserSync:  If you want to serve from php routing rather than the static html file, in the browserSync options in gulpfile.js comment out the *server* line and uncomment the *proxy* line.  Add your own virtual host URL here.