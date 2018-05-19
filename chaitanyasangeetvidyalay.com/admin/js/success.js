
     
    //var ALERT_TITLE = "Error!";
    var ALERT_BUTTON_TEXT1 = "Ok";
     
    if(document.getElementById) {
    window.alert = function(txt,errno,ALERT_TITLE) {
    successAlert(txt,errno,ALERT_TITLE);
    }
    }
     
    function successAlert(txt,errno,ALERT_TITLE) {
    d = document;
     
    if(d.getElementById("modalContainer1")) return;
     
    mObj1 = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj1.id = "modalContainer1";
    mObj1.style.height = d.documentElement.scrollHeight + "px";
     
    alertObj1 = mObj1.appendChild(d.createElement("div"));
    alertObj1.id = "alertBox1";
    if(d.all && !window.opera) alertObj1.style.top = document.documentElement.scrollTop + "px";
    alertObj1.style.left = (d.documentElement.scrollWidth - alertObj1.offsetWidth)/2 + "px";
    alertObj1.style.visiblity="visible";
     
    h1 = alertObj1.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));
     
    msg = alertObj1.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = "<textarea rows=4 cols=35 readonly style='overflow: auto;border: none;'>"+errno+txt+"</textarea>";
//    msg.innerHTML = txt;
     
    btn1 = alertObj1.appendChild(d.createElement("a"));
    btn1.id = "closebtn";
    btn1.appendChild(d.createTextNode(ALERT_BUTTON_TEXT1));
    btn1.href = "#";
    btn1.focus();
    btn1.onclick = function() { removeCustomAlert1();return false; }
     
    alertObj1.style.display = "block";
     
    }
     
    function removeCustomAlert1() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer1"));
    }
