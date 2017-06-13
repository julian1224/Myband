function startTime() {
var vandaag = new Date();
var h = vandaag.getHours();
var m = vandaag.getMinutes();
var s = vandaag.getSeconds();
m = checkTime(m);
s = checkTime(s);
document.getElementById('txt').innerHTML =
h + ":" + m + ":" + s;
var y = setTimeout(startTime, 500);
}
function checkTime(y) {
if (y < 10) {y = "0" + y};
return y;
}
