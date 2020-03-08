<template>
  <div>
    <h1>Post List will be here</h1>
    <div v-for="post in posts" :key="post.id">
      <h1>{{post.title}}</h1>
      <p>{{post.excerpt}}</p>
    </div>
  </div>
</template>
<script>

// import api_token_header from './mixins/api_token_header_for_axios';

export default {
  // mixins : [api_token_header],
  data() {
    return {
      posts: [],
      meta: null,
      links: null,
      url : `/api/v1/post`
    };
  },
  created() {     
    axios.get(this.url).then(this.init_data_handler);
  },
  methods: {
    init_data_handler (response) {
      this.posts = response.data.data;
      this.meta = response.data.meta;
      this.links = response.data.links;
    }
  }
};
</script>