<template>
    <div class="form-group">
        <vue-simple-suggest
            v-model="selected"
            :list="getSuggestionList"
            :filter-by-query="true">
            <input
             @keydown="setCanMessageSubmit($event.keyCode)"
             type="text" name="tag" v-bind:id="'tag'+this.formId" placeholder="スキルを入力してください" autocomplete="on">
        </vue-simple-suggest>
        <div class="col-md-12 d-flex justify-content-center">
          <div style="border-style: none; background-color:transparent;">
            <div class="card-body col-md-12 text-center" :class="'p-skill-area'+formId"  style="border-style: none; background-color:transparent;">
              <!-- Skill Tag Area -->
            </div>
          </div>
        </div>
    </div>
</template>
<script>
const wait = (sec) => {
          return new Promise((resolve, reject) => {
            setTimeout(resolve, sec*1000);
            //setTimeout(() => {reject(new Error("エラー！"))}, sec*1000);
          });
        };
import VueSimpleSuggest from "vue-simple-suggest";
import 'vue-simple-suggest/dist/styles.css';
import SkillTag from "./SkillTag"

export default {
    props: [
      'formId',
      'skillAreaManual',
      'auth_id',
    ],
    components: {
        VueSimpleSuggest,
        'skill-tag': SkillTag
    },
    data() {
        return {
            canMessageSubmit: false,
            selected: '',
            List:'',
            skillArea: 'p-skill-area'+this.formId,
            pSkills: [{}],
            wSkills: [{}],
        };
    },
    methods: {
      sendMessage(){
            this.$emit('catchMessage', pSkills);
        },
        async getSuggestionList() {
            return await axios.get('/api/tagList')
            .then(res => this.List = res.data )
            .catch((error)=>{
                this.errorMsg = 'Error! Could not reach the API. ' + error
                console.log(this.errorMsg)
            })
        },
        async appendSkillTag() {
          if($('#tag'+this.formId).val() == '') return;
          await wait(0.2);
          this.selected = $('#tag'+this.formId).val();
          console.log('@@[' + this.SkillName);
          var name = {
                    'name': this.selected,
                };
          axios.post('/api/create_skill',name)
            .then((res) => {
              console.log(res);
          });
          // $(".p-skill-area").append(this.selected);
          var ComponentClass = Vue.extend(SkillTag)
          var instance = new ComponentClass({
            // 追加
            propsData: {
              SkillName: this.selected
            }
          });
          instance.$mount();
          var target_path = this.skillAreaManual ? this.skillAreaManual : '.p-skill-area'+this.formId
          $(target_path).append(instance.$el)
          console.log('ああああ'+this.auth_id);
          var skill = {
                    'name': this.selected,
                    'auth_id': this.auth_id
          };

          switch(this.formId){
            case 1:
              axios.post('/api/add_p_skill',skill)
              .then((res) => {
                console.log(res);
              });
              break;
            case 2:
              axios.post('/api/add_w_skill',skill)
              .then((res) => {
                console.log(res);
              });
              break;
          }

          $('#tag'+this.formId).val('');
        },
    setCanMessageSubmit(keyCode) {
      if (keyCode !== 13) return;
      this.appendSkillTag();
    },
    say: function() {
      if (!this.canMessageSubmit) {
        return
      }

      // -- submit message -- //

      this.message = ''
      this.canMessageSubmit = false
    },
        // test (){
        //   await wait(0.2);
        //   this.selected = $('#tag').val();
        //   console.log("test");
        //   // $(".p-skill-area").append(this.selected);

        //   var ComponentClass = Vue.extend(SkillTag)
        //   var instance = new ComponentClass({
        //     // 追加
        //     propsData: {
        //       SkillName: this.selected
        //     }
        //   });
        //   instance.$mount();
        //   $('.p-skill-area').append(instance.$el);
        //   $('#tag').val('');
        // }

    }
}
</script>