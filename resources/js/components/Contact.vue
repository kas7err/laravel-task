<template>
    <div class="w-full max-md-xs">
        <form v-if="inquiry === null">
            <h2 class="text-3xl mb-5 font-semibold text-blue-400">Please fill out our form</h2>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-name">
                        Name
                    </label>
                    <input v-model="formData.name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-name" type="text" placeholder="Jane">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('name')" v-text="validationErrors.name[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-phone">
                        Phone
                    </label>
                    <input v-model="formData.phone"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-phone" type="text" placeholder="999-9999-999">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('phone')" v-text="validationErrors.phone[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-email">
                        E-mail
                    </label>
                    <input v-model="formData.email"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email">
                    <p class="text-red-500 text-xs italic" v-show="(Object.keys(validationErrors).length !== 0)">
                        <span v-if="validationErrors.hasOwnProperty('email')" v-text="validationErrors.email[0]"></span>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-message">
                        Message
                    </label>
                    <textarea v-model="formData.message"
                        class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                        id="grid-message"></textarea>
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
            <h2 class="text-left text-3xl font-bold font-serif mb-3 text-blue-400">New Inquery has been Created</h2>
            <p>Name: {{inquiry.name}}</p>
            <p>Phone: {{inquiry.phone}}</p>
            <p>Email: {{inquiry.email}}</p>
            <p>Message: {{inquiry.message}}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                inquiry: null,
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
                this.inquiry = null;
                axios
                    .post('/contact', this.formData)
                    .then(response => {
                        console.log(response.data);
                        if (response.status === 200) {
                            console.log(response.data);
                            this.inquiry = response.data
                        }
                    })
                    .catch(e => {
                        if (e.response.status === 422) {
                            this.validationErrors = e.response.data.errors
                        }
                    })

            }
        }
    }
</script>
