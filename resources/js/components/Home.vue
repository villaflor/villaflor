<template>
    <div>
        <div class="container mx-auto px-8 lg:px-48 xl:grid xl:grid-cols-2">
            <div class="mt-24">
                <h2 class="leading-tight text-7xl font-serif font-bold">Turn my {{ getWord() }} into an Open Source project</h2>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="w-64" :src=getHero()>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            words: [
                'passion',
                'pastime',
                'hobby'
            ],
            hero: [
                '/assests/package-open.gif',
                '/assests/php-code.gif',
                '/assests/code-fork.gif'
            ],
        }
    },
    methods: {
        getWord() {
            return this.words[Math.floor(Math.random() * this.words.length)];
        },
        getHero() {
            return this.hero[Math.floor(Math.random() * this.hero.length)];
        }
    }
}
</script>
