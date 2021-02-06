<template>
    <div class="flex flex-col h-screen bg-black-rock">
        <header class="md:flex md:justify-between md:items-center md:px-32 2xl:px-64 md:py-16">
            <div class="flex items-center justify-between px-4 py-3 md:p-0">
                <div>
                    <img class="h-20" src="/images/logo.ico" alt="Workcation">
                </div>
                <div class="md:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                            class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path v-if="isOpen" fill-rule="evenodd"
                                  d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                            <path v-if="!isOpen" fill-rule="evenodd"
                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 md:flex md:p-0">
                <a href="#" class="block px-2 py-1 text-zircon font-semibold hover:bg-neon-carrot border-b-2 border-neon-carrot">Experiences</a>
                <a href="#"
                   class="mt-1 block px-2 py-1 text-zircon font-semibold hover:bg-neon-carrot sm:mt-0 sm:ml-2">Education</a>
                <a href="#"
                   class="mt-1 block px-2 py-1 text-zircon font-semibold hover:bg-neon-carrot sm:mt-0 sm:ml-2">Testimonials</a>
                <a href="#"
                   class="mt-1 block px-2 py-1 text-zircon font-semibold hover:bg-neon-carrot sm:mt-0 sm:ml-2">Portfolio</a>
            </nav>
        </header>

        <main class="flex-grow">
            <slot></slot>
        </main>

        <footer class="bg-black-rock">
            <div class="container mx-auto px-6">
                <div class="mt-6 border-t-2 border-gray-300 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-zircon font-bold mb-2">
                            &#169; {{ new Date().getFullYear() }} by Villaflor
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "AppLayout",
    data() {
        return {
            isOpen: false,
        }
    }
}
</script>

<style scoped>

</style>
