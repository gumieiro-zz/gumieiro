<template>
  <app-layout title="Contas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Contas</h2>
    </template>

    <!-- Superior -->
    <div class="py-5">
      <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import ActionDefault from "@/App/Components/ActionDefault";

export default defineComponent({
  components: {
    AppLayout,
    ActionDefault,
  },
});
</script>
