<template>
    <div class="max-w-7xl mx-auto lg:flex">
        <!-- Replace with your content -->
        <div class="preview w-full lg:w-1/2 lg:order-2 ">
        <preview-page :hero="hero" :info="info" :show="'hero'"></preview-page>
        </div>
        <div class="form w-full lg:w-1/2 p-8 flex-1 lg:order-first">
            <div>
            <label for="heading" class="block text-sm font-medium leading-5 text-gray-700">Heading</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="heading" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="It Lives • It Speaks • It Changes Lives" v-model="hero.title"/>
            </div>
            <p class="mt-2 text-sm text-gray-500">Your church name, city and state will be used if you leave this blank.</p>
            </div>
            <div class="mt-6">
            <label for="message" class="block text-sm font-medium leading-5 text-gray-700">Message</label>
            <div class="mt-1 relative rounded-md shadow-sm">
            <textarea name="message" id="message" cols="3" v-model="hero.message" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">Your service times will be used here if you leave this blank.</p>
            </div>
            <div class="mt-6">
            <label for="livestream" class="block text-sm font-medium leading-5 text-gray-700">Livestream Link</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="livestream" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="https://youtube.com/biblebaptistmattoon" v-model="hero.livestream_link"/>
            </div>
            <p class="mt-2 text-sm text-gray-500">Make sure it starts with "https://"</p>
            </div>
            <div class="mt-6">
            <label for="giving" class="block text-sm font-medium leading-5 text-gray-700">Giving Link</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="giving" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="https://tithely.com/afasdfasdfasdf" v-model="hero.giving_link"/>
            </div>
            <p class="mt-2 text-sm text-gray-500">Make sure it starts with "https://".  Use any service you want, but I reccommend tithely.</p>
            </div>
            <div class="mt-6"  >
                            <label for="cover_photo" class="block text-sm leading-5 font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Image
                            </label>
                            <div class="mt-2 " v-if="!hero.image">
                                <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="mt-1 text-sm text-gray-600">
                                    <upload-care :publicKey="uploadCarePublic" @success="onSuccess" @error="onError">
                                    <button type="button"  class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                        Upload a file
                                    </button>
                                    </upload-care>
                                    
                                    </p>
                                    <p class="mt-1 text-xs text-gray-500">
                                    PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="mt-2 sm:mt-0 sm:col-span-2 relative bg-gray-500" v-else>
                                <button class="absolute top-0 right-0" type="button" @click="hero.image = null">
                                    <svg class="h-6 text-red-500" viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM8.70711 7.29289C8.31658 6.90237 7.68342 6.90237 7.29289 7.29289C6.90237 7.68342 6.90237 8.31658 7.29289 8.70711L8.58579 10L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L10 11.4142L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L11.4142 10L12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289C12.3166 6.90237 11.6834 6.90237 11.2929 7.29289L10 8.58579L8.70711 7.29289Z" fill="currentColor"/>
                                    </svg>
                                </button>
                                <img :src="hero.image" class="w-64 h-32 object-contain mx-auto">
                            </div>
                        </div>
                         <div class="mt-12">
                                        <button @click="check"
                                            class="w-full py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                            Save
                                        </button>
                                    </div>
        </div>
        
    </div>
</template>

<script>
    import swal from 'sweetalert';
    export default {
        props: ['user', 'dbinfo', 'dbhero'],
        data() {
            return {
                hero: this.dbhero,
                info: this.dbinfo,
                uploadCarePublic: '757368ca8a68c3e71ade',
            }
        },
        created(){
         
           },
        methods: {
           onSuccess(file) {
                if (file) {
                    this.hero.image = file.cdnUrl
                }
            },
            onError() {
                console.log('error');
            },
            check(){
                if(this.hero == this.dbhero){
                    swal({
                            title: "Are you sure?", 
                            text: "You haven't made any changes.",
                            icon: "warning",
                            buttons: ['Oops', "I'm sure"]
                            })
                            .then((goOn) => {
                                if(goOn){
                                    this.save()
                                }
                            })
                }else{
                    this.save()
                }
            },
            save(){
                axios.post(`/api/hero/${this.user.id}`, this.hero).then((response) => {
                    console.log(response)
                    if(response.data == 'success')
                    {
                        swal({
                            title: "The Hero Section is Saved!", 
                            text: "Are you done here?",
                            icon: "success",
                            buttons: ['Keep editing', 'Move on']
                            })
                            .then((goOn) => {
                                if(goOn){
                                    window.location.href = "/message"
                                }
                            })
                    }
                });
            }
        }

    }

</script>
