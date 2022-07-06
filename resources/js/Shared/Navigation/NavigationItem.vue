<script setup>
import {Link} from "@inertiajs/inertia-vue3";
let props = defineProps({
    current: false,
});
</script>
<template class="md:flex md:space-x-8">
  <Link :class="(current)?'border-wgl-blue-1 border-b-2 font-bold':''" class="text-white text-sm hover:font-bold transition-all duration-150 space-x-2 flex flex-row items-center cursor-pointer">
    <slot />
  </Link>
</template>
