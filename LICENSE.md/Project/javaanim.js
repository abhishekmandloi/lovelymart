function startAnim(id)
  {
	var imgId=document.getElementById(id);
	imgId.style.transition=(2*Math.random()+3*Math.random())+'s';
	var newAnims=Math.floor(7*Math.random());
	//alert(newAnims);
	switch(newAnims)
	{
		case 0:
		imgId.style.webkitTransform='scale(-'+1.5*Math.random()+') rotate('+100*Math.random()+'deg)';
		imgId.style.transform='scale(-'+1.5*Math.random()+') rotate('+(2000*Math.random()+100*Math.random())+'deg)';
	
		break;
		case 1:
		imgId.style.webkitTransform='scale('+1.8*Math.random()+') rotate('+10*Math.random()+'deg)';
		imgId.style.transform='scale('+1.8*Math.random()+') rotate('+(10*Math.random()+10*Math.random())+'deg)';

		break;
		case 2:
		imgId.style.webkitTransform='scale(-'+2*Math.random()+') rotate(-'+30*Math.random()+'deg)';
		imgId.style.transform='scale(-'+2*Math.random()+') rotate(-'+(50*Math.random()+10*Math.random())+'deg)';

		break;
		case 3:
		imgId.style.webkitTransform='scale('+1.3*Math.random()+') rotate(-'+100*Math.random()+'deg)';
		imgId.style.transform='scale('+1.3*Math.random()+') rotate(-'+(-20*Math.random()+10*Math.random())+'deg)';

		break;
		case 4:
		imgId.style.webkitTransform='scale('+1.6*Math.random()+') rotate(-'+80*Math.random()+'deg)';
		imgId.style.transform='scale('+1.6*Math.random()+') rotate(-'+(700*Math.random()+60*Math.random())+'deg)';

		break;
		case 5:
		imgId.style.webkitTransform='scale(-'+1.9*Math.random()+') rotate('+10*Math.random()+'deg)';
		imgId.style.transform='scale(-'+1.9*Math.random()+') rotate('+(3000*Math.random()-400*Math.random())+'deg)';

		break;
		
		case 6:
		imgId.style.transform='scale('+(1.2+3*Math.floor(Math.random()))+')';
		imgId.style.webkitTransform='scale('+(1.2+3*Math.floor(Math.random()))+')';
		break;
		
		break;
		default:
		imgId.style.webkitTransform='scale(-'+1.45*Math.random()+') rotate('+980*Math.random()+'deg)';
		imgId.style.transform='scale(-'+1.65*Math.random()+') rotate('+(1000*Math.random()-500*Math.random())+'deg)';
		
	}
	imgId.style.backfaceVisibility = "hidden";
	imgId.style.perspective ="1000px";
	imgId.style.overflow='hidden';
  }
  function closeAnim(id)
  {
	var imgId=document.getElementById(id);
	imgId.style.transition='0.6s';
	imgId.style.webkitTransform='scale(1) rotate(0deg)';
	
	imgId.style.transform='scale(1) rotate(0deg)';
	imgId.style.backfaceVisibility = "hidden";
	imgId.style.perspective ="1000px";
  }
  (function(){
    var prevTarget=null;
    document.addEventListener('mouseover', function(e) {
        var target=e.target;
		var strTarget=target+"";
        if(target!==prevTarget){
			if(strTarget=="[object HTMLImageElement]")
			{
				startAnim(target.id);
			}
            console.log(target);
            prevTarget=target;
			//alert(target+","+strTarget+","+"[object HTMLImageElement]");
        }
    });
})();
(function(){
    var prevTarget=null;
    document.addEventListener('mouseout', function(e) {
        var target=e.target;
		var strTarget=target+"";
        if(target!==prevTarget){
			if(strTarget=="[object HTMLImageElement]")
			{
			//alert("out function");
				closeAnim(target.id);
			}
            console.log(target);
            prevTarget=target;
			//alert(target+","+strTarget+","+"[object HTMLImageElement]");
        }
    });
})();