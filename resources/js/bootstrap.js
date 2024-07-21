import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Swiper from 'swiper/bundle';
window.swiper = Swiper;