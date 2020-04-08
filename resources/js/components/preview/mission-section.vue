<template>
    <div>
        <div class="bg-gray-50 overflow-hidden" v-if="mission">
            <div class="relative max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
                </svg>

                <div class="relative lg:grid lg:grid-cols-3 lg:col-gap-8">
                    <div class="lg:col-span-1">
                        <h3
                            class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                            {{ mission.title ? mission.title : 'Our Mission Is To:' }}
                        </h3>
                    </div>
                    <div
                        class="mt-10 sm:grid sm:grid-cols-2 sm:col-gap-8 sm:row-gap-10 lg:col-span-2 lg:mt-0">
                        <div>
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Preach the Gospel to
                                    the Lost</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    And he said unto them, Go ye into all the world, and preach the gospel to
                                    every creature.
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Mark 16:15</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Edify the Saints in
                                    "Their Most Holy Faith"</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    But ye, beloved, building up yourselves on your most holy faith, praying
                                    in the Holy Ghost,
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Jude 20</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 6.25278V19.2528M12 6.25278C10.8321 5.47686 9.24649 5 7.5 5C5.75351 5 4.16789 5.47686 3 6.25278V19.2528C4.16789 18.4769 5.75351 18 7.5 18C9.24649 18 10.8321 18.4769 12 19.2528M12 6.25278C13.1679 5.47686 14.7535 5 16.5 5C18.2465 5 19.8321 5.47686 21 6.25278V19.2528C19.8321 18.4769 18.2465 18 16.5 18C14.7535 18 13.1679 18.4769 12 19.2528"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Carefully teach the
                                    Word of God</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    Study to shew thyself approved unto God, a workman that needeth not to be
                                    ashamed, rightly dividing the word of truth.
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- 2 Timothy 2:15</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Prepare the Saints for
                                    "The Work of Ministry"</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    For the perfecting of the saints, for the work of the ministry, for the
                                    edifying of the body of Christ:
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Ephesians 4:12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 overflow-hidden" v-else>
            <div class="relative max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
                </svg>

                <div class="relative lg:grid lg:grid-cols-3 lg:col-gap-8">
                    <div class="lg:col-span-1">
                        <h3
                            class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                            Our Mission Is To:
                        </h3>
                    </div>
                    <div
                        class="mt-10 sm:grid sm:grid-cols-2 sm:col-gap-8 sm:row-gap-10 lg:col-span-2 lg:mt-0">
                        <div>
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Preach the Gospel to
                                    the Lost</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    And he said unto them, Go ye into all the world, and preach the gospel to
                                    every creature.
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Mark 16:15</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Edify the Saints in
                                    "Their Most Holy Faith"</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    But ye, beloved, building up yourselves on your most holy faith, praying
                                    in the Holy Ghost,
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Jude 20</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 6.25278V19.2528M12 6.25278C10.8321 5.47686 9.24649 5 7.5 5C5.75351 5 4.16789 5.47686 3 6.25278V19.2528C4.16789 18.4769 5.75351 18 7.5 18C9.24649 18 10.8321 18.4769 12 19.2528M12 6.25278C13.1679 5.47686 14.7535 5 16.5 5C18.2465 5 19.8321 5.47686 21 6.25278V19.2528C19.8321 18.4769 18.2465 18 16.5 18C14.7535 18 13.1679 18.4769 12 19.2528"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Carefully teach the
                                    Word of God</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    Study to shew thyself approved unto God, a workman that needeth not to be
                                    ashamed, rightly dividing the word of truth.
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- 2 Timothy 2:15</p>
                            </div>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Prepare the Saints for
                                    "The Work of Ministry"</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 italic">
                                    For the perfecting of the saints, for the work of the ministry, for the
                                    edifying of the body of Christ:
                                </p>
                                <p class="mt-2 text-base leading-6 text-gray-500">- Ephesians 4:12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'mission']
    }
</script>
