<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Stories</h3>

                        <div class="card-tools">
                            <button class="btn btn-sm btn-primary" @click="newModal">Create Story</button>
                        </div>
                    </div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addnewLabel">Create Story</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="submit()" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input v-model="form.title" type="text" class="form-control" name="title"
                                               id="title"
                                               placeholder="Title"
                                               :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select v-model="form.status" class="form-control" name="status" id="status"
                                                :class="{ 'is-invalid': form.errors.has('level') }">
                                            <option selected value="">--Select Status--</option>
                                            <option value="published">Published</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <vue-editor v-model="form.bcontent" id="content"></vue-editor>
                                <has-error :form="form" field="bcontent"></has-error>
                            </div>
                            <div class="form-group">
                                <label for="image">Headline Image</label>
                                <input type="file" @change="fieldChange" class="form-control-file" id="image"
                                       accept="image/*"
                                       :class="{ 'is-invalid': form.errors.has('image') }" name="image">
                                <has-error :form="form" field="image"></has-error>
                            </div>
                            <div class="col">
                                <label for="category">Category</label><br>
                                <div class="form-check form-check-inline" v-for="cat in categories.data" :key="cat.id">
                                    <input v-model="form.category" class="form-check-input" type="radio"
                                           name="category" id="category" :value="cat.id"
                                           :class="{ 'is-invalid': form.errors.has('mliving') }">
                                    <label class="form-check-label">{{cat.name}}</label>
                                    <has-error :form="form" field="category"></has-error>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {VueEditor} from "vue2-editor";

    export default {
        name: "Blog",
        components: {
            VueEditor
        },
        data() {
            return {
                categories: '',
                attachments: [],
                formf: new FormData(),
                form: new Form({
                    title: '',
                    status: '',
                    bcontent: '',
                    category: '',
                    image: [],
                })
            }
        },
        methods: {
            submit(){

                for (let i = 0; i < this.attachments.length; i++) {
                    this.formf.append('image[]', this.attachments[i]);
                }
                this.formf.append('title', this.form.title);
                this.formf.append('status', this.form.status);
                this.formf.append('bcontent', this.form.bcontent);
                this.formf.append('category', this.form.category);
                // this.formf.append('image[]', this.attachments);


                const config = {headers: {'Content-Type': 'multipart/form-data'}};

                axios.post('/api/blog', this.formf, config).then(response => {
                    $('#addnew').modal('hide');
                    this.form.reset();
                    swal.fire({
                        type: 'success',
                        title: 'Submited!!',
                        text: 'Successfully',

                    })

                })
                    .catch(response => {
                        //error
                    });
            },
            fieldChange(e) {
                let selectedFiles = e.target.files;
                if (!selectedFiles.length) {
                    return false;
                }
                for (let i = 0; i < selectedFiles.length; i++) {
                    this.attachments.push(selectedFiles[i]);
                }
            },
            getCategories() {
                axios.get("/api/category").then(({data}) => ([this.categories = data]));
            },
            newModal() {
                this.form.reset();
                $('#addnew').modal('show');
            },
        },
        created() {
            this.getCategories();
        }
    }
</script>

<style scoped>

</style>