console.log("whoop!");
var btn = document.getElementById("downloadBtn");
var btnText = document.getElementById("downloadBtn").childNodes[0];
btn.addEventListener('click', function(){
  // submit for on click.
document.getElementById("formz").submit();
});

// css on mouse down
btn.addEventListener('mousedown',function(){

btn.style.backgroundColor = 'black';
  btnText.style.color = "white";
});

// css on mouse up
btn.addEventListener('mouseup', function(){
  btn.style.backgroundColor = "white";
  btnText.style.color = "black";
});
