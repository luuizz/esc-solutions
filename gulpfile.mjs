import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import browserSync from 'browser-sync';
import concat from 'gulp-concat';
import babel from 'gulp-babel';
import uglify from 'gulp-uglify';
import fs from 'fs';

const sass = gulpSass(dartSass);

const paths = {
  cssLibs: 'css/lib/*.css',
  cssDefault: 'css/*.css',
  jsLibs: 'js/lib/*.js',
  jsScripts: 'js/scripts/*.js',
  php: ['*.php', '**/*.php'],
};

// Função para verificar se a pasta contém arquivos
function arquivosExistem(path) {
  try {
    const arquivos = fs.readdirSync(path);
    return arquivos.length > 0;
  } catch {
    return false;
  }
}

// Compila Sass
function compilaSass() {
  if (!arquivosExistem('scss')) return Promise.resolve();

  return gulp
    .src('scss/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer({ overrideBrowserslist: ['last 2 versions'], cascade: false }))
    .pipe(gulp.dest('css/'))
    .pipe(browserSync.stream());
}
gulp.task('sass', compilaSass);

// Concatena CSS de plugins
function pluginsCSS() {
  if (!arquivosExistem('css/lib')) return Promise.resolve();

  return gulp
    .src(paths.cssLibs)
    .pipe(concat('plugins.css'))
    .pipe(gulp.dest('css/'))
    .pipe(browserSync.stream());
}
gulp.task('plugincss', pluginsCSS);

// Concatena e transpila JS
function gulpJs() {
  if (!arquivosExistem('js/scripts')) return Promise.resolve();

  return gulp
    .src(paths.jsScripts)
    .pipe(concat('all.js'))
    .pipe(babel({ presets: ['@babel/env'] }))
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
    .pipe(browserSync.stream());
}
gulp.task('alljs', gulpJs);

// Concatena JS de plugins
function pluginsJs() {
  if (!arquivosExistem('js/lib')) return Promise.resolve();

  return gulp
    .src(paths.jsLibs)
    .pipe(concat('plugins.js'))
    .pipe(gulp.dest('js/'))
    .pipe(browserSync.stream());
}
gulp.task('pluginjs', pluginsJs);

// Inicia browser-sync
function browser() {
  browserSync.init({ proxy: 'escsolutions-ai.local' });
}
gulp.task('browser-sync', browser);

// Watch
function watch() {
  gulp.watch('scss/*.scss', compilaSass);
  gulp.watch(paths.cssLibs, pluginsCSS);
  gulp.watch(paths.php).on('change', browserSync.reload);
  gulp.watch(paths.jsScripts, gulpJs);
  gulp.watch(paths.jsLibs, pluginsJs);
}
gulp.task('watch', watch);

// Default
gulp.task(
  'default',
  gulp.parallel('watch', 'browser-sync', 'sass', 'plugincss', 'alljs', 'pluginjs'),
);
