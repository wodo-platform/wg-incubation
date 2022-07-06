<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

let props = defineProps({
    timeline: Object,
});
</script>

<template>
    <div class="flex justify-between bg-wgl-blue-4 text-sm text-white rounded-lg h-[37px] px-4 items-center">
        <div><span class="font-bold">15</span><span>June</span></div>
        <div><span class="text-sm">2022</span></div>
    </div>
</template>
