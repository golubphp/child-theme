var gulp = require('gulp');
var copy = require('gulp-contrib-copy');

gulp.task('copy_imgs', function() {
	return new Promise(function(resolve, reject) {
		gulp.src('psd/img/**')
		.pipe(copy())
		.pipe(gulp.dest('images/'));
		resolve();
	});
});


