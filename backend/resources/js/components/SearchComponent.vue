<style>
  .tag {
    display: inline-block;
    margin: 0 .1em .6em 0;
    padding: .6em;
    line-height: 1;
    text-decoration: none;
    color: rgb(0, 71, 171);
    background-color: #fff;
    border: 1px solid rgb(0, 71, 171);
    border-radius: 2em;
  }
</style>
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5" style="border-style: none;">
                    <div class="card-body">
                            <!-- <a v-bind:href="'https://twitter.com/'+unique_id">Twitter</a>
                            I'm an example component.
                            {{ user_name }}

                            {{ avatar }} -->
                        <form @submit.prevent="customFunction">
                          <form-component v-bind:form-id="1"
                          v-bind:skill-area-manual="'.skillArea'"
                           placeholder="エクセル 英語 プログラミング DTM お絵かき"></form-component>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
              <div class="card" style="border-style: none; background-color:transparent;">
                <div class="card-body">
                    <div class="row d-flex align-item-center" >
                        <div class="col-md-5 d-flex align-items-center">
                          <div class="card col-md-12 bg-none" style="border-style: none;background-color:transparent;">
                              <div class="card-body text-center " style="background-color:transparent;">
                                <div class="tag">
                                  Unity
                                </div>
                                <div class="tag">
                                  Laravel
                                </div>
                                <div class="tag">
                                  Excel
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center justify-content-center"><!-- マッチングした人のカード -->
                            <img  width="86px" src="https://s3.amazonaws.com/optionalphafiles/wp-content/uploads/2015/06/15190517/Arrows-56.png" />
                        </div><!-- END マッチングした人のカード -->
                        <div class="col-md-5 d-flex align-items-center"><!-- マッチングした人のカード -->
                          <div class="card col-md-12 bg-none" style="border-style: none;background-color:transparent;">
                              <div class="card-body text-center skillArea" style="background-color:transparent;">
                                <div class="tag">
                                  Houdini
                                </div>
                                <div class="tag">
                                  Blender
                                </div>
                                <div class="tag">
                                  キャラクターデザイン
                                </div>
                                <div class="tag">
                                  Illstrator
                                </div>
                                <div class="tag">
                                  フロントエンド
                                </div>
                                <div class="tag">
                                  AWS
                                </div>
                                <div class="tag">
                                  Vim
                                </div>

                              </div>
                          </div>
                        </div><!-- END マッチングした人のカード -->
                    </div>
                </div>
              </div><!-- マッチングした人のリストの枠 -->
            </div>

            <div class="col-md-12 mt-5">
              <div class="card"> <!-- マッチングした人のリストの枠 -->
                <div class="card-header bg-info" style="color:white">マッチング結果</div>
                <div class="card-body">
                    <div class="row d-flex align-item-center">
                        <div class="col-md-6"><!-- マッチングした人のカード -->
                            <div class="card">
                                <div class="card-header" style="background-color:rgba(0, 0, 0,0.02)">
                                  <div><h6><b>{{user_name}}</b></h6></div>
                                  <div> 誰でも大歓迎です！discordで勉強配信するので気軽にサーバーに参加してください。たまにApexやるかドミニオンやるかもしれないです。学びたいスキルが被っている人は是非discord入ってきてください！
                                  </div>
                                </div>
                                <div class="card-body">
                                  <div class="row ">
                                    <div class="col-md-2 d-flex justify-content-center">
                                        <a :href="'https://twitter.com/'+unique_id"><img :src="avatar" class="rounded-circle" width="54px"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="text-center"><b>提供できるスキル</b></h6>
                                          <div class="card col-md-12 d-flex justify-content-around" style="border-style: none; background-color:transparent;">
                                            <div class="card-body col-md-12 text-center" style="border-style:none;background-color:transparent;">
                                              <span class="tag">Dockerを使いLaravelをとりあえず動かすところまでサポートします</span>
                                              <span class="tag">UnityでFPSを作成します。</span>
                                              <span class="tag">Unityでパズルを作成します。</span>
                                              <span class="tag">AppStore リリース</span>
                                              <span class="tag">Unity Zenject DI注入</span>
                                              <span class="tag">Unity UniRx UniTask インストール</span>
                                              <span class="tag">Unity Photon</span>
                                              <span class="tag">Unity オンラインゲーム作成</span>
                                              <span class="tag">Unity 数独</span>
                                              <span class="tag">Unity FPS</span>
                                              <span class="tag">Unity タワーディフェンス</span>
                                              <span class="tag">GooglePlay リリース</span>
                                              <span class="tag">プログラミング 基礎</span>
                                              <span class="tag">プログラミング クラス</span>
                                              <span class="tag">アジャイル スプリント計画</span>
                                              <span class="tag">Unity エディタ拡張</span>
                                              <span class="tag">Unity ScriptableObject</span>
                                              <span class="tag">Unity Timeline</span>
                                              <span class="tag">Unity HDRP</span>
                                              <span class="tag">算数 九九</span>
                                              <span class="tag">Rails クローラー作成</span>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                  <hr class="bg-info border-2 border-top border-gray">


                                  <div class="col-md-12">
                                    <h6><b>学びたいスキル</b></h6>
                                    <div class="col-md-12 d-flex justify-content-around">
                                      <div class="card col-md-12" style="border-style: none; background-color:transparent;">
                                        <div class="card-body col-md-12 text-center" style="border-style:none;background-color:transparent;">
                                          <span class="tag">フロントエンド</span>
                                          <span class="tag">Webデザイン</span>
                                          <span class="tag">キャラクターデザイン</span>
                                          <span class="tag">ゲームエフェクト作成</span>
                                          <span class="tag">AfterEffect</span>
                                          <span class="tag">Houdini</span>
                                          <span class="tag">Vue.js</span>
                                          <span class="tag">Kubernetes</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 d-flex justify-content-around mt-1">
                                    <p style="font-size:18px;" class='fab fa-twitter'><a  class="ml-1" target="_blank" :href="'https://twitter.com/'+unique_id">Twitter</a></p>
                                    <p style="font-size:18px;" class='fab fa-discord'><a  class="ml-1" target="_blank" :href="'https://twitter.com/'+unique_id">Discord</a></p>
                                  </div>
                                </div>
                            </div>
                        </div><!-- END マッチングした人のカード -->
                        <div class="col-md-6"><!-- マッチングした人のカード -->
                          <div class="card">
                              <div class="card-header" style="background-color:rgba(0, 0, 0,0.02)">
                                <div><h6><b>Enako</b></h6></div>
                                <div>
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="row ">
                                  <div class="col-md-3 d-flex justify-content-center">
                                      <a :href="'https://twitter.com/'+unique_id"><img src='https://obs.line-scdn.net/0hQzJD1GRQDlV3PSc-LntxAjlgCDoOXhRdHUUZbwJrBHsCURlVH0cVbAJnDiYCUlVDIAceMSx5KQUKVjBUKS9HUDBhMGwSaQBgSwEbUlBCCHlaCUEGTF5DNlQ-UG0IX00ASFMEMgA4WWMJDEk' class="rounded-circle" width="96px"></a>
                                  </div>
                                  <div class="col-md-9">
                                    <div class="col-md-12">
                                      <h6 class="text-center"><b>教えられるスキル</b></h6>
                                      <div class="col-md-12 d-flex justify-content-around">
                                        <div class="card col-md-12" style="border-style: none; background-color:transparent;">
                                          <div class="card-body col-md-12" style="border-style:none;background-color:transparent;">
                                            <span class="tag">Next.js</span>
                                          <span class="tag">NestJS</span>
                                          <span class="tag">Prisma</span>
                                          <span class="tag">GrapQL</span>
                                          <span class="tag">Firebase</span>
                                          <span class="tag">GCP</span>
                                          <span class="tag">k8s</span>
                                          <span class="tag">React</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr class="bg-info border-2 border-top border-gray">


                                <div class="col-md-12">
                                  <h6><b>学びたいスキル</b></h6>
                                  <div class="col-md-12 d-flex justify-content-around">
                                    <div class="card col-md-12" style="border-style: none; background-color:transparent;">
                                      <div class="card-body col-md-12 d-flex justify-content-around" style="border-style:none;background-color:transparent;">
                                        <span class="tag">フロントエンド</span>
                                        <span class="tag">Webデザイン</span>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-around">
                                  <p style="font-size:18px;" class='fab fa-twitter'><a  class="ml-1" target="_blank" :href="'https://twitter.com/'+unique_id">Twitter</a></p>
                                  <p style="font-size:18px;" class='fab fa-discord'><a  class="ml-1" target="_blank" :href="'https://twitter.com/'+unique_id">Discord</a></p>
                                </div>
                              </div>
                          </div>
                        </div><!-- END マッチングした人のカード -->
                    </div>
                </div>
              </div><!-- マッチングした人のリストの枠 -->
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
        avatar: String
      },
      components: {
        FormComponent
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
        },
        customFunction(){

        }
      },
      mounted() {
        this.getUser();
      }
    }

</script>
