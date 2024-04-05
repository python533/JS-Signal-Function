<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<script type="text/javascript">
function signal(sinyal){
let kelime=pompt("Bir Kelime Yazınız!")
if (kelime == sinyal) {
console.log("Geçerli Sinyal");
}else if (kelime ===! sinyal) {
console.log("Orta Derece Sinyal");
}else {
console.log("Zayıf Sinyal");
}

}
</script>

</head>
<body>
<p id="signal"></p>

<script type="text/javascript">
document.getElementById('demo');
</script>
</body>
</html>
