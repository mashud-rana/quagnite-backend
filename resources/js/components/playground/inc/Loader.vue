<template>
  <div>
    <div v-if="loader" class="all-playground-loader">
      <div class="loader-all">
        <p>{{ message }}</p>
        <h2>Loading</h2>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["loader", "message"],
};
</script>
<style scoped>
.all-playground-loader {
  z-index: 9999999;
}
</style>
