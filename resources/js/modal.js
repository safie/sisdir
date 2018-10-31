var btn = document.getElementById('mybtn');
var modal = document.getElementById('mymodal');
var btnclose = document.getElementById('btnclose');

btn.onclick = function() {
modal.style.display = "block";
}

btnclose.onclick = function(){
modal.style.display = "none";
}
