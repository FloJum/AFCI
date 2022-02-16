import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "bootstrap";
import "bootstrap/dist/css/bootstrap.css";
// import "../node_modules/bootswatch/dist/lux/bootstrap.min.css";
// import "jquery";
// import "poppers.js";

createApp(App).use(router).mount("#app");

