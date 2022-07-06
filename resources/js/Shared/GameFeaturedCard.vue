<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import BadgeShape from "@/Shared/BadgeShape";
import ArrowRightIcon from "@/Shared/SVG/ArrowRightIcon";

let props = defineProps({
    game: Object,
});
</script>

<template>
    <div class="relative">
        <div class="relative pt-[134px] sm:pt-64 pb-10 rounded-2xl overflow-hidden h-[342px] sm:h-[423px] bg-cover bg-[url(https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100)]">
            <div class="relative px-6 sm:px-8">
                <div class="flex mb-4">
                    <img class="h-16 w-16 rounded-md ring-2 ring-wgl-purple-3" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                </div>
                <blockquote class="">
                    <div class="relative flex max-w-[80%] space-x-3 items-center">
                        <p class="relative text-lg font-bold text-white">Savior Jay</p>
                        <BadgeShape type="block">ON SALE</BadgeShape>
                    </div>

                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 justify-between items-center mt-1.5">
                        <div class="border-b border-white border-opacity-10 sm:border-0 pb-3 sm:pb-0">
                            <span class="text-sm text-white text-opacity-60 mr-2">Total raise</span><span class="text-sm font-bold text-white text-opacity-80">$2,000,000</span>
                        </div>
                        <div class="flex space-x-2.5 sm:m-0 items-center">
                            <p class="text-sm text-white text-opacity-80">Discover more</p>
                            <div class="flex h-8 w-8 border border-white border-opacity-80 rounded-full text-sm text-white items-center">
                                <ArrowRightIcon class="text-white text-center ml-0.5 w-full m-auto"></ArrowRightIcon>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</template>
