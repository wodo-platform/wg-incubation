<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

let props = defineProps({
    article: Object,
});
</script>

<template>
    <!--  article inner card -->
    <div class="relative max-w-[358px] sm:max-w-[389px] lg:px-0">
        <div class="relative pt-[214px] sm:pt-[218px] pb-6 sm:pb-8 h-[375px] sm:h-[387px] rounded-lg overflow-hidden bg-cover bg-[url(https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100)]">
            <div class="relative px-6 sm:px-8">
                <div>
                    <span class="text-xs text-white text-opacity-60">13 May, 2022</span>
                </div>
                <blockquote class="mt-1">
                    <div class="relative text-lg font-bold text-white">
                        <p class="relative">Take a quick tour of whitelist registration for x-metaverse $xMeta IGO</p>
                    </div>

                    <footer class="mt-1">
                        <p class="text-xs text-white text-opacity-60">A 3D Metaverse of Everything A 3D Metaverse of Everything</p>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</template>
