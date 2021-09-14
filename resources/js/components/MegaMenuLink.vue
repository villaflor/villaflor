<template>
    <a class="flex group" :href="href" target="_blank" >
        <slot/>
        <span class="ml-2">
            <span class="block font-bold text-blue-800 group-hover:text-blue-800 flex items-center">
                <span>{{ title }}</span>
                <span v-if="isNew" class="ml-2 bg-yellow-500 text-yellow-800 px-2 py-1 rounded-full uppercase font-bold text-xxs">New</span>
            </span>
            <span class="block text-sm text-gray-600 group-hover:text-blue-800">{{ subtitle }}</span>
        </span>
    </a>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },
    props: ['href', 'title', 'subtitle', 'isNew']
}
</script>

<style scoped>

</style>
