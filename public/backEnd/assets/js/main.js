// $('.nav li').click(function(){
//     $('.nav li').removeClass('active');
//     $(this).addClass('active');
// })

$('document').ready(function () {
	if($('noti')){
		$('.noti').fadeOut(20000);
	}
});

$('.confirm').click(function () {
	return confirm('are u sure?');
});



var ol;
var oh;
var dimx=645;
var dimy=645;
	function showaxis() {
		var d=document.getElementsByClassName('map');
		    var sc=document.getElementById('sc');
    var sb=document.getElementById('sb');
  var X = event.clientX;
  var dX = d[0].offsetLeft;
  var Y = event.clientY;
  var dY =d[0].offsetTop;
var cf=0;
  var cond=window.outerWidth>909;
 if (cond) {
cf=260;
 }
  X=X-dX+window.pageXOffset+sc.scrollLeft+sb.scrollLeft-cf;/*21 x*/
  Y=Y-dY+window.pageYOffset+sc.scrollTop+sb.scrollTop;/*38 y*/
  var ox=document.getElementsByClassName("map")[0].style.width;
  var oy=document.getElementsByClassName("map")[0].style.height;
  ol=X*dimx/parseInt(ox);
  oh=Y*dimy/parseInt(oy);
  document.getElementById("Xcoordinate").getAttributeNode("value").value=Math.round(ol-21);
  document.getElementById("Ycoordinate").getAttributeNode("value").value=Math.round(oh-38);
  var div=document.getElementById("temp");
  div.style.display="inline-block";
  div.style.marginLeft=(ol-21).toString()+"px";
  div.style.marginTop=(oh-38).toString()+"px";
  fit();
	}
	function fit(){
    var form=document.getElementById("form");
    var map=document.getElementsByClassName("map");
 		var w = window.outerWidth;
  		var h = window.outerHeight;
  		var offset=38;
  		var nw=w/2-offset;
    map[0].style.width=nw.toString()+"px";
    map[0].style.height=nw.toString()+"px";
  var div=document.getElementById("temp");
  div.style.marginLeft=(nw*ol/dimx-21).toString()+"px";
  div.style.marginTop=(nw*oh/dimy-38).toString()+"px";

	}
// $('.nav li').click(function(){
//     $('.nav li').removeClass('active');
//     $(this).addClass('active');
// })

$('document').ready(function () {
	if($('noti')){
		$('.noti').fadeOut(20000);
	}
});

$('.confirm').click(function () {
	return confirm('are u sure?');
});



var ol;
var oh;
var dimx=645;
var dimy=645;
	function showaxis() {
		var d=document.getElementsByClassName('map');
		    var sc=document.getElementById('sc');
    var sb=document.getElementById('sb');
  var X = event.clientX;
  var dX = d[0].offsetLeft;
  var Y = event.clientY;
  var dY =d[0].offsetTop;
var cf=0;
  var cond=window.outerWidth>909;
 if (cond) {
cf=260;
 }
  X=X-dX+window.pageXOffset+sc.scrollLeft+sb.scrollLeft-cf;/*21 x*/
  Y=Y-dY+window.pageYOffset+sc.scrollTop+sb.scrollTop;/*38 y*/
  var ox=document.getElementsByClassName("map")[0].style.width;
  var oy=document.getElementsByClassName("map")[0].style.height;
  ol=X*dimx/parseInt(ox);
  oh=Y*dimy/parseInt(oy);
  document.getElementById("Xcoordinate").getAttributeNode("value").value=Math.round(ol-21);
  document.getElementById("Ycoordinate").getAttributeNode("value").value=Math.round(oh-38);
  var div=document.getElementById("temp");
  div.style.display="inline-block";
  div.style.marginLeft=(ol-21).toString()+"px";
  div.style.marginTop=(oh-38).toString()+"px";
  fit();
	}
	function fit(){
    var form=document.getElementById("form");
    var map=document.getElementsByClassName("map");
 		var w = window.outerWidth;
  		var h = window.outerHeight;
  		var offset=38;
  		var nw=w/2-offset;
    map[0].style.width=nw.toString()+"px";
    map[0].style.height=nw.toString()+"px";
  var div=document.getElementById("temp");
  div.style.marginLeft=(nw*ol/dimx-21).toString()+"px";
  div.style.marginTop=(nw*oh/dimy-38).toString()+"px";

	}
