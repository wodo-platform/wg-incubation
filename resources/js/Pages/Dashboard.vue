<script setup>
import { ref, reactive } from 'vue';

import TimelineShape from "@/Shared/TimelineShape";
import MainFeaturedSaleSlide from "@/Shared/Dashboard/MainFeaturedSaleSlide";
import OnSaleTokensSlide from "@/Shared/Dashboard/OnSaleTokensSlide";
import LaunchCalendarSlide from "@/Shared/Dashboard/LaunchCalendarSlide";
import ArticlesSlide from "@/Shared/Dashboard/ArticlesSlide";
import DashboardImage from "@/Shared/SVG/DashboardImage";
import TextInput from "@/Shared/Inputs/TextInput";
import ButtonShape from "@/Shared/ButtonShape";


let props = defineProps({
    dashboard_art: String,
    games: Object,
    articles: Object,
    balance: Array,
    user: Object,
});

let playGameModalIsOpen = ref(false);
let playGameModalSelectedGame = reactive({});

function playGameModalCancelButtonClicked() {
    playGameModalIsOpen.value = false;
    playGameModalSelectedGame = {};
}

function playGameModalStartButtonClicked() {
    if (isEmpty(playGameModalSelectedGame)) {
        return;
    }
    console.log('starting..', playGameModalSelectedGame.name);
    playGameModalIsOpen.value = false;
    Inertia.visit('/games/1');
}

function gameActionButtonClicked(game) {
    playGameModalSelectedGame = game;
    playGameModalIsOpen.value = true;
}
</script>


<template>
    <div class="flex h-full flex-col lg:flex-row lg:space-x-6">
        <div class="w-full relative">
            <div class="pt-0 lg:pt-[85px] pb-[84px] sm:pb-48 flex flex-col-reverse lg:flex-row lg:space-y-0 justify-center sm:justify-between items-center">
                <div class="max-w-none lg:max-w-[518px] text-center lg:text-left">
                    <h2 class="text-white text-[32px] lg:text-5xl italic">Get early access to the ideas of tomorrow!</h2>
                    <p class="text-white text-opacity-60 mt-4">Highly-vetted ideas and teams you can trust. Supported by industry leading creators and funds.</p>
                    <div class="mt-8 border border-[#705CFF] border-opacity-[0.24] rounded-lg drop-shadow-3xl w-[400px] mx-auto lg:mx-0">
                        <div class="flex justify-between p-1 items-center h-[58px] drop-shadow-none">
                            <div class="w-full">
                                <text-input class="bg-transparent border-none text-white text-opacity-70 placeholder-white placeholder-opacity-30" placeholder="Enter your email"></text-input>
                            </div>
                            <div>
                                <ButtonShape type="blue" class="h-[50px] flex items-center drop-shadow-none">
                                    <span>Subscribe</span>
                                </ButtonShape>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <DashboardImage class="w-full h-full sm:w-[582px] sm:h-[389px] m-auto"></DashboardImage>
                </div>
            </div>

            <MainFeaturedSaleSlide></MainFeaturedSaleSlide>

            <OnSaleTokensSlide class="pt-20"></OnSaleTokensSlide>

            <LaunchCalendarSlide class="pt-20"></LaunchCalendarSlide>

            <ArticlesSlide class="pt-20"></ArticlesSlide>
        </div>
    </div>
</template>
