// maaf belum urut
var data = [
['a','c','b','e','d'],
['g','e','f']
]

data.sort(function(a, b) {
  s = [];
for (var i = 0; i < data.length; i++) {
    s += data[i]+ ', \n';
}
  return a - b;
});



console.log(s);