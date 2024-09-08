import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

// Buat instance aplikasi Vue 3
const app = createApp({});

// Daftarkan komponen secara global
app.component('example-component', ExampleComponent);

// Pasang aplikasi ke elemen dengan ID 'app'
app.mount('#app');
