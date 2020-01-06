<template>
  <div id="background-main" ref="backgroundMain">
    <div data-depth="0.1" class="layer">
      <div class="floating-title">
        <h1 class="title">Charlie McCabe</h1>
        <p class="lead">full stack web developer</p>
        <p class="small">product development manager</p>
      </div>
    </div>
    <div data-depth="0.2" class="layer">
      <font-awesome-icon :icon="['fab', 'node']" />
      <font-awesome-icon :icon="['fab', 'js']" />
      <font-awesome-icon :icon="['fab', 'vuejs']" />
      <font-awesome-icon :icon="['fab', 'html5']" />
      <font-awesome-icon :icon="['fab', 'css3-alt']" />
    </div>
  </div>
</template>

<script>
import Parallax from "parallax-js";
export default {
  name: "home",
  mounted() {
    const scene = this.$refs.backgroundMain;

    new Parallax(scene, {
      realtiveInput: true,
      clipRelativeInput: true,
      hoverOnly: true
    });
  }
};
</script>

<style scoped>
#background-main {
  width: 100%;
  height: 100vh;
}

.floating-title {
  max-width: 500px;
  text-align: center;
  position: relative;
  top: calc(50vh - 86px);
  margin: 0 auto;
}

.floating-title h1.title {
  font-size: 4rem;
  color: #73ded6;
  font-weight: 200;
  margin: 0;
}

.floating-title p.lead {
  font-size: 2rem;
  font-weight: 200;
  color: #fff;
  margin: 1.5rem 0 1rem;
  text-transform: uppercase;
}

.floating-title p.small {
  font-size: 1rem;
  font-weight: 200;
  color: #fff;
  margin: 0;
  text-transform: uppercase;
}

@media screen and (max-width: 886px) {
  .floating-title h1 {
    font-size: 3.5rem !important;
  }
  .floating-title p {
    font-size: 1.5rem !important;
  }
  .floating-title .small {
    font-size: 0.8rem !important;
  }
}

@media screen and (max-width: 500px) {
  .floating-title h1 {
    font-size: 3rem !important;
  }
  .floating-title p {
    font-size: 1.5rem !important;
  }
  .floating-title .small {
    font-size: 0.8rem !important;
  }
}

/* positioning and colors for programming language logos */

.layer .svg-inline--fa {
  position: relative;
  font-size: 50px;
}

[data-icon*="node"] {
  color: #8cc84b;
  top: 15vh;
  left: 20vw;
}

[data-icon*="js"] {
  color: #f7df20;
  top: 25vh;
  left: 60vw;
}

[data-icon*="css3-alt"] {
  color: #264ce4;
  top: 50vh;
  left: 70vw;
}

[data-icon*="vuejs"] {
  color: #41b883;
  top: 75vh;
  left: 20vw;
}

[data-icon*="html5"] {
  color: #e44e26;
  top: 85vh;
  left: 45vw;
}

@media screen and (max-width: 886px) {
  [data-icon*="css3-alt"] {
    top: 75vh;
    left: -20vw;
  }
  [data-icon*="vuejs"] {
    color: #41b883;
    top: 60vh;
    left: 20vw;
  }
  [data-icon*="html5"] {
    color: #e44e26;
    top: 70vh;
    left: 45vw;
  }
}
</style>
