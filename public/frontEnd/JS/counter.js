var once=0;
var y=document.getElementsByClassName('ui-value')
var x1=y[0].innerHTML;
var x2=y[1].innerHTML;
var x3=y[2].innerHTML;
y[0].innerHTML=0;
y[1].innerHTML=0;
y[2].innerHTML=0;
window.addEventListener('scroll', function() {
	var element = document.querySelector('#val');
	var position = element.getBoundingClientRect();

	if(position.top >= 0 && position.bottom <= window.innerHeight&&!once) {
		
		
		increment(x1,y[0],5/x1*500);
		increment(x2,y[1],5/x2*500);
		increment(x3,y[2],5/x3*500);
	}
});


function increment(x,y,speed) {

	var val=0;
	
	for ( val=0; val<=x; val++) { 
	   task(val,y,speed); }
	   once++;
 
  }


function task(val,y,speed) { 
  setTimeout(function() { 
      y.innerHTML=val; 
  }, speed * val); 
} 