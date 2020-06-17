<template>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">Test FireBase</div>

 

                    <div class="card-body">

                      

                        <form @submit="formSubmit">

 <div class="form-group">
                            <label for="">Token</label>
                            <input type="text"
                              class="form-control" name="token" v-model="token"   id="token" aria-describedby="helpId" placeholder="" required>
                            <small id="helpId" class="form-text text-muted">token or firebase ID</small>
                            <code>ex5FJtYBY6k:APA91bFYiNlSNNu7JlEk6iQ2GTSIfi4Gx09who8OnuZPZB46EBuCV9jSlJyFz06CS_CiNi0A8RNUG43kb3JeDMZ0Xo2eGERXCBGcQ_9JvaZ8ldzYqHpfRmlGfh4sbltMZgu3ZwDITXKb</code>
                          </div>

                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text"
                              class="form-control" name="title" v-model="title" id="title" aria-describedby="helpId" placeholder="" required>
                            <small id="helpId" class="form-text text-muted">the title will appear in head off notification </small>
                          </div>

                     <div class="form-group">
                       <label for="">Body</label>
                       <textarea class="form-control" name="" id="" v-model="body" rows="3" required ></textarea>
                     </div>


                     <button type="submit" class="btn btn-primary">Submit</button>
                        
 
                        </form>

                     
                   
                     <br>
                     <br>

                        <div class="card ">
                           <div class="card-body">
                            <h4 class="card-title">Output</h4>
                          <pre>

                        {{output}}

                        </pre>
                          </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</template>

 

<script>

    export default {

        mounted() {

            console.log('Component mounted.')

        },

        data() {

            return {

              title: '',

              body: '',
              token:'' ,

              output: ''

            };

        },

        methods: {

            formSubmit(e) {

                e.preventDefault();

                let currentObj = this;

                axios.post('/formSubmit', {

                    title: this.title,

                    body: this.body
                    ,token:this.token

                })

                .then(function (response) {

                    currentObj.output = response.data;

                })

                .catch(function (error) {

                    currentObj.output = error;

                });

            }

        }

    }

</script>