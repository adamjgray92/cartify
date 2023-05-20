<template>
    <Box>
        <template #header>Offer Made</template>

        <Price :price="offer.amount" class="text-3xl" />

        <section
            class="mt-2 flex flex-col md:flex-row justify-between text-gray-500"
        >
            <div>Made on</div>
            <div>{{ offerMadeOn }}</div>
        </section>
    </Box>
</template>

<script setup>
import { computed } from "vue";
import Box from "@/components/UI/Box.vue";
import Price from "@/components/Price.vue";

const offerMadeOn = computed(() =>
    new Date(props.offer.created_at).toDateString()
);

const props = defineProps({
    offer: Object,
});
</script>
