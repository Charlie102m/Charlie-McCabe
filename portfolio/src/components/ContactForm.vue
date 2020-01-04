<template>
  <section class="contact-section">
    <font-awesome-icon :icon="['fas', 'times']" @click="HideContactFrom()" />
    <h2>I love to chat!</h2>
    <p>I would love to hear from you about projects, collaborations or work opportunites!</p>
    <p>Drop me a message below and I will email you back as soon as I can.</p>
    <form v-on:submit.prevent="SubmitForm()">
      <input
        type="text"
        class="form-input"
        name="name"
        v-model="form.name"
        placeholder="What's your name?"
      />
      <input
        type="email"
        class="form-input"
        name="email"
        v-model="form.email"
        placeholder="Enter your email"
      />
      <textarea
        name="message"
        class="form-input"
        rows="5"
        v-model="form.message"
        placeholder="What would you like to say?"
      ></textarea>
      <button class="submit">Send</button>
    </form>
  </section>
</template>

<script>
export default {
  name: "ContactForm",
  data() {
    return {
      form: {
        name: null,
        email: null,
        message: null
      }
    };
  },
  methods: {
    HideContactFrom() {
      return this.$emit("HideContactFrom");
    },
    SubmitForm() {
      const formData = JSON.parse(JSON.stringify(this.form));
      console.log("formData: ", formData);
      this.form.name = null;
      this.form.email = null;
      this.form.message = null;
      return this.HideContactFrom();
    }
  }
};
</script>

<style>
.contact-section {
  width: 30vw;
  max-height: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  right: 0;
  background-color: white;
  z-index: 300;
  padding: 30px 40px;
  overflow-y: auto;
}

.contact-section .svg-inline--fa {
  font-size: 25px;
  color: #2c2c2db2;
  cursor: pointer;
}

.contact-section h2 {
  margin: 20px 0;
  font-size: 2rem;
  font-weight: 400;
  color: #73ded6;
  text-transform: uppercase;
}
.contact-section p {
  font-weight: 300;
  font-size: 1.5rem;
}
.contact-section .form-input {
  display: block;
  width: 100%;
  margin: 25px 0;
  padding: 5px;
  font-size: 1.5rem;
  font-weight: 200;
  border-radius: 0;
  border: 0;
  border-bottom: 3px solid #912668;
  background-color: #2c2c2d0b;
  outline: none;
}

.contact-section .form-input:focus {
  box-shadow: 0 0 3px black;
}

button {
  display: block;
  text-align: center;
  margin: 0 auto 50px;
  font-weight: 400;
  font-size: 2rem;
  width: 50%;
  border-radius: 30px;
  background-color: #2c2c2d;
  color: white;
  text-decoration: none;
  padding: 10px;
  cursor: pointer;
}

input::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: rgba(0, 0, 0, 0.5);
}
input:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
input::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
input:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: rgba(0, 0, 0, 0.5);
}
input:placeholder-shown {
  /* Standard Pseudo-class */
  color: rgba(0, 0, 0, 0.5);
}
textarea::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: rgba(0, 0, 0, 0.5);
}
textarea:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
textarea::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
textarea:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: rgba(0, 0, 0, 0.5);
}
textarea:placeholder-shown {
  /* Standard Pseudo-class */
  color: rgba(0, 0, 0, 0.5);
}

@media screen and (max-width: 886px) {
  .contact-section {
    width: 100% !important;
    box-sizing: border-box;
    padding: 40px;
    left: 0;
  }
}
</style>