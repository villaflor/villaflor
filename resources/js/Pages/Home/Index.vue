<template>
    <AppLayout>
        <div class="">
            <div class="2xl:px-64 sm:px-32 py-32 grid grid-rows-3 grid-cols-2 gap-10">
                <div class="row-span-2 col-span-1">
                    <h1 class="text-6xl text-zircon break-words">Mark Anthony Villaflor.</h1>
                </div>
                <div class="row-span-2 col-span-1">
                    <p class="text-manatee break-words">&#9472; Introduction</p>
                    <h2 class="text-2xl text-zircon break-words py-4">Computer Programmer / Backend Developer</h2>
                    <p class="text-manatee break-words">Honours student of Seneca College with two web programming project completed.</p>
                </div>
                <div class="row-span-1 col-span-1">
                    <font-awesome-icon class="text-zircon" :icon="['fas', 'globe-americas']" />
                    <font-awesome-icon class="text-zircon" :icon="['fab', 'linkedin-in']" />
                    <font-awesome-icon class="text-zircon" :icon="['fab', 'github']" />
                </div>
                <div class="row-span-1 col-span-1">
                    <a href="google.com" class="text-neon-carrot"><span class="underline ">My Portfolio</span> <span class="animate-pulse">&#8594;</span></a>
                </div>
            </div>

        </div>
        <div class="h-80 min-h-full bg-haiti"></div>
    </AppLayout>

</template>

<script>

import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Index",
    components: {
        AppLayout,
    }
}
</script>

<style scoped>

</style>
