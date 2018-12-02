let gulp = require('gulp');
let less = require('gulp-less');
let LessAutoprefix = require('less-plugin-autoprefix');
let autoprefix = new LessAutoprefix({ browsers: ['last 5 versions'] });

gulp.task('less', function () {
  return gulp.src(["./css/style.less"])
    .pipe(less({
      plugins: [autoprefix]
    }))
    .pipe(gulp.dest('./css'));
});