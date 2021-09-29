window.onload = function(){
	var temp= document.getElementById('number3');
	temp.addEventListener('change', calculateTotal);

	var price=[80,125,70];
	function calculateTotal(){
		var num1=parseInt(document.getElementById('number1').value);
		var num2=parseInt(document.getElementById('number2').value);
		var num3=parseInt(document.getElementById('number3').value);

		document.getElementById('pr1').innerHTML = "$"+ price[0].toFixed(2);
		var r1=num1*price[0]
		document.getElementById('pr2').innerHTML = "$"+ price[1].toFixed(2);
		var r2=num2*price[1]
		document.getElementById('pr3').innerHTML = "$"+ price[2].toFixed(2);
		var r3=num3*price[2]

		//output
		document.getElementById('result1').innerHTML = "$"+ r1.toFixed(2);
		document.getElementById('result2').innerHTML = "$"+ r2.toFixed(2);
		document.getElementById('result3').innerHTML = "$"+ r3.toFixed(2);
		
		var subtotal = r1+r2+r3;
		var taxes = subtotal*0.1;
		var shipping = 40;
		if(subtotal>1000){
			shipping=0;
		}
		var grandtotal = subtotal+taxes+shipping;
		document.getElementById('subt').innerHTML = "$"+ subtotal.toFixed(2);
		document.getElementById('tax').innerHTML = "$"+ taxes.toFixed(2);
		document.getElementById('ship').innerHTML = "$"+ shipping.toFixed(2);
		document.getElementById('grandt').innerHTML = "$"+ grandtotal.toFixed(2);

	}
}