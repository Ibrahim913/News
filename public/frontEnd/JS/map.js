var ol=[];
var oh=[];
var style=window.getComputedStyle(document.getElementsByClassName('map')[0]);
var dimx=parseInt(style.width);
var dimy=parseInt(style.height);
var style=window.getComputedStyle(document.getElementsByClassName('city-info')[0]);
var dx=parseInt(style.width);
var dy=parseInt(style.height);
var pin=window.getComputedStyle(document.getElementsByClassName('material-icons')[0]);
pin=parseInt(pin.fontSize);
for (var i = 0; i < document.getElementsByClassName('Location').length; i++) {
			var style=window.getComputedStyle(document.getElementsByClassName('Location')[i]);
			ol.push(parseInt(style.marginLeft));
			oh.push(parseInt(style.marginTop));
		}
fit();
function checkof(el)
{
   var curOverflow = el.style.overflow;

   if ( !curOverflow || curOverflow === "visible" )
      el.style.overflow = "hidden";

   var isOverflowing = el.clientWidth < el.scrollWidth 
      || el.clientHeight < el.scrollHeight;

   el.style.overflow = curOverflow;

   return isOverflowing;
}
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

function show(x,z) {
	setTimeout(function() { show1(x,z) },300);
}
function show1(x,z) {

		var y=document.getElementsByClassName('description');
		
		y[x].style.display='block';

		z.style.color="black";
		var y=document.getElementsByClassName('Location');
		y[x].style.zIndex=10;
	}
	function hide(x,z) {
	setTimeout(function() { hide1(x,z) },500);
}
	function hide1(x,z) {
		var y=document.getElementsByClassName('description');
		
		y[x].style.display='none';
		z.style.color="red";
		var y=document.getElementsByClassName('Location');
		y[x].style.zIndex=0;
	}
	function show_info(x) {
		var y=document.getElementsByClassName('city-info');
		for (var i = 0; i < y.length; i++) {
			if(i==x)
				{continue;}
			y[i].style.display='none';
		}
		y[x].style.display='block';
	}
	function close_all() {
		var y=document.getElementsByClassName('city-info');
		for (var i = 0; i < y.length; i++) {
			y[i].style.display='none';
		}
		y=document.getElementsByClassName('map');
		y[0].style.display='block';
		
	}
	function fit() {
		 var w = window.outerWidth;
  		var h = window.outerHeight;
  		var y=document.getElementsByClassName('map');
  		 var mark=document.getElementsByClassName('Location');
  		 var rpin=document.getElementsByClassName('material-icons');
  		 var cityinf=document.getElementsByClassName('city-info');
		if(w<=660)
		{
			 
			
			 var dim=window.getComputedStyle(y[0]);
			 var width=dim.width;
			 var height=dim.height;
			  var nw=w-50;
		y[0].style.width=nw.toString()+"px";
		y[0].style.height=nw.toString()+"px";
		
		for (var i = 0; i < mark.length; i++) {
			var fs=nw*pin/dimx;
			var ml=nw*ol[i]/dimx;
			var mt=nw*oh[i]/dimy;
			var ciw=nw*dx/dimx;
			/*var cih=nw*dy/dimy;*/
			mark[i].style.marginLeft=ml.toString()+"px";
			mark[i].style.marginTop=mt.toString()+"px";
			rpin[i].style.fontSize=fs.toString()+"px";
			cityinf[i].style.width=ciw.toString()+"px";
		}
		}
		else{
		y[0].style.width=dimx.toString()+"px";
		y[0].style.height=dimy.toString()+"px";
		for (var i = 0; i < mark.length; i++) {
			mark[i].style.marginLeft=ol[i].toString()+"px";
			mark[i].style.marginTop=oh[i].toString()+"px";
			rpin[i].style.fontSize=pin.toString()+"px";
			cityinf[i].style.width=dx.toString()+"px";
			cityinf[i].style.height=dy.toString()+"px";
		}
	}

	}
	