require('./bootstrap');
const feather = require('feather-icons')
feather.replace();
import { createApp } from 'vue'
// import { ElButton, ElSelect, ElSwitch } from 'element-plus';
import ElementPlus from 'element-plus';
import 'element-plus/lib/theme-chalk/index.css';
import ExampleComponent from "./components/ExampleComponent";
const app = createApp({
    components: {
        ExampleComponent
    }
});
// app.component(ElButton.name, ElButton);
// app.component(ElSelect.name, ElSelect);
// app.component(ElSwitch.name, ElSwitch);
// app.config.globalProperties.$ELEMENT = option
app.use(ElementPlus)
app.mount('#app')
