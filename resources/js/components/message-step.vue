<template>
    <div class="max-w-7xl mx-auto lg:flex">
        <!-- Replace with your content -->
        <div class="preview w-full lg:w-1/2 lg:order-2 ">
            <preview-page :message="message" :info="info" :show="'message'"></preview-page>
        </div>
        <div class="form w-full lg:w-1/2 p-8 flex-1 lg:order-first">
            <div>
                <label for="heading" class="block text-sm font-medium leading-5 text-gray-700">Heading</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input id="heading" class="form-input block w-full sm:text-sm sm:leading-5"
                        placeholder="Our Mission Is To" v-model="message.title" />
                </div>
                <p class="mt-2 text-sm text-gray-500">Short intro for your main messaging</p>
            </div>
            <span class="inline-flex rounded-md shadow-sm">
  <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150" @click="addItem">
    <svg class="-ml-1 mr-3 h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 7C11 6.44772 10.5523 6 10 6C9.44772 6 9 6.44772 9 7V9H7C6.44772 9 6 9.44771 6 10C6 10.5523 6.44772 11 7 11H9V13C9 13.5523 9.44772 14 10 14C10.5523 14 11 13.5523 11 13V11H13C13.5523 11 14 10.5523 14 10C14 9.44772 13.5523 9 13 9H11V7Z" fill="currentColor"/>
                </svg>
    Add Section
  </button>
</span>
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
        props: ['user', 'dbinfo', 'dbmessage'],
        data() {
            return {
                message: this.dbmessage,
                info: this.dbinfo,
                uploadCarePublic: '757368ca8a68c3e71ade',
            }
        },
        created() {

        },
        methods: {
            check() {
                if (this.hero == this.dbhero) {
                    swal({
                            title: "Are you sure?",
                            text: "You haven't made any changes.",
                            icon: "warning",
                            buttons: ['Oops', "I'm sure"]
                        })
                        .then((goOn) => {
                            if (goOn) {
                                this.save()
                            }
                        })
                } else {
                    this.save()
                }
            },
            addItem(){
                if(!this.message.items){
                    this.message.items = [];
                }
                this.message.items.push({
                    icon: '',
                    title: "Example Title",
                    body: ""
                })
            },
            save() {
                axios.post(`/api/hero/${this.user.id}`, this.hero).then((response) => {
                    console.log(response)
                    if (response.data == 'success') {
                        swal({
                                title: "The Hero Section is Saved!",
                                text: "Are you done here?",
                                icon: "success",
                                buttons: ['Keep editing', 'Move on']
                            })
                            .then((goOn) => {
                                if (goOn) {
                                    window.location.href = "/message"
                                }
                            })
                    }
                });
            }
        }

    }

</script>
