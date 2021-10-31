<style>
  .skill-tag {
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
  <div>hello</div>
</template>

<script>
    export default {
      props: {
        isDetail: String,
      },
      data: function () {
        return {

        }
       },
      methods: {
      },
      mounted() {
        if(this.isAuth){
          this.$router.push({name: 'search'});
        } else {
          this.$router.push({name: 'user.detail.create'});
        }

      }
    }

</script>
