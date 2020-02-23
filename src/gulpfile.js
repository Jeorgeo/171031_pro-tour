//Подлючаем модули галпа
const gulp = require('gulp'), //Подлючаем модули галпа
    sass = require('gulp-sass'), //Модуль компиляции SAAS
    autoprefixer = require('gulp-autoprefixer'), //Автоматическое добавление префиксов
    concat = require('gulp-concat'), //Автоматическое добавление префиксов
    sourcemaps = require('gulp-sourcemaps'),//Для препроцессоров
    cleanCSS = require('gulp-clean-css'); //Минификация стилей

const styleFiles = [
    './171031_pro-tour/pro-tour_new/src/sass/main.scss'
];
// Таск для обработки стилей
gulp.task('styles', () => {
    //Шаблон для поиска файлов CSS
    //Всей файлы по шаблону './src/css/**/*.css'
    return gulp.src(styleFiles)
    //Создаем карту для навигации по таблице стилей
        .pipe(sourcemaps.init())
        .pipe(sass({includePaths: require('node-normalize-scss').includePaths}))
        //Компиляция в *.css Указать stylus() , sass() или less()
        .pipe(sass().on('error', sass.logError))
        //Объединение файлов в один
        .pipe(concat('style.css'))
        //Добавить префиксы
/*        .pipe(autoprefixer({
            cascade: false
        }))*/
        //Минификация CSS
/*        .pipe(cleanCSS({
            level: 2
        }))*/
        .pipe(sourcemaps.write('./'))
        //Выходная папка для стилей
        .pipe(gulp.dest('./171031_pro-tour/pro-tour_new/assets/css'));
});
