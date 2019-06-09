<!--  -->
<template>
  <div class="animated fadeIn m-domain">
    <!-- 服务器列表 -->
    <Row>
      <Col>
        <!--  -->
        <Menu mode="horizontal" active-name="1">
          <MenuItem name="1">s-服务器</MenuItem>
          <MenuItem name="2">s-服务器</MenuItem>
          <MenuItem name="3">s-服务器</MenuItem>
          <MenuItem name="4">s-服务器</MenuItem>
          <MenuItem name="5">s-服务器</MenuItem>
        </Menu>
      </Col>
    </Row>
    <Row class="m-container">
      <!-- 站点查找 -->
      <Col span="4" class="m-webs">
        <section class="search">
          <input class type="text" placeholder="站点名">
          <p class="result">当前服务器共个站点</p>
          <p class="result">搜索结果有个站点</p>
        </section>
        <div class="m-debar">
          <div class="m-scroll">
            <Menu active-name="1" width="auto" class="m-menu">
              <MenuItem name="1">fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
              <MenuItem>fq20.s</MenuItem>
            </Menu>
          </div>
          </div>
      </Col>
      <!-- 域名 -->
      <Col span="12">
        <section class="search">
          <input class type="text" placeholder="站点名">
          <p class="result">当前服务器共个站点</p>
          <p class="result">搜索结果有个站点</p>
        </section>
        <div class="m-debar">
          <div class="m-scroll">
            <Menu active-name="1" width="auto" class="m-menu">
              <MenuItem name="1">fq20.s
              <a href="" class="m-fr">w</a></MenuItem>
              <MenuItem>fq20.s</MenuItem>

            </Menu>
          </div>
          </div>
      </Col>
      <!--全局查找 -->
      <Col span="8"></Col>
    </Row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      columns1: [
        {
          title: "Name",
          key: "name"
        },
        {
          title: "Age",
          key: "age"
        },
        {
          title: "Address",
          key: "address"
        }
      ],
      data1: [
        {
          name: "John Brown",
          age: 18,
          address: "New York No. 1 Lake Park",
          date: "2016-10-03"
        },
        {
          name: "Jim Green",
          age: 24,
          address: "London No. 1 Lake Park",
          date: "2016-10-01"
        },
        {
          name: "Joe Black",
          age: 30,
          address: "Sydney No. 1 Lake Park",
          date: "2016-10-02"
        },
        {
          name: "Jon Snow",
          age: 26,
          address: "Ottawa No. 2 Lake Park",
          date: "2016-10-04"
        }
      ]
    };
  },

  created: function() {},

  components: {},

  computed: {},
  mounted() {
    //检查有没有域名数据
    //如果没有就加载
  },
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
  transition: 0.2s;
  cursor: pointer;
}
.serverMenu li.active,
.serverMenu li:hover {
  background-color: #51e678;
  color: #1e77ab;
}
/*  */
</style>