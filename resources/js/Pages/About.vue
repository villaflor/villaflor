<template>
    <Head title="About"/>

    <div id="app" class="font-sans text-gray-800">
        <Navbar/>

        <div class="min-h-screen flex flex-col">
            <div class="flex-grow bg-gray-100 pt-40 text-lg">
                <About/>
            </div>

            <div class="shadow-top-md">
                <Footer/>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import About from "@/components/About";
import Navbar from "@/Layouts/Navbar";
import Footer from "@/Layouts/Footer";

export default {
    components: {
        Head,
        Link,
        Navbar,
        About,
        Footer
    },
}
</script>
