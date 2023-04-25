<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/hello">Show Page</Link>
  <!-- <div>The page with time {{ timer }}</div> -->
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <div>{{ y }}</div>
  <slot>Default</slot>
</template>

<script setup>
  import { ref, computed } from 'vue'
  import { Link, usePage } from '@inertiajs/vue3'

  const x = ref(0)
  const y = computed(()=> x.value * 2)

  // page.props.value.flash.success
  const page = usePage()
  // console.log('page',page);
  // console.log('page.props',page.props);
  // console.log('page.props.value',page.props.value);
  // console.log('page.props.flash',page.props.flash);
  const flashSuccess = computed(
    ()=>page.props.flash.success,
    )
  // import {ref} from 'vue'

  // const timer = ref(0)
  // setInterval(() => timer.value++, 1000)
</script>

<style scoped>
.success{
  background-color:green;
  color: white;
}
</style>