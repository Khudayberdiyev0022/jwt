<template>
  <div id="app" class="p-5">
    <nav>
      <router-link :to="{name: 'home'}">Home</router-link> |
      <router-link :to="{name: 'fruits'}">Fruits</router-link>  |
      <router-link :to="{name: 'login'}">Login</router-link>  |
      <router-link :to="{name: 'register'}">Register</router-link>
    </nav>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>
