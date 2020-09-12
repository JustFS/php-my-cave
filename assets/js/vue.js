const vue = new Vue({
  data: () => {
    return {
      wines: [],
      inputType: '',
      searchKey: '',
      countryList: [],
      countrySelected: ''
    }
  },
  computed: {
    searchByName() {
      return this.wines.filter((wine) => {
        return wine.name.toLowerCase().includes(this.searchKey.toLowerCase());
      });
    },
    setCountryList() {
      for (let i = 0; i <= this.wines.length; i++){
        if (!this.countryList.includes(this.wines[i].country)){
          this.countryList.push(this.wines[i].country);
        }
      }
    },
    sortedCountry() {
      let arr = this.countryList.sort();
      res = [];
      for (let i = 0; i < arr.length; i++){
        res.push({
          name: arr[i],
          id: arr[i]
        })
      }
      let obj = [];
      return obj = {...res};
    }
  },
  methods: {
    getImgUrl(pic) {
      return 'assets/uploads/'+ pic
    },
    searchInput(arg) {
      this.inputType = arg;
    },
    removeItem(id) {
      this.$delete(this.wines, id)   
    }
  },
  mounted() {
    axios.get("libraries/controllers/getData.php")
    .then(res => res.data)
    .then(res => {this.wines = res})
  },
}).$mount("#vue-app");
