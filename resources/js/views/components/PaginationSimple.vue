<template>
  <nav aria-label="Table Paging" class="my-3" v-if="lastPage > 1">
    <ul class="pagination justify-content-end mb-0">
      <li :class="['page-item', { disabled: currentPage === 1 }]">
        <button class="page-link" type="button" @click="emitPage(currentPage - 1)" :disabled="currentPage === 1">
          Previous
        </button>
      </li>

      <li
        v-for="p in pages"
        :key="p"
        :class="['page-item', { active: p === currentPage }]"
      >
        <button class="page-link" type="button" @click="emitPage(p)">
          {{ p }}
        </button>
      </li>

      <li :class="['page-item', { disabled: currentPage === lastPage }]">
        <button class="page-link" type="button" @click="emitPage(currentPage + 1)" :disabled="currentPage === lastPage">
          Next
        </button>
      </li>
    </ul>
  </nav>
</template>

<script setup>
import { computed } from 'vue'
const props = defineProps({
  currentPage: { type: Number, required: true },
  lastPage: { type: Number, required: true },
  delta: { type: Number, default: 2 }
})
const emits = defineEmits(['navigate'])

const pages = computed(() => {
  const out = []
  const start = Math.max(1, props.currentPage - props.delta)
  const end = Math.min(props.lastPage, props.currentPage + props.delta)
  for (let i = start; i <= end; i++) out.push(i)
  return out
})

function emitPage(p) {
  if (p < 1 || p > props.lastPage || p === props.currentPage) return
  emits('navigate', p)
}
</script>