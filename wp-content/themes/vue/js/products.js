var app = new Vue({
  el: '#app',
  data: {
    title: 'Productos Vue!',
    url: 'https://wordpress.build/wp-json/wp/v2/productos?per_page=3&page=',
    products: [],
    loading: true,
    current_page: 1,
    total_items: null,
    total_pages: null,
  },

  computed: {
    postsLoaded: function postsLoaded() {
      return this.current_page == this.total_pages;
    }
  },

  mounted() {
    this.loadProducts()
  },

  methods: {
    loadMore: function loadMore() {
      this.current_page = this.current_page + 1;
      this.loadProducts();
    },

    loadProducts: function loadProducts() {
      this.loading = true;
      axios.get(this.url + this.current_page)
        .then((response) => {
          console.log(response);
          this.total_items = response.headers['x-wp-total'];
          this.total_pages = response.headers['x-wp-totalpages'];
          response.data.map((product) => {
            this.products.push(product)
          });
          this.loading = false;
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  }
});