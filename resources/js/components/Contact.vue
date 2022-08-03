<template>
    <div style="width: 75vh;">
        <form class="w-full" v-if="!isSubmited">
            <h2 class="text-2xl mb-5 font-semibold ">Contact Form</h2>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Name
                    </label>
                    <input v-model="formData.name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="Jane">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('name')" v-text="validationErrors.name[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Phone
                    </label>
                    <input v-model="formData.phone"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="999-9999-999">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('phone')" v-text="validationErrors.phone[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        E-mail
                    </label>
                    <input v-model="formData.email"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('email')" v-text="validationErrors.email[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Message
                    </label>
                    <textarea v-model="formData.message"
                        class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                        id="message"></textarea>
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('message')"
                            v-text="validationErrors.message[0]"></span>
                    </p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button @click.prevent="submitForm"
                        class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="button">
                        Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>
        <div class="form-submited" v-else>
            <h2 class="text-center text-2xl font-semibold font-serif">Thank you for paticipating!</h2>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                isSubmited: false,
                formData: {
                    name: '',
                    phone: '',
                    email: '',
                    message: '',
                },
                validationErrors: {},
            }
        },
        mounted() {},

        methods: {
            submitForm() {
                this.validationErrors = {};
                this.isSubmited = false;
                axios
                    .post('/contact', this.formData)
                    .then(response => {
                        console.log(response.data);
                        if (response.status === 200) {
                            this.isSubmited = true
                        }
                    })
                    .catch(e => {
                        if (e.response.status === 422) {
                            // let errors = Object.values(e.response.data.errors);
                            // this.validationErrors = errors.flat()
                            this.validationErrors = e.response.data.errors
                        }
                    })

            }
        }
    }
</script>
