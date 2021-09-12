<template>
    <Head title="Welcome" />

    <div id="app" class="font-sans text-gray-800">
        <Navbar/>
        <div class="bg-gray-100 min-h-screen pt-40 text-lg">
            <About/>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import About from "@/components/About";
import Navbar from "@/Layouts/Navbar";

export default {
    components: {
        Head,
        Link,
        About,
        Navbar,
    },
}
</script>
