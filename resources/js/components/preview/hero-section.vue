<template>
    <div>
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-screen-xl mx-auto ">
                <div
                    class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <div class="pt-6 px-4 sm:px-6 lg:px-8">

                    </div>


                    <div
                        class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h2
                                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl" v-if="hero.title">
                                {{hero.title}}
                            </h2>
                            <h2
                                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl" v-else>
                                {{info.church_name}}
                                <br class="xl:hidden" />
                                <span class="text-indigo-600">{{info.city}}, {{info.state}}</span>
                            </h2>
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0" v-html="hero.message ? message : times">
                            </p>
                            
                            <div v-if="hero.giving_link || hero.livestream_link">
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow" v-if="hero.livestream_link">
                                        <a :href="hero.livestream_link" target="blank"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                            Watch Online
                                        </a>
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3" v-if="hero.giving_link">
                                        <a :href="hero.giving_link" target="blank"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                            Give Online
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    :src="hero.image ? hero.image : 'https://unsplash.com/photos/FmGOYRbMrJ8/download?w=1920'" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
import marked from "marked";
    export default {
        props: ['hero', 'info'],
        computed: {
            times(){
                return marked(this.info.service_times)
            },
            message(){
                 return marked(this.hero.message)
            }
        }
    }

</script>
