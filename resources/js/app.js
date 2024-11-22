import "./bootstrap";
import { createApp } from "vue";
import Greeting from "./components/Greeting.vue";

const app = createApp();
app.component("Greeting", Greeting);
app.mount("#app");
