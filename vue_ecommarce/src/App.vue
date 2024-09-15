<script setup>
import { RouterLink, RouterView } from 'vue-router'
// import img from '@/assets/img'; // Adjust the path as needed



import Navbar from './components/Navbar.vue';
import Topvar from './components/Topvar.vue';
import Footer from './components/Footer.vue';
</script>

<template>
 
<div>
  <div>
        <RouterLink to="/"> Home</RouterLink>
    <RouterLink to="/about"> About</RouterLink>
    <RouterLink to="/Contact"> Contact</RouterLink>
    </div>

  <div><Topvar /></div>
<div><Navbar /></div>
  <RouterView />
  <div><Footer/></div>
</div>

</template>

<style scoped>



</style>
