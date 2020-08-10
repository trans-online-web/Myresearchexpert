<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="row">
                    <form class="form-inline d-flex">
                        <div class="form-group">
                            <label for="exampleInputEmail">Email:</label>
                            <input v-model="form.email" type="email" name="email" id="exampleInputEmail"
                                   class="form-control m-2" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                            <button type="button" @click="send()" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    email: ''
                })
            }
        },
        methods: {
            send() {
                if (!this.form.email) {
                    this.form.errors.set({
                        email: 'This field is required'
                    })
                    return false;
                } else {
                    this.form.post('/api/newsletter')
                        .then(() => {
                            swal.fire(
                                'SUCCESS!',
                                'thank you for subscribing',
                                'success',
                            )
                            Fire.$emit('entry');
                        })
                        .catch(error => {
                            this.errors = error.response.data.errors;
                            swal.fire({
                                type: 'error',
                                title: 'Error!',
                                text: error.response.data.msg,
                        }
                        )
                        })
                }
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
