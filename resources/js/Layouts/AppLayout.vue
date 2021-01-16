<template>
    <div class="flex flex-col h-screen bg-2B2E3A">
        <header></header>
        <nav>
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    </div>
                </div>
            </div>
        </nav>
        <main class="flex-grow">
            <slot></slot>
        </main>

        <footer>
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "AppLayout"
}
</script>

<style scoped>

</style>
