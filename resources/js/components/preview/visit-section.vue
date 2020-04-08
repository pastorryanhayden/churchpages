<template>
    <div>
        <div class="bg-gray-50" v-if="visit">
            <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Plan A Visit
                </h2>
                <div class="mt-6 border-t-2 border-gray-200 pt-6">
                    <dl>
                        <div class="md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Where are you located?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    Our address is 2012 S Madison St, Whiteville, NC.
                                </p>
                                <iframe class="mt-6"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13185.067219710958!2d-78.7364954125794!3d34.29274435726071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89aa8b75613e4561%3A0x2667399805bc6ed5!2s2012%20S%20Madison%20St%2C%20Whiteville%2C%20NC%2028472!5e0!3m2!1sen!2sus!4v1585826269151!5m2!1sen!2sus"
                                    width="600" height="450" frameborder="0" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                When do you meet?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    Our Sunday service schedule is as follows:

                                    <br>
                                    9:45am -- Sunday School
                                    <br>
                                    11:00am -- Morning Service
                                    <br>
                                    6:00pm -- Evening Service
                                </p>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Do you have anything for children?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    We have a nursery available for children under four that is staffed
                                    during all of our services.
                                </p>
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50" v-else>
            <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Plan A Visit
                </h2>
                <div class="mt-6 border-t-2 border-gray-200 pt-6">
                    <dl>
                        <div class="md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Where are you located?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    Our address is 2012 S Madison St, Whiteville, NC.
                                </p>
                                <iframe class="mt-6"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13185.067219710958!2d-78.7364954125794!3d34.29274435726071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89aa8b75613e4561%3A0x2667399805bc6ed5!2s2012%20S%20Madison%20St%2C%20Whiteville%2C%20NC%2028472!5e0!3m2!1sen!2sus!4v1585826269151!5m2!1sen!2sus"
                                    width="600" height="450" frameborder="0" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                When do you meet?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    Our Sunday service schedule is as follows:

                                    <br>
                                    9:45am -- Sunday School
                                    <br>
                                    11:00am -- Morning Service
                                    <br>
                                    6:00pm -- Evening Service
                                </p>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Do you have anything for children?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    We have a nursery available for children under four that is staffed
                                    during all of our services.
                                </p>
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>
