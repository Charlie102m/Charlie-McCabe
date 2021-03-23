<template>
  <nav class="navbar" ref="navbar">
    <router-link
      to="/"
      class="link"
      active-class="active"
      v-on:click.native="navbarToggler()"
      exact
    >Home</router-link>
    <router-link
      to="/about"
      class="link"
      active-class="active"
      v-on:click.native="navbarToggler()"
    >About Me</router-link>
    <router-link
      to="/portfolio"
      class="link"
      active-class="active"
      v-on:click.native="navbarToggler()"
    >Portfolio</router-link>
    <a class="link" v-on:click="EmitContactFormRequest()">Contact</a>
    <a href="javascript:void(0);" class="icon" v-on:click="navbarToggler()">&#9776;</a>
  </nav>
</template>

<script>
export default {
  name: "MainNav",
  methods: {
    navbarToggler() {
      const element = this.$refs.navbar;
      if (element.className === "navbar") {
        element.className += " responsive";
      } else {
        element.className = "navbar";
      }
    },
    EmitContactFormRequest() {
      return this.navbarToggler(), this.$emit("ContactFormRequested");
    }
  }
};
</script>

<style>
nav {
  text-align: right;
  width: 100%;
  position: fixed;
  bottom: 0;
  z-index: 200;
  padding: 10px;
}

nav a.link {
  text-decoration: none;
  color: #f4f4f8;
  margin: 30px;
  font-size: 2rem;
}

nav a.active,
nav a:hover {
  color: #73ded6;
}

nav a.icon {
  display: none;
  text-decoration: none;
  color: #f4f4f8;
  font-size: 2rem;
  margin-right: 30px;
}

@media screen and (max-width: 886px) {
  nav a {
    display: none;
  }
  nav a.icon {
    display: block;
  }
  nav.responsive a.icon {
    position: absolute;
    right: 0;
    bottom: 0;
    margin-top: 20px;
    margin-right: 40px;
    margin-bottom: 10px;
  }
  nav.responsive a {
    color: #999;
    display: block;
    margin: 40px;
  }
  nav.responsive {
    height: 60vh !important;
    background-color: #f4f4f8;
  }
  nav.responsive a:hover,
  nav.responsive a.active {
    color: #73ded6 !important;
  }
}
</style>
