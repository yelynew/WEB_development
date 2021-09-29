window.onload = function () {
	//alert("sss");

	var x = document.getElementById("myBtn");
 
    if (x.addEventListener) {
        x.addEventListener("click", myFunction);
    }
    else if (x.attachEvent) {
        x.attachEvent("onclick", myFunction);
    }


    function addToCookie(id, value){
      document.cookie = id  + escape(value);
  }


    function myFunction (){
    //alert("sss");
	var name = document.getElementById("name").value;
    var street = document.getElementById("street").value;
    var city = document.getElementById("city").value;
    city.replace(/%20/g, " ");
    var state = document.getElementById("state").value;
    var zip = document.getElementById("zip").value;
    var phone = document.getElementById("phone").value;
    phone.replace(/%28/g, "(");
    phone.replace(/%29/g, ")");
    var mail = document.getElementById("mail").value;
    var phone = document.getElementById("phone").value;
    var infoarray = document.getElementById("info");
    var selected = [];
      for (var option of infoarray.options) {
        if (option.selected) {
          selected.push(option.value);
        }
      }
  //alert(selected);
   var info="";
     for (i=0;i<selected.length;i++){
          info+=selected[i]+" ";
      }
   var dish = document.getElementById("dish").value;
   var term = document.getElementById("dineSpin").value;
   var mailCB = "no";
   if (document.getElementById('mailCB').checked) {
    mailCB = document.getElementById('mailCB').value;}
    //alert(mailCB);

    var visit = document.getElementById("visit").value;
    var order = document.getElementById("order").value;
    var sFriend ="";
    if (document.getElementById('fYes').checked) {
    sFriend= document.getElementById('fYes').value;}
    else if (document.getElementById('fNo').checked) {
    sFriend= document.getElementById('fNo').value;}
    var oCorrect ="";
    if (document.getElementById('cYes').checked) {
    oCorrect= document.getElementById('cYes').value;}
    else if (document.getElementById('cNo').checked) {
    oCorrect= document.getElementById('cNo').value;}
    var foodHot ="";
    if (document.getElementById('hYes').checked) {
    foodHot= document.getElementById('hYes').value;}
    else if (document.getElementById('hNo').checked) {
    foodHot= document.getElementById('hNo').value;}
    var range = document.getElementById("rangeBox").value;
    var box = document.getElementById("commBox").value;



    addToCookie("Name= ", name);
    addToCookie("Street= ",street);
    addToCookie("City=",city);
    addToCookie("State= ", state);
    addToCookie("zip= ", zip);
    addToCookie("Phone= ",phone);
    addToCookie("Email=",mail);
    addToCookie("Where did you hear about us? =",info);
    addToCookie("What's your favorite dish? =",dish);
    addToCookie("How many times do you dine out per month? =",term);
    addToCookie("Mail Service Agree =",mailCB);
    addToCookie("Date of visit =",visit);
    addToCookie("Orger Type =",order);
    addToCookie("Was your service friendly? =",sFriend);
    addToCookie("Was your order correct? =",oCorrect);
    addToCookie("Was your food hot? =",foodHot);
    addToCookie("Rate the overall service =",range);
    addToCookie("Tell us more about your experience! =",box);
    //alert(name +" " + street + " " + city);
    window.open("result.html");

    
    }

}
