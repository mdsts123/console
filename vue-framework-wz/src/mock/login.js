import { param2Obj } from 'utils';

const userMap = {
  admin: {
    role: ['admin'],
    token: 'admin',
    introduction: '我是超级管理员',
    name: 'Super Admin',
    uid: '001'
  },
  editor: {
    role: ['editor'],
    token: 'editor',
    introduction: '我是编辑',
    name: 'Normal Editor',
    uid: '002'


  },
  developer: {
    role: ['develop'],
    token: 'develop',
    introduction: '我是开发',
    name: '工程师小王',
    uid: '003'
  },
  //Web resource developer 网络资源开发
  WR: {
    role: ['WR'],
    token: 'WR',
    introduction: '我是WR',
    name: 'WR小王',
    uid: '004'
  }
}

export default {
  //http://mockjs.com/
  //https://github.com/nuysoft/Mock/wiki/Mock.mock()
  //含有 url、type 和 body
  loginByEmail: config => {
    const { email } = JSON.parse(config.body);
      return userMap[email.split('@')[0]];
  },
  getInfo: config => {
    const { token } = param2Obj(config.url);
    if (userMap[token]) {
      return userMap[token];
    } else {
      return Promise.reject('a');
    }
  },
  logout: () => 'success'
};
