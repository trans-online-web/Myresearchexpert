<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Levels</h3>

                        <div class="card-tools">
                            <button class="btn btn-sm btn-primary" @click="newModal">Add Category</button>
                        </div>
                    </div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addnewLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="addLevel()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Category</label>
                                <input v-model="form.category" type="text" name="category"
                                       placeholder="Enter Category"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('category') }">
                                <has-error :form="form" field="category"></has-error>
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
    export default {
        name: "BlogCategories",
        data(){
            return {
                form: new Form({
                    category: ''
                })
            }
        },
        methods: {
            newModal(){
                this.form.reset();
                $('#addnew').modal('show');
            },
        }
    }
</script>

<style scoped>

</style>