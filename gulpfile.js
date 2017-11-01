var gulp = require('gulp');
var repoWatch = require('gulp-repository-watch');

gulp.task('repo-watch', function() {
  repoWatch({
    repository: 'git@github.com:titaniumbones/Wordpress-learning-theme.git'
  })
    .on('check', function() {
      console.log('ping');
    })
    .on('change', function(newHash, oldHash) {
      console.log('Changed from ', oldHash, ' to ', newHash);
          });
});










