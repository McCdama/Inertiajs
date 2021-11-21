<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">INSPIRE</h1>
    <p class="mb-8 leading-normal">{{ $page['props']['out'] }}</p>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
    metaInfo: { title: 'Inspire' },
    layout: Layout,
}
</script>