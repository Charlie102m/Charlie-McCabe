import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Portfolio from '../views/Portfolio.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: { transition: 'fade-in-left' },
  },
  {
    path: '/about',
    name: 'about',
    component: About,
    meta: { transition: 'fade-in-right' },

  },
  {
    path: '/portfolio',
    name: 'portfolio',
    component: Portfolio

  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

router.beforeEach((to, from, next) => {
  if (to.name === 'about' && from.name === 'portfolio') {
    routes[1].meta.transition = 'fade-in-left'
  } else {
    routes[1].meta.transition = 'fade-in-right'
  }
  next()
})

export default router
