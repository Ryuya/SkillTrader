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
                        <v-form ref="form" @submit.prevent>
                          <div class="form-group">
                            <label for="formGroupExampleInput">教えられるスキル</label>
                            <!-- <input  type="text" class="form-control" id="formGroupExampleInput" > -->
                            <form-component v-bind:auth_id="this.auth_id" v-bind:form-id="1" v-bind:pSkills="{}" placeholder="エクセル 英語 プログラミング DTM お絵かき"></form-component>
                          </div>

                          <div class="form-group">
                            <label for="formGroupExampleInput2">教えて欲しいスキル</label>
                            <form-component v-bind:auth_id="this.auth_id" v-bind:id="2" v-bind:wSkills="{}"  placeholder="エクセル 英語 プログラミング DTM お絵かき"></form-component>
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput5">あなたの目的を書いてください</label>
                            <input v-model="skillDetail.hope_comment" type="text" class="form-control" id="formGroupExampleInput5" placeholder="オンラインゲームがつくれるようになりたい！ 旅先で英語をしゃべれるようになりたい！ etc..">
                          </div>
                          <!-- <div class="form-group">
                            <label for="formGroupExampleInput3">Twitter ID</label>
                            <input v-model="twitter_id" type="text" :value="unique_id" class="form-control" id="formGroupExampleInput2" placeholder="教えて欲しいスキルを自由に書いてください" name="twitter_id">
                          </div> -->
                          <div class="form-group">
                            <label for="formGroupExampleInput4">待ち合わせ場所</label>
                            <input v-model="skillDetail.meeting_url" type="text" class="form-control" id="formGroupExampleInput2" placeholder="discordのURLなどを載せてください">
                          </div>
                          <div class="col-auto text-center">
                            <button v-on:click="submit" @keyup.prevent.enter.exact="submit" type="submit" class="btn btn-primary mb-2">登録</button>
                          </div>
                        </v-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FormComponent from "../components/FormComponent";
    export default {
      props: {
        user_name: String,
        unique_id: String,
        avatar: String,
        auth_id: Number,
      },
      component: {
        FormComponent,
      },
      data: function () {
        return {
          skillDetail: {},
          pSkills: [{}],
          wSkills:[{}],
        }
       },
      methods: {
        getUser() {
        //   axios.get('/api/user')
        //     .then((res) => {
        //       this.user = res.data;
        //     });
        },
        submit() {
          this.skillDetail.twitter_id = this.unique_id;
          this.skillDetail.user_id = this.auth_id;
          // this.skillDetail.pSkills = this.pSkills;
          // this.skillDetail.wSkills = this.Skills;
          console.log(this.skillDetail);
          axios.post('/api/create_skill_detail',this.skillDetail)
            .then((res) => {
              this.$router.push({name: 'search'});
            });
        },
        appendSkillTag() {
          // $(".p-skill-area").append(this.select);
        },
        customFunction(){
          return;
        }
      },
      mounted() {
        this.getUser();
      }
    }

</script>
