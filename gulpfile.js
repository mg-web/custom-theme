/**
 * INSTRUCTIONS
 * ============
 * 1. Ensure that Node and NPM are installed by running the following commands:
 *    
 *    node --version
 *    npm --version
 *    
 *    If you have Node and NPM installed already, you should see a version number
 *    printed in the terminal after each command is entered.
 *    If you see an error similar to "Node is not a recognized command", then you
 *    will need to install the necessary packages. Both packages can be
 *    downloaded from: https://nodejs.org/en/download. This should install both
 *    Node and NPM on to your system.
 * 
 * 2. Install the Gulp CLI globally:
 *    
 *    sudo npm install -g gulp-cli
 * 
 *    You will be prompted for your system administrator password. Type it in
 *    (it will not show that you are typing anything in, but it is still 
 *    taking input from your keyboard) and hit 'enter'.
 * 
 * 3. In the terminal, navigate to the project folder.
 * 
 * 4. Enter the following command to initialize the project:
 *    
 *    npm init
 * 
 *    You will then be prompted for information about the project. Hit enter
 *    until you reach the end of the prompts (no need to enter any info here).
 *    You will then be asked to type 'yes' to confirm. Type yes and hit enter.
 * 
 * 5. Enter the following command to install needed packages and dependencis:
 * 
 *    npm install --save-dev
 * 
 *    This command will load all of the required packages to make gulp work.
 *    After the installation, you may see a message that displays a number of
 *    'vulnerabilities'. Do not be alarmed. These present no security risk to
 *    your system. You can simply ignore these vulnerabilities and continue to
 *    the next step.
 * 
 * 6. To check that Gulp is properly installed, enter the following command:
 *   
 *    gulp --version
 * 
 *    You should receive a message listing both the 'CLI version' number as
 *    well as the 'Local version' number. As of the writing of these instructions
 *    the ClI is version 2.3.0 and the Local version is 4.0.2.
 * 
 * 7. Run Gulp by entering this command:
 * 
 *    gulp
 * 
 *    You should now receive output from the terminal which should look
 *    similar to this example:
 * 
 *    [10:19:15] Using gulpfile ~/Desktop/custom-theme/gulpfile.js
 *    [10:19:15] Starting 'default'...
 *    [10:19:15] Starting 'scss'...
 *    [10:19:15] Starting 'js'...
 *    [10:19:15] Starting 'vendor_js'...
 *    [10:19:16] Finished 'vendor_js' after 772 ms
 *    [10:19:16] Finished 'js' after 853 ms
 *    [10:19:17] Finished 'scss' after 1.9 s
 *    [10:19:17] Starting 'watchTask'...
 * 
 *    Once you see "Starting 'watchTask'..."" at the bottom of the list, you arr
 *    ready to start building. Any change you make to SCSS or JS files is being
 *    tracked and will instantly process/compile the changes into minified CSS
 *    and JS files when you save. You can confirm that these changes are being
 *    compiled by checking the terminal for a refreshed output list similar to
 *    the example above.
 * 
 * 8. You're now ready to start building. Have fun and happy programming!
 */

// Initialize modules
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const { src, dest, series, parallel, watch } = require('gulp');
const concat = require('gulp-concat');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const order = require("gulp-order");
const postcss = require('gulp-postcss');
const replace = require('gulp-replace');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const terser = require('gulp-terser');
const onError = function (err) {
    notify.onError({
        title: "Error!",
        message: "<%= error.message %>",
        sound: "Beep"
    })(err);
    this.emit('end');
};

function scss() {
    return src('src/scss/**/*.scss')
        .pipe(order([
            "/control/variables.scss",
            "/control/mixins.scss",
            "/control/animation.scss",
            "/elements/native.scss",
            "/elements/composed/*.scss",
            "/sections/*.scss",
        ]))
        .pipe(sourcemaps.init())
        .pipe(plumber({ errorHandler: onError }))
        .pipe(concat('style.min.css'))
        .pipe(sass())
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('dist/css')
    );
}

function vendor_js() {
    return src('src/js/vendor/*.js')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(terser())
        .pipe(concat('vendor.min.js'))
        .pipe(dest('dist/js')
    );
}

function js() {
    return src('src/js/*.js')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(terser())
        .pipe(concat('main.min.js'))
        .pipe(dest('dist/js')
    );
}

// Cachebusting task

// Watch task
function watchTask() {
    watch(['*.php','src/scss/**/*.scss', 'src/js/**/*.js'],
        parallel(scss, js));
}

// Default task
exports.default = series(
    parallel(scss, js, vendor_js),
    watchTask
);