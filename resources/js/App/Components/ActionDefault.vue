<template>
  <div :class="divClass">
    <div class="col" v-if="(typeof this.create != 'undefined')">
        <button type="button" class="border-b rounded border-gray-300 w-full px-5 py-2 rounded overflow-hidden focus:outline-none focus:shadow-outline bg-indigo-400 text-white text-sm lg:text-base">
            {{ createAction.text }}
        </button>
    </div>
    <div class="col" v-if="(typeof this.edit != 'undefined')">
        <button type="button" class="border-b rounded border-gray-300 w-full px-5 py-2 rounded overflow-hidden focus:outline-none focus:shadow-outline bg-violet-400 text-white text-sm lg:text-base">
            {{ editAction.text }}
        </button>
    </div>
    <div class="col" v-if="(typeof this.delete != 'undefined')">
        <button type="button" class="border-b rounded border-gray-300 w-full px-5 py-2 rounded overflow-hidden focus:outline-none focus:shadow-outline bg-pink-400 text-white text-sm lg:text-base">
            {{ deleteAction.text }}
        </button>
    </div>
  </div>
</template>

<script>
import Button from '../../Jetstream/Button.vue';
export default {
  components: { Button },
  props: ["create", "edit", "delete", "pageDescription"],
  data() {
    return {
      divClass: 'grid grid-cols-3 place-items-stretch gap-3 m-2 py-3',
      createAction: {
        link: "",
        text: "",
      },
      editAction: {
        link: "",
        text: "",
      },
      deleteAction: {
        link: "",
        text: "",
      },
      col: 0,
    };
  },
  methods: {
    setCreateAction(link, text) {
      this.createAction.link = link;
      this.createAction.text = text;
      this.calcColumns(link)  
    },
    setEditAction(link, text) {
      this.editAction.link = link;
      this.editAction.text = text;
      this.calcColumns(link)
    },
    setDeleteAction(link, text) {
      this.deleteAction.link = link;
      this.deleteAction.text = text;
      this.calcColumns(link)
    },
    calcColumns(data) {
        if(data.indexOf([null, '']) == -1) {
            this.col++
            this.divClass = "grid grid-cols-" + this.col + " place-items-stretch gap-3 m-2 py-3"
        }
    },
  },
  created() {
    if(typeof this.create != 'undefined') {
      this.setCreateAction(this.create.link ?? null, this.create.text ?? null);
    }
    if(typeof this.edit != 'undefined') {
      this.setEditAction(this.edit.link ?? null, this.edit.text ?? null);
    }
    if(typeof this.delete != 'undefined') {
      this.setDeleteAction(this.delete.link ?? null, this.delete.text ?? null);
    }
  },
};
</script>

<style>
</style>