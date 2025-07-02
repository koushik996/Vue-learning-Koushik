<template>
  <p>Name: {{ user.name }}</p>
  <p>Age: {{ user.age }}</p>

  <button @click="increment">Count: {{ count }}</button><br><br>
  <button @click="user.name = 'Reddy'">Change Name</button><br><br>
  <button @click="user.age++">Increase Age</button>
</template>

<script setup>
import { reactive, ref } from 'vue'

let count = ref(0)

const user = reactive({
  name: 'koushik',
  age: 21
})

function increment() {
  count.value++
}
</script>
