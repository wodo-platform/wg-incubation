<script setup>
import { ref, reactive } from 'vue';
import ArticleCard from "@/Shared/ArticleCard";
import ArticleFeaturedCard from "@/Shared/ArticleFeaturedCard";

let props = defineProps({
    articles: Object,
});
</script>

<template>
    <div class="flex h-full flex-col lg:flex-row lg:space-x-6">
        <div class="w-full relative">
            <h2 class="text-white text-2xl italic">Our Articles</h2>
            <div class="flex flex-col">
                <div class="mt-6 sm:mt-8 grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                    <ArticleFeaturedCard></ArticleFeaturedCard>
                    <ArticleFeaturedCard></ArticleFeaturedCard>
                </div>
                <div class="mt-4 sm:mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-auto">
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                    <ArticleCard></ArticleCard>
                </div>
            </div>
        </div>
    </div>
</template>
