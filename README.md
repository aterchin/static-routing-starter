# static-routing-starter (with CSS preprocessor)
Static website, with basic routing system using AltoRouter, and starter kit for Neat, Bourbon, Bitters.  Gulpfile included for minifying, compressing, browsersyncing etc.



### Routing with AltoRouter
https://github.com/dannyvankooten/AltoRouter

If all you need is PHP routing, the only files in the /src directory you care about are:
- .htaccess
- index.php
- pages/*

*Requires Composer
From the command line, run the following:
1. composer install


### NEAT, BOURBON, BITTERS Starter kit
https://gulpjs.org/
http://bourbon.io/
https://github.com/mpukit/gulp-bourbon-neat-bitters-starter

*Requires Node and Bower.

From the command line, run the following:
1. npm install
2. bower install

Then run "gulp serve" on the root of the directory to launch the project in your browser.

Other notes:

- Add your own javascript scripts to /src/custom directory
