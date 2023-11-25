import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

axios.get('/sanctum/csrf-cookie').then(response => {
    // Perform login or other state-changing operations
});

