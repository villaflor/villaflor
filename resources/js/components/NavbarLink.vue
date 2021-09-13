<template>
    <Link :class="classes" :href="href">
        <slot/>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },
    props: ['href', 'active'],
    computed: {
        classes() {
            return this.active
                ? 'text-copy-primary hover:text-gray-600 border-b-2 border-indigo-600'
                : 'text-copy-primary hover:text-gray-600'
        }
    }
}
</script>
