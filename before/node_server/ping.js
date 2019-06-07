
let getClientIp = function (req) {
    return req.headers['x-forwarded-for'] ||
        req.connection.remoteAddress ||
        req.socket.remoteAddress ||
        req.connection.socket.remoteAddress || '';
}

console.log(getClientIp(req));
let ip = getClientIp(req).match(/\d+.\d+.\d+.\d+/);
console.log(ip);
ip = ip ? ip.join('.') : null;
