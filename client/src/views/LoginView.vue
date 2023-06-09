<template>
  <div class="about">
    <h1>Login</h1>
    <div class="form">
      <div class="form-group">
        <input type="text" v-model="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="text" v-model="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <input type="submit" @click.prevent="store()" value="Send">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
    }
  },
  mounted() {
  },
  methods: {
    store() {
      this.$http.post('api/auth/login', {email: this.email, password: this.password})
          .then((res) => {
            console.log(res);
          }).catch((err) => {
        console.log(err);
      })
    }
  }
}
</script>
