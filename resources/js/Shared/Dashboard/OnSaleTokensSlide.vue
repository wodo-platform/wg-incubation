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
</script>

<template>
    <div>
        <div class="flex flex-row items-center justify-between mb-8">
            <div>
                <h2 class="text-white text-2xl italic">On sale tokens</h2>
            </div>
            <div class="flex flex-row items-center space-x-3.5">
                <div class="on_sale_tokens_swiper_button_prev">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowLeftIcon class="text-black text-center mr-0.5 w-full m-auto"></ArrowLeftIcon>
                    </div>
                </div>
                <div class="on_sale_tokens_pagination" slot="pagination"></div>
                <div class="on_sale_tokens_swiper_button_next">
                    <div class="flex h-8 w-8 rounded-full text-sm text-white items-center  bg-white">
                        <ArrowRightIcon class="text-black text-center ml-0.5 w-full m-auto"></ArrowRightIcon>
                    </div>
                </div>
            </div>
        </div>

        <swiper class="text-black absolute"
                :slidesPerView="'auto'"
                :space-between="16"
                :loop="true"
                :pagination="{
                  el: '.on_sale_tokens_pagination',
                  clickable: true,
                }"
                paginationClickable: true
                :modules="[Pagination, Navigation]"
                :navigation= "{
                    nextEl: '.on_sale_tokens_swiper_button_next',
                    prevEl: '.on_sale_tokens_swiper_button_prev'
                }"
        >
            <swiper-slide class="max-w-[288px]"><GameCard></GameCard></swiper-slide>
            <swiper-slide class="max-w-[288px]"><GameCard></GameCard></swiper-slide>
            <swiper-slide class="max-w-[288px]"><GameCard></GameCard></swiper-slide>
            <swiper-slide class="max-w-[288px]"><GameCard></GameCard></swiper-slide>
        </swiper>
    </div>
</template>
