<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import ButtonShape from '@/Shared/ButtonShape';
import BadgeShape from "@/Shared/BadgeShape";

let props = defineProps({
    game: Object,
});
</script>

<template>
    <div class="w-72 relative bg-wgl-black-2 bg-opacity-[0.07]">
        <BadgeShape type="absolute">ON SALE</BadgeShape>
        <img class="h-40 w-full object-cover lg:h-40 rounded-t-lg" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
        <div class="border border-t-0 border-wgl-gray-2 rounded-lg">

            <div class="px-4">
                <div class="-mt-6 flex items-end">
                    <div class="flex">
                        <img class="h-12 w-12 rounded-lg ring-4 ring-wgl-purple-3" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                    </div>
                </div>
            </div>

            <!-- Description list -->
            <div class="mt-6 mb-4 max-w-5xl mx-auto px-4">
                <h1 class="text-lg font-bold text-white">Savior Jay</h1>
                <p class="text-xs text-white text-opacity-60 mb-2">A 3D Metaverse of Everything A 3D Metaverse of Everything</p>

                <div class="">
                    <div class="flex justify-between items-center text-xs text-white text-opacity-60 mb-1">
                        <span class="mr-1">Total raised</span>
                        <div class="flex-grow border-t-2 border-wgl-gray-3"></div>
                        <span class="ml-1">$2,000,000</span>
                    </div>

                    <div class="flex justify-between items-center text-xs text-white text-opacity-60">
                        <span class="mr-1">Participants</span>
                        <div class="flex-grow border-t-2 border-wgl-gray-3"></div>
                        <span class="ml-1">$1,000</span>
                    </div>
                </div>

                <div class="mt-2">
                    <ButtonShape type="purple">
                        <span class="text-white text-xs leading-5">Whitelist ends in 3 days</span>
                    </ButtonShape>
                </div>
            </div>
        </div>
    </div>
</template>
