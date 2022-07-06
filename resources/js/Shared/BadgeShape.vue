<script setup>
import { reactive } from 'vue';

let props = defineProps({
    type: {
        type: String,
        required: true,
        validator(value) {
            return ['absolute', 'block'].includes(
                value
            );
        },
    },
});
let divClasses = reactive({
    absolute: 'absolute right-2 top-2 rounded-md bg-wgl-green-1 align-middle',
    block: 'rounded-md bg-wgl-green-1 align-middle',
});
</script>

<template>
    <div
        class=""
        :class="divClasses[props.type]"
    >
        <span class="px-2 py-1 text-white text-sm">
            <slot />
        </span>
    </div>
</template>
