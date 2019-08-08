<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <form @submit.prevent="login" @keydown="form.onKeydown($event)">
                            <div class="form-group">
                            <label>Name</label>
                            <input v-model="form.name" type="text" name="name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                            <label>Email</label>
                            <input v-model="form.email" type="email" name="email"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                            <label>Password</label>
                            <input v-model="form.password" type="password" name="password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                            </div>

                            <button type="button" class="btn btn-primary" @click="checkUser()">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="TaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Task Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <label for="title">Title</label>
                                <input v-model="form.title" type="text" class="form-control" name="title" id="title"
                                       placeholder="Title" :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
                            </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <label for="level">Level</label>
                                <select v-model="form.level" class="form-control" name="level" id="level"
                                        :class="{ 'is-invalid': form.errors.has('level') }">
                                    <option selected value="">--Select Status--</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Draft">Draft</option>
                                </select>
                                <has-error :form="form" field="level"></has-error>
                            </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <label for="status">Subject</label>
                                <select v-model="form.subject" class="form-control" name="subject" id="subject"
                                        :class="{ 'is-invalid': form.errors.has('subject') }">
                                    <option selected value="">--Select Status--</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Draft">Draft</option>
                                </select>
                                <has-error :form="form" field="subject"></has-error>
                            </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <label for="type">Document Type</label>
                                <select v-model="form.type" class="form-control" name="type" id="type"
                                        :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option selected value="">--Select Status--</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Draft">Draft</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <label for="date">Deadline Date</label>
                                <input v-model="form.date" type="date" class="form-control" name="date" id="date"
                                       placeholder="Date" :class="{ 'is-invalid': form.errors.has('date') }">
                                <has-error :form="form" field="date"></has-error>
                            </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <label for="time">Time</label>
                                <input v-model="form.time" type="time" class="form-control" name="time" id="time"
                                       placeholder="Time" :class="{ 'is-invalid': form.errors.has('time') }">
                                <has-error :form="form" field="time"></has-error>
                            </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task">Task</label>
                                <textarea v-model="form.task" class="form-control" id="task" rows="3"
                                          :class="{ 'is-invalid': form.errors.has('task') }"></textarea>
                                <has-error :form="form" field="task"></has-error>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-send"></i>
                                Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                form: new Form({
                    name: '',
                    email: '',
                    password: ''
                })
            }
        },
        methods: {
            // launchModal(){
            //     $('#TaskModal').modal('show');
            // },
            checkUser(){
                this.form.post('api/checkuser')
                    .then(() => {
                        
                        $('#TaskModal').modal('show');
                        toast.fire({
                            type: 'success',
                            title: 'Posted Successfully'
                        });
                    })
                    .catch(error => {
                       this.errors = error.response.data.errors;
                       set (email, error.response.data.msg);
                    })
            }
        },
        created() {
            
        }
    }
</script>
