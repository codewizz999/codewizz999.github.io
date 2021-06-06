Const fs = require('fs');

fs.readFile('package.json', (err, data) => {                                   27     if (err) throw err;
let studentone = JSON.parse(data);
var httpRead = document.getElementById("node").innerHTML =studentone;
});
