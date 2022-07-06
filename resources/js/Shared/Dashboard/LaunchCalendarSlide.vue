<script setup>
import { Navigation, Pagination} from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

import ArrowRightIcon from "@/Shared/SVG/ArrowRightIcon";
import ArrowLeftIcon from "@/Shared/SVG/ArrowLeftIcon";
import GameCard from "@/Shared/GameCard";
import TimelineShape from "@/Shared/TimelineShape";
</script>

<style scoped>
.swiper-slide
{
    width: auto;
}
</style>

<template>
    <div>
        <div class="flex flex-row items-center justify-between mb-8">
            <div>
                <h2 class="text-white text-2xl italic">Launch calendar</h2>
            </div>
            <div class="flex flex-row items-center space-x-3.5">
                <div class="launch_calendar_swiper_button_prev">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowLeftIcon class="text-black text-center mr-0.5 w-full m-auto"></ArrowLeftIcon>
                    </div>
                </div>
                <div class="launch_calendar_pagination" slot="pagination"></div>
                <div class="launch_calendar_swiper_button_next">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowRightIcon class="text-black text-center ml-0.5 w-full m-auto"></ArrowRightIcon>
                    </div>
                </div>
            </div>
        </div>

        <swiper class="text-black absolute"
                :slidesPerView="'auto'"
                :space-between="16"
                :pagination="{
                  el: '.launch_calendar_pagination',
                  clickable: true,
                }"
                paginationClickable: true
                :modules="[Pagination, Navigation]"
                :navigation= "{
                    nextEl: '.launch_calendar_swiper_button_next',
                    prevEl: '.launch_calendar_swiper_button_prev'
                }"
        >
            <swiper-slide>
                <div class="flex flex-col space-y-4">
                    <TimelineShape></TimelineShape>
                    <div class="flex space-x-4">
                        <GameCard></GameCard>
                        <GameCard></GameCard>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="flex flex-col space-y-4">
                    <TimelineShape></TimelineShape>
                    <div class="flex space-x-4">
                        <GameCard></GameCard>
                        <GameCard></GameCard>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="flex flex-col space-y-4">
                    <TimelineShape></TimelineShape>
                    <div class="flex space-x-4">
                        <GameCard></GameCard>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="flex flex-col space-y-4">
                    <TimelineShape></TimelineShape>
                    <div class="flex space-x-4">
                        <GameCard></GameCard>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>
