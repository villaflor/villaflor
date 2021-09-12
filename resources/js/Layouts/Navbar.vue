<template>
    <header class="border-t-4 border-blue-700 bg-white z-10 absolute w-full shadow-md">

        <nav class="container mx-auto px-6 flex flex-wrap justify-between items-center py-6">
            <div class="mb-0 lg:mb-6 xl:mb-0">
                <ApplicationLogo/>
            </div>
            <div class="block lg:hidden">
                <button
                    class="flex items-center px-3 py-2 border rounded border-gray-500 hover:text-gray-600 hover:border-gray-600"
                    @click="toggleMenu">
                    <svg class="current-color h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" fill="gray"/>
                    </svg>
                </button>
            </div>
            <ul
                :class="menuOpen ? 'block': 'hidden'"
                class="uppercase tracking-wide font-bold w-full block flex-grow lg:flex lg:flex-initial lg:w-auto items-center mt-8 lg:mt-0"
            >
                <li class="mr-8 mb-6 lg:mb-0">
                    <Link class="text-copy-primary hover:text-gray-600 border-b-2 border-indigo-600" href="/">Home
                    </Link>
                </li>
                <li class="mr-8 mb-6 lg:mb-0">
                    <Link class="text-copy-primary hover:text-gray-600" href="/about">About</Link>
                </li>
                <li class="mr-8 mb-6 lg:mb-0">
                    <Link class="text-copy-primary hover:text-gray-600" href="/contact">Contact</Link>
                </li>
            </ul>
        </nav>
    </header>

</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import ApplicationLogo from "@/components/ApplicationLogo";

export default {
    components: {
        Head,
        Link,
        ApplicationLogo,
    },
    data() {
        return {
            menuOpen: false,
        }
    },
    methods: {
        toggleMenu() {
            this.menuOpen = !this.menuOpen
        }
    }
}
</script>

<style scoped>

</style>
