<template>
  <section>
    <div class="about">
      <div class="column">
        <div class="thumbnail"></div>
        <h1 class="title">Charlie McCabe</h1>
        <p class="lead">Software Engineer</p>
        <p class="small">product development manager</p>
      </div>
      <div class="column">
        <p class="body-text">
          A results-orientated
          <strong>Full Stack Software Engineer</strong> with a strong commitment
          to delivering scalable, maintainable and user focused software
          solutions.
        </p>
        <p class="body-text">
          Extensive experience in a wide array of web technologies; specializing
          in .NET 5 microservice development, React JS and TypeScript.
        </p>
        <p class="body-text">
          Previous experience as a
          <strong>Product Development Manager</strong> equips me with
          leadership, communication and organizational skills, providing
          additional adaptability and perspective.
        </p>
        <p class="body-text">
          When I’m not plunging into the depths of the web, I am a proud father
          of one, animal lover and committed gamer!
        </p>
      </div>
    </div>
    <div class="parallaxContainer" ref="parallaxContainer">
      <div data-depth="0.1" class="layer">
        <font-awesome-icon :icon="['fas', 'code-branch']" />
        <font-awesome-icon :icon="['fas', 'code']" />
        <font-awesome-icon :icon="['fas', 'terminal']" />
      </div>
    </div>
  </section>
</template>

<script>
import Parallax from "parallax-js";
export default {
  name: "about",
  mounted() {
    const scene = this.$refs.parallaxContainer;

    new Parallax(scene, {
      realtiveInput: true,
      clipRelativeInput: true,
      hoverOnly: true,
    });
  },
};
</script>

<style scoped>
.about {
  max-height: 70vh;
  max-width: 100%;
  margin: 15vh 5vw;
  padding: 0 5vw;
  color: #fff;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
  overflow-y: auto;
}

/* Width */
.about::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.about::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
.about::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.5);
  border-radius: 10px;
}

.column:first-of-type {
  text-align: center;
}

.thumbnail {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  border: 2px solid white;
  -webkit-box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
  margin: 24px auto;
  background-image: url("../assets/CharlieAndJesse.jpg");
  /* background-image: url("../assets/CharlieAndRobin.jpg"); */
  background-position: center;
  background-size: cover;
}

h1.title {
  font-size: 2.5rem;
  color: #73ded6;
  font-weight: 200;
  margin: 0 24px;
}

p.lead {
  font-size: 1.5rem;
  font-weight: 200;
  color: #fff;
  margin: 0.5rem 24px;
  text-transform: uppercase;
}

p.small {
  font-size: 1rem;
  font-weight: 200;
  color: #fff;
  text-transform: uppercase;
  margin: 0 24px;
}

p.body-text {
  font-size: 1.5rem;
  font-weight: 200;
}

strong {
  color: #73ded6;
  font-weight: 400;
}

.parallaxContainer {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  z-index: 300;
}

.layer .svg-inline--fa {
  position: relative;
  font-size: 50px;
}

[data-icon*="terminal"] {
  color: #cfe922;
  top: 6vh;
  left: 35vw;
}

[data-icon*="code"] {
  color: #ced1ee;
  top: 70vh;
  left: 5vw;
}

[data-icon*="code-branch"] {
  color: #ff00e7;
  top: 80vh;
  left: 95vw;
}

@media screen and (max-width: 886px) {
  .parallaxContainer {
    display: none;
  }
  .thumbnail {
    width: 200px;
    height: 200px;
  }
  h1.title {
    font-size: 2rem;
    color: #73ded6;
    font-weight: 200;
    margin: 0 24px;
  }

  p.lead {
    font-size: 1.2rem;
    font-weight: 200;
    color: #fff;
    margin: 0.5rem 24px;
    text-transform: uppercase;
  }

  p.small {
    font-size: 1rem;
    font-weight: 200;
    color: #fff;
    text-transform: uppercase;
    margin: 0 24px;
  }

  p.body-text {
    font-size: 1.2rem;
    font-weight: 200;
  }
}
</style>
