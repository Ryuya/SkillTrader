<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">スキル登録</div>
                    <div class="card-body">
                            <!-- <a v-bind:href="'https://twitter.com/'+unique_id">Twitter</a>
                            I'm an example component.
                            {{ user_name }}

                            {{ avatar }} -->
                        <form>
                          <div class="form-group">
                            <label for="formGroupExampleInput">教えられるスキル</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="エクセル 英語 プログラミング">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">教えて欲しいスキル</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="教えて欲しいスキルを自由に書いてください">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput3">Twitter ID</label>
                            <input type="text" :value="unique_id" class="form-control" id="formGroupExampleInput2" placeholder="教えて欲しいスキルを自由に書いてください">

                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput4">待ち合わせ場所</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="discordのURLなどを載せてください">
                          </div>
                          <div class="col-auto text-center">
                            <button type="submit" class="btn btn-primary mb-2">登録</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      props: {
        user_name: String,
        unique_id: String,
        avatar: String
      },
      data: function () {
        return {
          user: []
        }
       },
      methods: {
        getUser() {
        //   axios.get('/api/user')
        //     .then((res) => {
        //       this.user = res.data;
        //     });
        }
      },
      mounted() {
        this.getUser();
      }
    }

</script>
