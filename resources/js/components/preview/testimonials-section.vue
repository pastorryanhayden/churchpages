<template>
    <div>
        <div class="bg-indigo-800" v-if="testimonials">
            <div class="max-w-screen-xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
                <div
                    class="py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-indigo-900 lg:pr-16">
                    <div class="md:flex-shrink-0 h-8">
                    </div>
                    <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                        <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                                fill="currentColor" viewBox="0 0 32 32">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative">
                                I feel like I am with family that I have known for years who love me no matter
                                what. It is a wonderful, Bible based Church. We do not look to step on
                                anyone's toes, but we do not stand by and do nothing when someone is headed
                                down the wrong path.
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full object-cover" src="/reese.png"
                                        alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base leading-6 font-medium text-white">Jennifer Reese
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div
                    class="py-12 px-4 border-t-2 border-indigo-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
                    <div class="md:flex-shrink-0 h-8">
                    </div>
                    <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                        <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                                fill="currentColor" viewBox="0 0 32 32">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative h-28">
                                I would tell people that I have felt more love by this church family and the
                                preacher than anywhere I have ever attended.
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full object-cover" src="/price.jpg"
                                        alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base leading-6 font-medium text-white">Judith Black</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>





        </div>
        <div class="bg-indigo-800" v-else>
            <div class="max-w-screen-xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
                <div
                    class="py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-indigo-900 lg:pr-16">
                    <div class="md:flex-shrink-0 h-8">
                    </div>
                    <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                        <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                                fill="currentColor" viewBox="0 0 32 32">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative">
                                I feel like I am with family that I have known for years who love me no matter
                                what. It is a wonderful, Bible based Church. We do not look to step on
                                anyone's toes, but we do not stand by and do nothing when someone is headed
                                down the wrong path.
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full object-cover" src="/reese.png"
                                        alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base leading-6 font-medium text-white">Jennifer Reese
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div
                    class="py-12 px-4 border-t-2 border-indigo-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
                    <div class="md:flex-shrink-0 h-8">
                    </div>
                    <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                        <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                                fill="currentColor" viewBox="0 0 32 32">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative h-28">
                                I would tell people that I have felt more love by this church family and the
                                preacher than anywhere I have ever attended.
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full object-cover" src="/price.jpg"
                                        alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base leading-6 font-medium text-white">Judith Black</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>





        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>
