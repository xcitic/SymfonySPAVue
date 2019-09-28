<template>
  <div>
    <div class="row col">
      <h1>Posts</h1>
    </div>

    <div class="row col">
      <form>
        <div class="form-row">
          <div class="col-8">
            <input
              v-model="message"
              type="text"
              class="form-control"
            >
          </div>
          <div class="col-4">
            <button
              :disabled="message.length === 0 || isLoading"
              type="button"
              class="btn btn-primary"
              @click.prevent="createPost()"
            >
              Create
            </button>
          </div>
        </div>
      </form>
    </div>

    <div
      v-if="isLoading"
      class="row col"
    >
      <p>Loading...</p>
    </div>

    <div
      v-else-if="hasError"
      class="row col"
    >
      <div
        class="alert alert-danger"
        role="alert"
      >
        {{ error }}
      </div>
    </div>

    <div
      v-else-if="!hasPosts"
      class="row col"
    >
      There are no posts -_-
    </div>

    <div
      v-for="post in posts"
      v-else
      :key="post.id"
      class="row col"
    >
      <post :message="post.message" />
    </div>
  </div>
</template>

<script>
import Post from '../components/Post.vue';

export default {
  name: "Posts",
  components: {
    Post
  },
  data() {
    return {
      message: ""
    };
  },
  computed: {
    isLoading() {
      return this.$store.getters["post/isLoading"];
    },
    hasError() {
      return this.$store.getters["post/hasError"];
    },
    error() {
      return this.$store.getters["post/error"];
    },
    hasPosts() {
      return this.$store.getters["post/hasPosts"];
    },
    posts() {
      return this.$store.getters["post/posts"];
    }
  },
  created() {
    this.$store.dispatch("post/findAll");
  },
  methods: {
    async createPost() {
      let result = await this.$store.dispatch("post/create", this.$data.message);
      if (result !== null) {
        this.$data.message = '';
      }
    }
  }
};
</script>

<style scoped>
</style>
