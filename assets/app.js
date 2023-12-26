import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import './styles/style.css';
import './js/calendar-duration.js';
import './js/payment.js';
import './js/menu.js';
import './js/cartamount.js';
import './js/sousmenuquantity.js';
import './js/slider.js';

//start the stimulus application
import 'bootstrap';

import { Turbo } from "@hotwired/turbo-rails"
Turbo.session.drive = false