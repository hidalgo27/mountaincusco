<template>

    <div class="flex-1">
        <el-select
            v-model="destination_val"
            multiple
            collapse-tags
            class="w-full"
            placeholder="Destinations">
            <el-option
                v-for="item in destination"
                :key="item.id"
                :label="item.nombre"
                :value="item.nombre"
            >
            </el-option>
        </el-select>
    </div>
    <div class="flex-1">
        <el-select
            v-model="category_val"
            multiple
            collapse-tags
            class="w-full"
            placeholder="Style">
            <el-option
                v-for="item in category"
                :key="item.id"
                :label="item.nombre"
                :value="item.nombre"
            >
            </el-option>
        </el-select>
    </div>
    <div class="flex-1">
        <el-input-number
            v-model="number_val"
            controls-position="right"
            :min="1"
            :max="10"
            class="w-100-el"
        >
        </el-input-number>
    </div>
    <div class="flex-1">
        <button type="button" class="btn-secondary text-center w-full block">Design my Trip</button>
    </div>
</template>

<script>
import { ref } from 'vue';
export default {
    setup() {
        const destination = ref([]);
        const category = ref([]);


        const destination_val = ref([]);
        const category_val = ref([]);
        const number_val = ref(1);

        fetch("/api/destinos")
            .then(res => res.json())
            .then(data => {
                destination.value = data;

            });
        fetch("/api/categorias")
            .then(res => res.json())
            .then(data => {
                category.value = data;

            });

        return {
            destination,
            category,
            destination_val,
            category_val,
            number_val
        };
    }
}
</script>
<style>
.el-tag {
    background-color: #ecf5ff !important;
    border-color: #d9ecff !important;
    color: #409eff !important;
}
.el-icon-close {
    background-color: transparent !important;
    color: #409eff !important;
}
.el-icon-close:hover {
    background-color: #409eff !important;
    color: white !important;
}
.el-dialog__header {
    padding: 0 !important;
    padding-bottom: 0 !important;
}
.el-picker-panel, .el-select-dropdown{
    z-index: 3003 !important;
}
.input_phone_intel .el-form-item__content{
    line-height: inherit !important;
}
.w-100-el{
    width: 100% !important;
}
</style>
