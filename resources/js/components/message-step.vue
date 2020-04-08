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
