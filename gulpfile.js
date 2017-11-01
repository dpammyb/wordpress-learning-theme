var repo = "git@github.com:titaniumbones/Wordpress-learning-theme.git",
    branch = 'master',
    remoteName = 'origin';
var gulp = require('gulp'),
    repoWatch = require('gulp-repository-watch'),
    git = require('gulp-git');

gulp.task('repo-watch', function() {
  repoWatch({
    repository: repo + '#' + branch
  })
    .on('check', function() {
      console.log('ping');
    })
    .on('change', function(newHash, oldHash) {
      console.log('Changed from ', oldHash, ' to ', newHash);
      git.pull(remoteName, branch, {args: ''}, function (err) {
        if (err) throw err;
      });
          });
});
















