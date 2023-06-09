<template>
  <div class="container">
    <h1>Login</h1>
    <div class="row">
      <div class="col-6 m-auto">
        <div class="form-group mb-3">
          <input type="text" v-model="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group mb-3">
          <input type="text" v-model="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="submit" @click.prevent="store()" value="Send" class="btn btn-primary">
        </div>
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
            console.log(res.data);
            this.email = '';
            this.password = '';
          }).catch((err) => {
        console.log(err);
      })
    }
  }
}
</script>
