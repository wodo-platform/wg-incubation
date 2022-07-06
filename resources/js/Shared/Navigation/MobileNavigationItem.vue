<script setup>
import {Link} from "@inertiajs/inertia-vue3";
let props = defineProps({
    current: false,
});
</script>
<template class="md:flex">
  <Link :class="(current)?'font-bold':''" class="text-white text-sm hover:font-bold border-transparent block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">
    <slot />
  </Link>
</template>
