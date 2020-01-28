function fun() {
    //alert("b");
    if (typeof XMLHttpRequest != "undefined") {
        xmlHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

    }

    if (xmlHttp == null) {
        alert("Browser does not support XMLHTTP Request")
        return
    }
    //alert("check");
    br = document.getElementById("userid").value
    br1 = document.getElementById("password").value
        //alert(br);
    var url = "parking.php?userid=" + br + "&password=" + br1;
    //alert(url);
    xmlHttp.onreadystatechange = xyz3;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function xyz3()

{


    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        a = document.getElementById("page1");
        a.innerHTML = xmlHttp.responseText;

    }
}

function fun2() {
    //alert("b");
    if (typeof XMLHttpRequest != "undefined") {
        xmlHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

    }

    if (xmlHttp == null) {
        alert("Browser does not support XMLHTTP Request")
        return
    }
    //alert("check");
    br = document.getElementById("userid").value
    br1 = document.getElementById("password").value
        //alert(br);
    var url = "parking2.php?userid=" + br + "&password=" + br1;
    //alert(url);
    xmlHttp.onreadystatechange = xyz3;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function xyz3()

{


    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        a = document.getElementById("page1");
        a.innerHTML = xmlHttp.responseText;

    }
}

function func() {
    //alert("b");
    if (typeof XMLHttpRequest != "undefined") {
        xmlHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

    }

    if (xmlHttp == null) {
        alert("Browser does not support XMLHTTP Request")
        return
    }
    //alert("check");
    br = document.getElementById("userid").value
    br1 = document.getElementById("password").value
        //alert(br);
    var url = "status.php?userid=" + br + "&password=" + br1;
    //alert(url);
    xmlHttp.onreadystatechange = xyz3;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function xyz3()

{


    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        a = document.getElementById("page1");
        a.innerHTML = xmlHttp.responseText;

    }
}