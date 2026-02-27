import './bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'font-awesome/css/font-awesome.min.css';
import 'material-design-iconic-font/dist/css/material-design-iconic-font.min.css';
import 'modernizr';

import('./plugins').then(() => {
    import('./main');
});
