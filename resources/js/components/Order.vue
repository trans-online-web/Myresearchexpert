<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post Task</div>

                    <div class="card-body">
                        <form @submit.prevent="" enctype="multipart/form-data">
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
                                    <option selected value="">--Select Level--</option>
                                    <option v-for="level in levels.data" :key="level['name']" :value="level['name']">{{ level.name}}</option>
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
                                    <option v-for="subject in subjects.data" :key="subject['name']" :value="subject['name']">{{ subject.name}}</option>
                                </select>
                                <has-error :form="form" field="subject"></has-error>
                            </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <label for="type">Document Type</label>
                                <select v-model="form.type" class="form-control" name="type" id="type"
                                        :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option selected value="">--Select Document Type--</option>
                                    <option v-for="document in documents.data" :key="document['name']" :value="document['name']">{{ document.name}}</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <label for="pages">No. of Pages</label>
                                <input v-model="form.pages" type="number" min="1" class="form-control" name="pages" id="pages"
                                       placeholder="Pages" :class="{ 'is-invalid': form.errors.has('pages') }">
                                <has-error :form="form" field="pages"></has-error>
                            </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <label for="date">Deadline Date & Time</label>
                                <datetime type="datetime" zone="local" value-zone="UTC+3" v-model="form.date" class="{ 'is-invalid': form.errors.has('date') }"></datetime>
                                <has-error :form="form" field="date"></has-error>
                            </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                <label for="spacing">Spacing</label><br>
                                <div class="form-check form-check-inline">
                                <input @click="getDiff()" v-model="form.spacing" class="form-check-input" type="radio" name="spacing" id="spacing" value="single" 
                                        :class="{ 'is-invalid': form.errors.has('spacing') }">
                                <label class="form-check-label" for="inlineRadio1">Single</label>
                                <has-error :form="form" field="spacing"></has-error>
                                </div>
                                <div class="form-check form-check-inline">
                                <input @click="getDiff()" v-model="form.spacing" class="form-check-input" type="radio" name="spacing" id="spacing" value="double" 
                                          :class="{ 'is-invalid': form.errors.has('spacing') }">
                                <label class="form-check-label" for="inlineRadio1">Double</label>
                                <has-error :form="form" field="spacing"></has-error>
                                </div>
                                </div>
                                <div class="col">
                                
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="task">Task</label>
                                <textarea v-model="form.task" class="form-control" id="task" rows="3"
                                          :class="{ 'is-invalid': form.errors.has('task') }"></textarea>
                                <has-error :form="form" field="task"></has-error>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="files">Upload Files</label>
                                <input type="file" multiple class="form-control-file" @change="fieldChange" id="files">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="suggested">Suggested</label>
                                <p>${{this.suggestion}}</p>
                            </div>
                            <div class="form-group">
                                <label for="budget">Your Budget</label>
                                <input v-model="form.budget" type="number" class="form-control" name="budget" id="budget"
                                       placeholder="budget" :class="{ 'is-invalid': form.errors.has('budget') }">
                                <has-error :form="form" field="budget"></has-error>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" @click="submit()">
                                <i class="fa fa-send"></i>
                                Submit
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import 'vue-datetime/dist/vue-datetime.css';
    export default {
        data(){
            return {
                attachments:[],
                now: moment().format(),
                levels: {},
                documents: {},
                subjects: {},
                suggestion: "",
                diff: '',
                formf: new FormData(),
                form: new Form({
                    title: '',
                    level: '',
                    subject: '',
                    type: '',
                    pages: '',
                    spacing: '',
                    date: '',
                    time: '',
                    task: '',
                })
            }
        },
        methods: {
            loadSubjects(){
                    axios.get("api/subject").then(({data}) => (this.subjects = data));
            },
            loadDocuments(){
                    axios.get("api/document").then(({data}) => (this.documents = data));
            },
            getLevels(){
              axios.get("/api/level").then(({ data }) => ([this.levels = data]));
            },
            getDiff(){
                // console.log(moment(this.form.date).format('MMMM Do YYYY, h:mm'));
                let dd = this.form.date;
               let diff = moment(dd).diff(this.now, 'minutes');
               this.diff = diff;
               
               if(this.form.spacing == 'double'){
                console.log('double');

                if(this.form.level == 'High School'){
                    console.log('High');
                    if(diff < 180){
                        console.log('180');
                        this.suggestion = 32;
                    }
                }

               }else if(this.form.spacing == 'single'){

               }

            },
            submit(){
              for(let i=0; i<this.attachments.length;i++){
                    this.formf.append('pics[]',this.attachments[i]);
                }
              this.formf.append('title',this.form.title);
              this.formf.append('level',this.form.level);
              this.formf.append('subject',this.form.subject);
              this.formf.append('type',this.form.type);
              this.formf.append('pages',this.form.pages);
              this.formf.append('spacing',this.form.spacing);
              this.formf.append('date',this.form.date);
              this.formf.append('time',this.form.time);
              this.formf.append('task',this.form.task);

              const config = { headers: { 'Content-Type': 'multipart/form-data' } };

              axios.post('/api/post-task',this.formf,config).then(response=>{
                $('#TaskModal').modal('hide');
                this.form.reset();
                swal.fire({
                      type: 'success',
                      title: 'Submited!!',
                      text: 'Successfully',

                    })

                })
                    .catch(response=>{
                        //error
                    });

                  
            },
            fieldChange(e){
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                    this.attachments.push(selectedFiles[i]);
                }
                console.log(this.attachments);
            }
        },
        created() {
            this.getLevels();
            this.loadDocuments();
            this.loadSubjects();
        }
    }
</script>
