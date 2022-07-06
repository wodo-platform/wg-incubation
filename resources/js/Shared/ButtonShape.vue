<script setup>
import { reactive } from 'vue';

let props = defineProps({
    type: {
        type: String,
        required: true,
        validator(value) {
            return ['blue', 'purple'].includes(
                value
            );
        },
    },
});
let divClasses = reactive({
    blue: 'from-wgl-blue-2 to-wgl-blue-3 bg-gradient-90 rounded-md px-4 py-2.5 text-white text-base font-bold',
    purple: 'mx-auto wgh-purple-5 bg-gray-500 border-rounded-md rounded-md py-[9px] text-center',
});
</script>

<template>
    <div
        class=""
        :class="divClasses[props.type]"
    >
        <slot />
    </div>
</template>
