<template>
  <div>
    <div v-if="loader" class="play-loader">
      <div class="play-spinner"></div>
      <div class="loader-text">&nbsp; Loading...</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["loader"],
};
</script>
<style>
.terminel-height {
  position: relative; /* Make the container div relative */
}

.play-loader {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 500px; /* Adjust height as needed */
  background-color: rgba(
    255,
    255,
    255,
    0.8
  ); /* Semi-transparent white background */
  position: absolute;
  top: 0;
  left: 0;
}

.loader-text {
  font-size: 1.5rem;
  color: #333; /* Text color */
}

/* Customize loader animation as needed */
@keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.play-spinner {
  border: 4px solid #f3f3f3; /* Light grey */
  border-top: 4px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spinner 0.8s linear infinite;
}
</style>
