<template>
  <section class="overlay" v-if="project">
    <div
      class="column image-section"
      :style="{
        backgroundColor: project.complimentaryColor,
        backgroundImage: 'url(' + project.logo + ')',
        backgroundSize: project.logoSize
      }"
    ></div>
    <div class="column">
      <div class="text-section">
        <span class="back-text" @click="closeProjectShow()">
          <font-awesome-icon :icon="['fas', 'arrow-left']" />back to portfolio
        </span>

        <h2>{{ project.name }}</h2>
        <h3>{{ project.jobTitle}}</h3>
        <h3>Overview</h3>
        <p>{{project.description}}</p>
        <h3>Tech Stack</h3>
        <ul>
          <li v-for="(tech, index) in project.techStack" :key="index">{{ tech }}</li>
        </ul>
        <a :href="project.url" target="_blank" v-show="!project.inDevelopment">Visit Site</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ProjectShow",
  props: ["project"],
  methods: {
    closeProjectShow() {
      return this.$emit("clicked");
    }
  }
};
</script>

<style>
.overlay {
  z-index: 200;
  position: absolute;
  width: 100%;
  height: 100vh;
  background-color: #fff;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: 7fr 5fr;
}

.image-section {
  background-position: center;
  background-repeat: no-repeat;
}

span.back-text .svg-inline--fa {
  margin-right: 10px;
}

span.back-text {
  display: block;
  font-size: 1rem;
  font-weight: 400;
  color: #2c2c2db2;
  margin-bottom: 1rem;
  cursor: pointer;
}

.text-section {
  max-height: 90vh;
  overflow-y: auto;
  margin: 50px 20px;
  padding: 0 20px;
}
/* Width */
.text-section::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.text-section::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

/* Handle */
.text-section::-webkit-scrollbar-thumb {
  background: #2c2c2d80;
  border-radius: 10px;
}

.text-section h2 {
  margin: 0;
  font-size: 2rem;
  font-weight: 400;
  color: #73ded6;
}

.text-section h3 {
  margin: 0 0 1.5rem 0;
  font-size: 1.5rem;
  font-weight: 200;
}

.text-section h3:not(:first-of-type) {
  margin: 0;
  font-weight: 400;
  color: #73ded6;
}

.text-section p {
  font-weight: 400;
}

ul {
  font-weight: 400;
  list-style-type: none;
  padding: 0;
}

.text-section a {
  display: block;
  text-align: center;
  margin: 0 auto;
  font-weight: 400;
  font-size: 2rem;
  width: 50%;
  border-radius: 30px;
  background-color: #2c2c2d;
  color: white;
  text-decoration: none;
  padding: 10px;
}

@media screen and (max-width: 1100px) {
  .overlay {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 886px) {
  .overlay {
    grid-template-columns: 1fr;
    overflow-y: auto;
  }
  .image-section {
    height: 35vh;
    background-size: 30% !important;
  }
  .text-section {
    overflow: visible !important;
    height: auto;
    max-height: 100%;
  }
}
</style>