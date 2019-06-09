<!--  -->
<template>
  <div class="animated fadeIn m-EWM">
    <Row>
      <Col span="8">
        <Form ref="searchForm" :model="searchForm" :rules="searchRules">
          <Form-item prop="chatnums">
            <Input
              class="m-ewm-text"
              type="textarea"
              v-model="searchForm.chatnums"
              :placeholder="searchForm.placehodler"
              v-blur="handleBlur"
              tabindex="1"
            ></Input>
          </Form-item>
          <!-- 点击搜索 -->
          <Form-item>
            <Button type="primary" icon="ios-search" class="m-search" @click="handleSearch">search</Button>
          </Form-item>
        </Form>
      </Col>
      <Col span="16">
        <section class="m-debar">
          <div class="m-scroll">
            <Menu class="m-menu" active-name="1">
              <MenuItem name="1">
                <img src="../../static/img/logo.png" alt="无" title="点击看大图" @click="preview=true">
                <a>adfa</a>
              </MenuItem>
              <MenuItem name="2">
                <img src alt="无">
                <a>adfa</a>
              </MenuItem>
            </Menu>
          </div>
        </section>
      </Col>
    </Row>
    <Modal v-model="preview" @on-visible-change="visibleChange" class="m-modal">
      <img src="../../static/img/logo.png" alt>
      {{timeout}}s后自动关闭……
    </Modal>
  </div>
</template>

<script>
import { isNoWX, strInCommaLineBreakSpace2Arr } from "utils";

export default {
  data() {
    const validateChatNum = (rule, value, callback) => {
      if (isNoWX(value)) {
        callback(new Error("包含不合法的字符"));
      } else {
        callback();
      }
    };
    return {
      preview: false,
      timeout: 5,
      searchForm: {
        placehodler:
          "请输入二维码关联账号。账号支持多个,多个账号可以换行、空格、逗号(,)区分。",
        chatnums: "1a1d3fa1fd"
      },
      searchRules: {
        chatnums: [
          { required: true, trigger: "blur", validator: validateChatNum }
        ]
      }
    };
  },

  derectives: {
    blur: {
      inserted: function(el) {
        el.blur();
      }
    }
  },
  created: function() {},

  components: {},

  computed: {},
  mounted() {
    //检查有没有域名数据
    //如果没有就加载
  },
  methods: {
    visibleChange(isVisible) {
      let vm = this;
      if (isVisible) {
        setTimeout(() => {
          vm.preview = false;
          vm = null;
        }, vm.timeout * 1000);
      }
    },
    handleSearch() {
      //判读 空
      this.$refs.searchForm.validate(valid => {
        if (valid) {
          this.loading = true;
        } else {
          console.log("不能为空");

          return false;
        }
      });
      //筛选 语法 并保留
      // 查询 合法 ewm
      //发起响应事件
    },
    handleBlur(str) {
      console.log(1);

      this.searchForm.chatnums = strInCommaLineBreakSpace2Arr(
        this.searchForm.chatnums
      ).join("\n");
    }
  }
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