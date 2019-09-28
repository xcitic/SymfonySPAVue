<template>
  <div class="container">
    <nav class="bnavbar navbar-expand-lg navbar-light bg-light">
      <router-link
        class="navbar-brand"
        to="/home"
      >
        App
      </router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-label="Toggle navigation"
      />
      <div
        id="navbarNav"
        class="collapse navbar-collapse"
      >
        <ul class="navbar-nav">
          <router-link
            class="nav-item"
            tag="li"
            to="/home"
            active-class="active"
          >
            <a class="nav-link">Home</a>
          </router-link>
          <router-link
            class="nav-item"
            tag="li"
            to="/posts"
            active-class="active"
          >
            <a class="nav-link">Posts</a>
          </router-link>
        </ul>
      </div>
    </nav>

    <!-- Inject Views Here -->
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App"
}
</script>

<style>
</style>
