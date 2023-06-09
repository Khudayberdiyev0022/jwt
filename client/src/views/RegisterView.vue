<template>
  <div class="about">
    <h1>Register</h1>
    <div class="form">
      <div class="form-group">
        <input type="text" v-model="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="text" v-model="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="text" v-model="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <input type="text" v-model="password_confirmation" class="form-control" placeholder="Password Confirmation">
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
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
    }
  },
  mounted() {
  },
  methods: {
    store() {
      this.$http.post('api/auth/register', {name: this.name, email: this.email, password: this.password, password_confirmation: this.password_confirmation,})
          .then((res) => {
            console.log(res);
          }).catch((err) => {
        console.log(err);
      })
    }
  }
}
</script>
