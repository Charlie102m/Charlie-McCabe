<template>
  <aside>
    <a href="https://www.facebook.com/charlie101m" target="_blank">
      <font-awesome-icon :icon="['fab', 'facebook-f']" />
    </a>
    <a href="https://twitter.com/charlie102m" target="_blank">
      <font-awesome-icon :icon="['fab', 'twitter']" />
    </a>

    <a
      href="https://www.linkedin.com/in/charlie-mccabe-22b340146/"
      target="_blank"
    >
      <font-awesome-icon :icon="['fab', 'linkedin-in']" />
    </a>
    <a href="https://www.instagram.com/charlie.mccabe/" target="_blank">
      <font-awesome-icon :icon="['fab', 'instagram']" />
    </a>
  </aside>
</template>

<script>
export default {
  name: "SocialNav"
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
aside {
  padding-top: 24vh;
  position: absolute;
  height: 100vh;
  width: 50px;
  z-index: 100;
  top: 0;
  left: 0;
  overflow-x: hidden;
  text-align: center;
}

aside .svg-inline--fa {
  padding: 4vh 0;
  display: block;
  margin: 0 auto;
  font-size: 2rem;
  color: #f4f4f8;
}

aside .svg-inline--fa:hover {
  cursor: pointer;
}

@media screen and (max-width: 880px) {
  aside {
    height: auto;
    width: 100vw;
    padding: 10px;
    vertical-align: middle;
  }
  aside .svg-inline--fa {
    display: inline;
    padding: 0 5vw;
  }
}

aside [data-icon*="facebook-f"]:hover {
  color: #4267b2;
}

aside [data-icon*="twitter"]:hover {
  color: #1da1f2;
}

aside [data-icon*="linkedin-in"]:hover {
  color: #2867b2;
}

aside [data-icon*="instagram"]:hover {
  color: #833ab4;
}
</style>
