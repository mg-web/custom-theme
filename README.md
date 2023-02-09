Mediagistic Custom Theme
===

Developed by the Mediagistic Web Team

The Mediagistic Custom WordPress Theme was developed exclusively to meet the needs and
requirements of the Mediagistic web design team in building, maintaining, and developing
the LeadBuilder product. Please read the provided set up instructions and feature list
below to gain a better understanding of how to use the theme.

Getting Started
---------------
1. After downloading the theme, change the name of the folder and the information in style.css to reflect that of the client.
2. Update screenshot.png with the mockup.
3. Update gulpfile.js with your localhost directory for BrowserSync capability.
4. Install gulp in your project through command line, via copy/paste from the instructions at the top of gulpfile.js.
5. Start coding!

Gulp File
---------------

A gulpfile.js is included in this theme, with easy instructions to get started. Assuming that node is globally installed, simply copy and paste the npm install command with the appropriate dependencies in your favorite command line software. Update the localhost directory you wish to use with BrowserSync, Save, and run your gulp command. 

The structure of this theme combines all the files in the scss folder into a minified css/style.css. This leaves the style.css in your root directory clean and is meant specifically for your theme information. In a pinch, you could add styles to this stylesheet if you are not able to run the gulp task. Similarly, all of your theme javascript should be built in js/main.js, which is minified to js/main.min.js and enqueued.


Naming Conventions
---------------

This theme uses the "mg" prefix for all naming conventions (functions, comments, etc.). It is recommended this stay in place instead of customizing to each client's name so that future code snippets can be swapped in and out and still function appropriately. 

However, you can and SHOULD customize the name of the theme (folder, style.css) to appropriately reflect the client in FTP and the WordPress backend.