<template>
   
                <div class="card">
                    <div class="card-header">Test Pusher</div>

                    <div class="card-body">
          
      <div id="commentForm" class="box has-shadow has-background-white">

        <form @keyup.enter="postComment">
          <div class="field has-margin-top">

            <div class="field has-margin-top">
              <label class="label">Title</label>
              <div class="control">
                <input type="text" placeholder="title" class="form-control" v-model="comment.title">
              </div>

            </div>
            <div class="field has-margin-top">
              <label class="label">Your msg</label>
              <div class="form-group">
                            <textarea
                              style="height:100px;"
                              name="msg"
                              class="form-control" autocomplete="true" v-model="comment.msg"
                              placeholder="lorem ipsum"></textarea>
              </div>

            </div>
            <div class="form-group">
              <button  :class="{'is-loading': submit}"
                      class="btn btn-info"
                      :disabled="!isValid"
                      @click.prevent="postComment"
                      type="submit"> Test
              </button>
            </div>
          </div>
        </form>
        <br>
      </div>
                     </div>
                </div>
       
</template>

    <script>
      export default {
        name: "NewComment",
        data() {
          return {
            submit: false,
            comment: {
              title: '',
              msg: '',
            }
          }
        },
        methods: {
          postComment() {
            this.submit = true;
            
            axios.get('/pusher/test?title='+this.comment.title+"&msg="+this.comment.msg)
              .then(response => {
                this.submit = false;
                if (response.data === 'ok')
                  console.log('success')
              }).catch(err => {
              this.submit = false
            })

          },
        },
        computed: {
          isValid() {
            return this.comment.content !== '' && this.comment.author !== ''
          }
        }
      }
    </script>

    