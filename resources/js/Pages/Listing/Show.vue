<template>
    <div class="flex flex-col-reverse md:grid grid-cols-12 gap-4">
        <Box class="md:col-span-8 flex items-center w-full">
            <div class="w-full text-center font-medium text-gray-500">
                No images
            </div>
        </Box>
        <div class="flex flex-col gap-4 md:col-span-4">
            <Box>
                <template #header>Basic Info</template>
                <Price :price="listing.price" class="text-2xl font-bold" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500" />
            </Box>

            <Box><template #header>Offer</template>Make an offer</Box>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import Price from "@/Components/Price.vue";
import Box from "@/Components/UI/Box.vue";
defineProps({
    listing: Object,
});
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
    components: { Price, ListingSpace, ListingAddress },
};
</script>
