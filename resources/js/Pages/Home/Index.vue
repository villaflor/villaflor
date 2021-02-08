<template>
    <AppLayout>
        <div class="2xl:px-64 sm:px-32 py-32 grid grid-rows-3 grid-cols-2 gap-10">
            <div class="row-span-2 col-span-1">
                <h1 class="text-6xl text-zircon break-words">Mark Anthony Villaflor.</h1>
            </div>
            <div class="row-span-2 col-span-1">
                <p class="text-manatee break-words">&#9472; Introduction</p>
                <h2 class="text-2xl text-zircon break-words py-4">Computer Programmer / Backend Developer</h2>
                <p class="text-manatee break-words">Honours student of Seneca College with two web programming
                    project completed.</p>
            </div>
            <div class="flex row-span-1 col-span-1">
                <a href="https://google.com">
                    <font-awesome-icon class="text-2xl text-zircon mr-3" :icon="['fas', 'globe-americas']"/>
                </a>
                <a href="https://google.com">
                    <font-awesome-icon class="text-2xl text-zircon mr-3" :icon="['fab', 'linkedin-in']"/>
                </a>
                <a href="https://google.com">
                    <font-awesome-icon class="text-2xl text-zircon mr-3" :icon="['fab', 'github']"/>
                </a>
            </div>
            <div class="row-span-1 col-span-1">
                <a href="google.com" class="text-neon-carrot"><span class="underline ">My Portfolio</span> <span
                    class="animate-pulse">&#8594;</span></a>
            </div>
        </div>

        <div class="bg-haiti 2xl:px-64 sm:px-32 py-32 grid grid-rows-2 grid-cols-4 gap-10">
            <div class="row-span-2 col-span-1">
                <p class="text-manatee break-words">&#9472; Other Skills</p>

                <h2 class="text-2xl text-zircon break-words mt-5">Vue.js <span class="text-manatee">|</span> C#
                    <span class="text-manatee">|</span> ASP.Net <span class="text-manatee">|</span> HTML <span
                        class="text-manatee">|</span> Database Design <span class="text-manatee">|</span> Git <span
                        class="text-manatee">|</span> Rest API <span class="text-manatee">|</span> JavaScript</h2>
            </div>
            <div class="row-span-2 col-span-3">
                <p class="text-manatee break-words">&#9472; Top Skills</p>
                <div class="grid grid-rows-1 grid-cols-3 h-full">
                    <div class="row-span-1 col-span-1 bg-black-rock m-5 p-10 w-72 h-72">
                        <h1 class="text-6xl text-center text-zircon">Laravel</h1>
                        <div class="grid grid-rows-1 grid-cols-2 mt-12">
                            <p class="row-span-1 col-span-1 text-zircon text-center text-5xl">2</p>
                            <p class="row-span-1 col-span-1 text-neon-carrot break-words">Years of Experience.</p>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 bg-black-rock m-5 p-10 w-72 h-72">
                        <h1 class="text-6xl text-center text-zircon">PHP</h1>
                        <div class="grid grid-rows-1 grid-cols-2 mt-12">
                            <p class="row-span-1 col-span-1 text-zircon text-center text-5xl">3</p>
                            <p class="row-span-1 col-span-1 text-neon-carrot break-words">Years of Experience.</p>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 bg-black-rock m-5 p-10 w-72 h-72">
                        <h1 class="text-6xl text-center text-zircon">MySQL</h1>
                        <div class="grid grid-rows-1 grid-cols-2 mt-12">
                            <p class="row-span-1 col-span-1 text-zircon text-center text-5xl">3</p>
                            <p class="row-span-1 col-span-1 text-neon-carrot break-words">Years of Experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black-rock 2xl:px-64 sm:px-32 py-32">
            <p class="text-manatee break-words">&#9472; Work Experiences</p>
<!--            <div class="flex gap-16 mt-5 p-10">-->
            <div class="grid grid-cols-4 gap-10 mt-5 p-10">
                <div class="col-span-1">
                    <h2 class="text-2xl text-zircon break-words">Developer Specialist</h2>
                    <p class="text-manatee break-words">September, 2019 - Present</p>
                </div>
                <div class="col-span-2">
                    <h2 class="text-2xl text-zircon break-words">Wise Publishing, Inc.</h2>
                    <p class="text-manatee break-words">Permanent Full-time</p>
                </div>
                <div class="col-span-1">
                    <p class="text-zircon break-words"><font-awesome-icon class="text-xl text-neon-carrot mr-3" :icon="['fas', 'map-marker-alt']"/> Toronto, Canada</p>
                </div>

                <div class="col-span-1">
                    <h2 class="text-2xl text-zircon break-words">Developer Intern</h2>
                    <p class="text-manatee break-words">May, 2019 - August, 2019</p>
                </div>
                <div class="col-span-2">
                    <h2 class="text-2xl text-zircon break-words">Wise Publishing, Inc.</h2>
                    <p class="text-manatee break-words">Internship</p>
                </div>
                <div class="col-span-1">
                    <p class="text-zircon break-words"><font-awesome-icon class="text-xl text-neon-carrot mr-3" :icon="['fas', 'map-marker-alt']"/> Toronto, Canada</p>
                </div>
            </div>
        </div>
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
