<script setup>
defineProps(['modelValue']);
defineEmits(['update:modelValue']);
</script>
<template>
    <input
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        class="flex w-full flex-none rounded border border-wgh-gray-1 px-4 py-2 pr-10 text-sm font-normal outline-none"
    />
</template>
