<script setup>
import { Navigation, Pagination} from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

import GameFeaturedCard from "@/Shared/GameFeaturedCard";
import ArrowRightIcon from "@/Shared/SVG/ArrowRightIcon";
import ArrowLeftIcon from "@/Shared/SVG/ArrowLeftIcon";
</script>

<style scoped>
.swiper-slide {
    opacity: 40%;
}
.swiper-slide-active {
    opacity: 100%;
}
</style>

<template>
    <div>
        <div class="flex flex-row items-center justify-between mb-8">
            <div>
                <h2 class="text-white text-2xl italic">Featured token sales</h2>
            </div>
            <div class="flex flex-row items-center space-x-3.5">
                <div class="main_featured_sale_swiper_button_prev">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowLeftIcon class="text-black text-center mr-0.5 w-full m-auto"></ArrowLeftIcon>
                    </div>
                </div>
                <div class="main_featured_sale_pagination" slot="pagination"></div>
                <div class="main_featured_sale_swiper_button_next">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowRightIcon class="text-black text-center ml-0.5 w-full m-auto"></ArrowRightIcon>
                    </div>
                </div>
            </div>
        </div>

        <swiper class="text-black absolute"
                :slidesPerView="'auto'"
                :space-between="24"
                :loop="true"
                :pagination="{
                  el: '.main_featured_sale_pagination',
                  clickable: true,
                }"
                paginationClickable: true
                :modules="[Pagination, Navigation]"
                :navigation= "{
                    nextEl: '.main_featured_sale_swiper_button_next',
                    prevEl: '.main_featured_sale_swiper_button_prev'
                }"
        >
            <swiper-slide class="max-w-[358px] sm:max-w-[795px]"><GameFeaturedCard></GameFeaturedCard></swiper-slide>
            <swiper-slide class="max-w-[358px] sm:max-w-[795px]"><GameFeaturedCard></GameFeaturedCard></swiper-slide>
            <swiper-slide class="max-w-[358px] sm:max-w-[795px]"><GameFeaturedCard></GameFeaturedCard></swiper-slide>
            <swiper-slide class="max-w-[358px] sm:max-w-[795px]"><GameFeaturedCard></GameFeaturedCard></swiper-slide>
        </swiper>
    </div>
</template>
