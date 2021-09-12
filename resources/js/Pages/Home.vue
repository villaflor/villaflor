<template>
    <Head title="Home"/>

    <div id="app" class="font-sans text-gray-800">
        <Navbar/>

        <div class="bg-gray-100 min-h-screen pt-40 text-lg">
            <!--            <Contact/>-->
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Navbar from "@/Layouts/Navbar";

export default {
    components: {
        Head,
        Link,
        Navbar,
    },
}
</script>
