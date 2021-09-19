<template>
    <div>
        <div class="container mx-auto px-8 lg:px-48">
            <h2 class="text-3xl font-serif font-bold">About</h2>

            <p class="mt-10 text-justify leading-loose">
                Open source is a cornerstone of software development that permeates nearly every new piece of
                technology, and all good software development teams know how vital it is to contribute. With
                decentralized workforces taking off as well, open source projects are benefiting both employers and
                developers by making it easier to check code quality of past projects and to showcase skills while
                giving back to the community. But saying that it's important to contribute to open source isn't about
                normative ethics or gaining moral high ground by giving to the community instead of taking, it's about
                deliberately going against the bystander effect to help human adaptability catch up with technology.
            </p>

            <div class="mt-16">
                <blockquote
                    class="relative p-4 pl-10 italic bg-white text-neutral-600 border-neutral-500 quote rounded-xl md:w-1/2">
                    <div aria-hidden="true"
                         class="stylistic-quote-mark mr-2 hidden font-dank-mono text-gray-400 absolute top-1 left-0.5 leading-none sm:block">
                        &ldquo;
                    </div>
                    <p class="mb-4">I made a Laravel library for Cloudflare API that I was using at the time...and I decided to open
                        source it. So I made some changes to make it more dynamic, then committed it to Github and submitted it to Packagist. I also
                        produced my first documentation, demonstrating how to use it in other developers' projects.
                        Because it was such a basic project, it's unlikely that anyone ever used it, but I was proud of
                        my effort and I was feeling good about my contribution to Open Source community.</p>
                    <cite class="flex items-center">
                        <img alt="Avatar of Mark" class="w-12 mr-4 rounded-full bg-neutral-500"
                             src="/assests/mark-anthony.jpg"/>
                        <div class="flex flex-col items-start">
                        <span class="mb-1 text-sm not-italic font-bold">
                          Mark Anthony
                        </span>
                            <a class="text-sm not-italic" href="#" rel="noopener noreferrer" target="_blank">
                                Programmer
                            </a>
                        </div>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</template>

<style scoped>
.stylistic-quote-mark {
    font-size: 5rem;
    right: 100%;
}
</style>
