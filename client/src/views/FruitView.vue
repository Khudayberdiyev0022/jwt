<template>
  <div class="about">
    <h1>This is an Fruits page</h1>
    <ul>
      <li v-for="fruit in fruits" style="list-style: none">
        <p>{{ fruit.id }} - {{ fruit.name }}</p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fruits: [],
    }
  },
  mounted() {
    this.getFruits();
  },
  methods: {
    getFruits()  {
      this.$http.get('api/fruits')
          .then((res) => {
           this.fruits = res.data.data;
          }).catch((err) => {
        console.log(err);
      })
    }
  }
}
</script>
