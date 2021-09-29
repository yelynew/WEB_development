window.onload = function ()
{
    // determine whether there is a cookie
    var allcookies = document.cookie;
    allcookies.replace(/%20/g, " ");
    allcookies.replace(/%28/g, "(");
    allcookies.replace(/%29/g, ")");
    //alert("All Cookies : " + allcookies);

    // Get all the cookies pairs in an array
    cookiearray = allcookies.split(';');
    var result = "";
    // Now take key value pair out of this array
    for (var i = 0; i < cookiearray.length; i++) {
        cookiearray[i]=cookiearray[i].replace(/%20/g, " ");
        cookiearray[i]=cookiearray[i].replace(/%28/g, "(");
        cookiearray[i]=cookiearray[i].replace(/%29/g, ")");
        cookiearray[i]=cookiearray[i].replace(/%27/g, "'");
        name = cookiearray[i].split('=')[0];
        value = cookiearray[i].split('=')[1];
        result += (name + " is : " + value) + "<br>";
    }

    document.writeln(result);
}
