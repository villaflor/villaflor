<template>
    <div
        class="relative"
        @mouseleave="hideMenu"
        @mouseover="showMenu"
    >
        <Link :class="classes" :href="href">
            <slot/>
        </Link>

        <div class="absolute w-full">&nbsp;</div>
        <transition name="mega-menu-fade">
            <div v-show="isVisible"
                 class="mega-menu absolute normal-case font-normal bg-white shadow-md rounded-lg overflow-hidden border mt-4 w-full lg:w-160 z-30 lg:z-10 left-0 lg:-left-16">
                <div class="flex flex-col lg:flex-row px-8 py-6 border-b -mx-4">
                    <ul class="w-full lg:w-1/2 px-4">
                        <li class="mb-8">
                            <MegaMenuLink
                                href="https://packagist.org/packages/villaflor/connection"
                                title="Connection"
                                subtitle="Helps users connect to an API"
                                :is-new="true">

                                <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                     height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"/>
                                </svg>

                            </MegaMenuLink>
                        </li>
                        <li class="mb-8 lg:mb-0">
                            <MegaMenuLink
                                href="https://packagist.org/packages/villaflor/taboola-sdk"
                                title="Taboola Report"
                                subtitle="Track your Taboola campaigns"
                                :is-new="true">

                                <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                     height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M21 8c-1.45 0-2.26 1.44-1.93 2.51l-3.55 3.56c-.3-.09-.74-.09-1.04 0l-2.55-2.55C12.27 10.45 11.46 9 10 9c-1.45 0-2.27 1.44-1.93 2.52l-4.56 4.55C2.44 15.74 1 16.55 1 18c0 1.1.9 2 2 2 1.45 0 2.26-1.44 1.93-2.51l4.55-4.56c.3.09.74.09 1.04 0l2.55 2.55C12.73 16.55 13.54 18 15 18c1.45 0 2.27-1.44 1.93-2.52l3.56-3.55c1.07.33 2.51-.48 2.51-1.93 0-1.1-.9-2-2-2z"/>
                                    <path d="m15 9 .94-2.07L18 6l-2.06-.93L15 3l-.92 2.07L12 6l2.08.93zM3.5 11 4 9l2-.5L4 8l-.5-2L3 8l-2 .5L3 9z"/>
                                </svg>
                            </MegaMenuLink>
                        </li>
                    </ul>
                    <ul class="w-full lg:w-1/2 px-4">
                        <li class="mb-8">
                            <MegaMenuLink
                                href="https://packagist.org/packages/villaflor/laravel-cloudflare"
                                title="Laravel Cloudflare"
                                subtitle="Laravel library for Cloudflare API">

                                <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                     height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M19.35 10.04A7.49 7.49 0 0 0 12 4a7.48 7.48 0 0 0-6.64 4.04A5.996 5.996 0 0 0 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4h2c0-2.76-1.86-5.08-4.4-5.78C8.61 6.88 10.2 6 12 6c3.03 0 5.5 2.47 5.5 5.5v.5H19c1.65 0 3 1.35 3 3s-1.35 3-3 3z"/>
                                </svg>
                            </MegaMenuLink>
                        </li>
                        <li class="">
                            <MegaMenuLink
                                href="https://packagist.org/packages/villaflor/laravel-ip-address"
                                title="Laravel IP Address"
                                subtitle="Laravel library that retrieves IP Address">

                                <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                     height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/>
                                </svg>
                            </MegaMenuLink>
                        </li>
                    </ul>
                </div>
                <ul class="bg-gray-100 px-8 py-8">
                    <li class="mb-6">
                        <MegaMenuSubLink
                            href="/"
                            :active=false
                            title="Documentation"
                            subtitle="Start integrating packages">

                            <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                 height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path class="heroicon-ui"
                                      d="M18 21H7a4 4 0 0 1-4-4V5c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2h2a2 2 0 0 1 2 2v11a3 3 0 0 1-3 3zm-3-3V5H5v12c0 1.1.9 2 2 2h8.17a3 3 0 0 1-.17-1zm-7-3h4a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2zm0-4h4a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2zm0-4h4a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2zm9 11a1 1 0 0 0 2 0V7h-2v11z"/>
                            </svg>
                        </MegaMenuSubLink>
                    </li>
                    <li>
                        <MegaMenuSubLink
                            href="/"
                            :active=false
                            title="Open Source"
                            subtitle="Giving back to the community">

                            <svg class="text-blue-500 group-hover:text-blue-800" fill="currentColor"
                                 height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path class="heroicon-ui"
                                      d="M20.59 12l-3.3-3.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4l3.3-3.3zM3.4 12l3.3 3.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4A1 1 0 0 1 6.7 8.7L3.4 12zm7.56 8.24a1 1 0 0 1-1.94-.48l4-16a1 1 0 1 1 1.94.48l-4 16z"/>
                            </svg>
                        </MegaMenuSubLink>
                    </li>
                </ul>
            </div>
        </transition>
    </div>
</template>

<script>

import {Link} from "@inertiajs/inertia-vue3";
import MegaMenuLink from "@/components/MegaMenuLink";
import MegaMenuSubLink from "@/components/MegaMenuSubLink";

export default {
    props: ['href', 'active'],
    components: {
        Link,
        MegaMenuLink,
        MegaMenuSubLink,
    },
    mounted() {
        this.menuItems = document.querySelectorAll('.mega-menu a')
    },
    data() {
        return {
            isVisible: false,
            menuItems: null,
            focusedIndex: 0,
        }
    },
    computed: {
        classes() {
            return this.active
                ? 'text-copy-primary hover:text-gray-600 border-b-2 border-indigo-600'
                : 'text-copy-primary hover:text-gray-600'
        }
    },
    methods: {
        showMenu() {
            this.isVisible = true
        },
        hideMenu() {
            this.isVisible = false
            this.focusedIndex = 0
        },
        startArrowKeys() {
            this.menuItems[0].focus()
        },
        focusPrevious(isArrowKey) {
            this.focusedIndex = this.focusedIndex - 1

            if (isArrowKey) {
                this.focusItem()
            }
        },
        focusNext(isArrowKey) {
            this.focusedIndex = this.focusedIndex + 1

            if (isArrowKey) {
                this.focusItem()
            }
        },
        focusItem() {
            this.menuItems[this.focusedIndex].focus()
        }
    }
}
</script>

<style scoped>
.mega-menu-fade-enter-active, .mega-menu-fade-leave-active {
    transition: all .1s ease-in-out;
}

.mega-menu-fade-enter, .mega-menu-fade-leave-to {
    opacity: 0;
    transform: translateY(-12px);
}
</style>
