<template>
  <div id="app">
    <SocialNav />
    <MainNav @ContactFormRequested="DisplayContactForm()" />
    <transition name="slide-fade">
      <ContactForm
        v-if="DisplayContactFormBool"
        @HideContactFrom="HideContactFrom()"
      />
    </transition>
    <vue-page-transition name="fade-in-right">
      <router-view />
    </vue-page-transition>
  </div>
</template>

<script>
import SocialNav from "@/components/SocialNav.vue";
import MainNav from "@/components/MainNav.vue";
import ContactForm from "@/components/ContactForm.vue";
export default {
  components: {
    SocialNav,
    ContactForm,
    MainNav
  },
  data() {
    return {
      DisplayContactFormBool: false
    };
  },
  methods: {
    DisplayContactForm() {
      return (this.DisplayContactFormBool = true);
    },
    HideContactFrom() {
      return (this.DisplayContactFormBool = false);
    }
  }
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Raleway:200,300,400,600&display=swap");

html,
body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  font-family: "Raleway", sans-serif;
  font-weight: 200 !important;
  background: url("assets/background-home-6.png") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  line-height: 2.5rem;
}
.slide-fade-enter-active {
  transition: all 0.3s ease;
}
.slide-fade-leave-active {
  transition: all 0.5s ease;
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
