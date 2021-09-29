window.onload = function () {// JavaScript source code

            
    var x = document.getElementById("myBtn");

    if (x.addEventListener) {

        x.addEventListener("click", myTotals);

    }

    else if (x.attachEvent) {

        x.attachEvent("onclick", myTotals);

    }



    

    function myTotals() {
    //var survey=document.getElementById('survey');
    //var forms=document.getElementsByClassName('formRow');
    var forms=document.getElementById('survey');
    var z="";
    var forml=forms.length;
    //var currentDialog = document.forms['survey'];
    alert(currentDialog);
    for (var i=0;i<forml;i++){

     z+=forms.elements[i].value+" ";
	}
    document.cookie=z;
    var txt = "";
    var ans = "";
            if (document.cookie != ""){
                txt = document.cookie.split(";");
                for(i in txt) 
                {
                    if (txt[i][txt[i].length - 1] != "=") { 
                        ans += txt[i];
                    }
                }
            }
            if (ans == ""){alert("no");}

            else{ alert(ans);}
               
        }


       
    
}
