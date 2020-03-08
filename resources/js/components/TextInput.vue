<template>
  <form-group :label="label">
    <input @change="change" :type="type" class="form-control"  :id="name" :value="value" :name="name" :placeholder="placeholder" />
  </form-group>
</template>
<script>
export default {
    props : ['name','type','placeholder',"value","label"],
    methods : {
      change(event){
        this.$emit('my_change',event.target.value);
      }
    }
};
</script>