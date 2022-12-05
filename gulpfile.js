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
const uglify = require('gulp-uglify');
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
        .pipe(uglify())
        .pipe(concat('vendor.min.js'))
        .pipe(dest('dist/js')
    );
}

function js() {
    return src('src/js/*.js')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(uglify())
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