<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Shoutbox</title>
<link href="big_css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
td, a, a:link, a:active, input, select, textarea
{
    font-size: 12px;
    font-family: Trebuchet MS;
    color: #6d6d6d;
    text-decoration: none;
}
</style>
<script>
function GetXmlHttpObject()
{ 
    var objXMLHttp = null 
    if (window.XMLHttpRequest)
    { 
        objXMLHttp = new XMLHttpRequest() 
        }
            else if (window.ActiveXObject)
        { 
        objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP")
    } 
    return objXMLHttp 
} 

function grab() {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object

var url = "getshouts.php"
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("shoutbox").innerHTML = "Loading Shoutouts..."
document.getElementById("shoutbox").innerHTML = xmlHttp.responseText;
setInterval(grab(), 1000);
}
};
xmlHttp.send(null);
// End function
}

function sendshout() {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object


// Make sure they aint spammingz!!

if(document.request.message.value == "") {
        alert("Please enter a message!")
        return
}

if(document.request.name.value == "") {
        alert("Please enter a name!")
        return
}

var url = "sendshout.php?message="+document.request.message.value+"&name="+document.request.name.value
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
document.request.message.value = "";
document.request.name.value = "";
}
};
xmlHttp.send(null);
// End function
}

/*/ DELETE /*/
function delshout(id) {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object


// Make sure they aint spammingz!!

if(id == "") {
        alert("Error!")
        return
}

var url = "delshout.php?id="+id
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
}
};
xmlHttp.send(null);
// End function
}

setInterval(grab(), 1000);
</script>
</head>
<body onLoad="grab();">
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Staff Shoutbox</b></font></td>
</tr></table><br/><br/><font face="Verdana" style="font-size: 10px;">
<img src="../../images/sunscreen.gif" align="left"><b>Welcome to the Staff Shoutbox!</b><br/><i>Keep it clean, or not...</i><br/><br/>Here is the KeepAnOpenMind shoutbox, we hope you enjoy it; remember as staff, you are not seen here by anyone else; so although we like to be professional most of the time... Feel free to hang loose here and talk about everything you want!</font>
<br/><br/><center>
        <div id="content" style="background-image: url('../../images/shoutbox/chatbg.png');background-repeat: no-repeat;">
        <br/><br/><br/>
        <div id="shoutbox" style="margin-top: 10px;');" >Loading shouts...</div>

        <br /><br />
        
        <div id="form" style="text-align: center">
    
        <form method="post" name="request" onSubmit="sendshout();return false;">

        <strong>Name:<br />
        </strong>
        <label>
        <input name="name" type="text" id="name" size="60" maxlength="12" >
        </label>
        <br />
        <br />
        <strong>Message:<br />
        </strong>
        <label>
        <input name="message" type="text" id="message" size="60" maxlength="80" >
        </label>
        <br />
        <br />
        <input type="submit" name="Submit" value="Shout" />
        </form>
        </div>
        <br/>
</div> 
</center>
</body>
</html>