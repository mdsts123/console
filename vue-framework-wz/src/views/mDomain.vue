<!--  -->
<template>
  <div class="animated fadeIn m-domain">
    <Row>
      <Col  class="m-container">
        <!--服务器列表-->
        <ul class="serverMenu">
          加载获得
        </ul>

      </Col>
    </Row>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },

  created: function() {},

  components: {},

  computed: {},

  methods: function() {}
};
</script>
<style scoped>
.serverMenu {
  display: flex;
  height: 40px;
  line-height: 40px;
  background-color: #1e77ab;
}
.serverMenu li {
  text-align: center;
  transition: .2s;
  cursor: pointer;
}
.serverMenu li.active,
.serverMenu li:hover {
  background-color: #51e678;
  color: #1e77ab;
}
</style>