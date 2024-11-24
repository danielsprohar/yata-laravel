import "./bootstrap";
import { createApp } from "vue";
import Greeting from "./components/Greeting.vue";
import Modal from "./components/Modal.vue";

const app = createApp();
app.component("Greeting", Greeting);
app.component("Modal", Modal);
app.mount("#app");
