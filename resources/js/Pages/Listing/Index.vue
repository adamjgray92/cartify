<template>
    <Filters :filters="filters" />
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Listing
            v-for="listing in listings.data"
            :key="listing.id"
            :listing="listing"
        />
    </div>
    <div
        v-if="listings.data.length"
        class="w-full flex justify-center mt-4 mb-4"
    >
        <Pagination :links="listings.links" />
    </div>
</template>

<script setup>
import Listing from "@/Pages/Listing/Index/Components/Listing.vue";
import Filters from "@/Pages/Listing/Index/Components/Filters.vue";
import Pagination from "@/components/UI/Pagination.vue";

defineProps({
    listings: Object,
    filters: Object,
});
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
