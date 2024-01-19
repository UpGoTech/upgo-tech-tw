/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// for menu open and close
document.getElementById('hamburgerIcon').addEventListener('click', function(){
   var menu = document.getElementById('menu-header-menu');
   menu.classList.toggle('menu-open');   
});

//For sub menu list
