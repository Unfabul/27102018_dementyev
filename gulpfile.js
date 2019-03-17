let gulp = require('gulp'),
cleanCSS = require('gulp-clean-css'),
importCss = require('gulp-import-css'),
autoprefixer = require('gulp-autoprefixer'),
watch = require('gulp-watch');

function generateCatalog() {
    return gulp .src('css/catalog.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                    browsers: ['>0.1%'],
                    cascade: false
                }))
                .pipe(cleanCSS({level: 2}))
                .pipe(gulp.dest('css/dist'));
}

function watchChanges() {
    gulp.watch('css/blocks/**/*.css', gulp.series('style'));
}

gulp.task('style', generateCatalog);
gulp.task('watch', watchChanges);