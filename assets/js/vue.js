const vue = new Vue({
  name: 'home',
  data: () => {
    return {
      wines: []
    }
  },
  methods: {
    getImgUrl(pic) {
      return 'assets/uploads/'+ pic
    }
  },
  mounted() {
    axios.get("libraries/controllers/getData.php")
    .then(res => res.data)
    .then(res => {this.wines = res})
  },
}).$mount("#vue-app");
