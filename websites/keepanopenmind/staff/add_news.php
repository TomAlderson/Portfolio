<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add News</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.username
{
 margin:0;
 height:20px;
 width:146px;
 background:url('../images/contact_bg.png') no-repeat bottom;
}
.usernamebox
{
 background:none;
 border: 0;
 width:134px;
 height:17px;
 margin:0;
 padding: 1px 7px 0px 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
.message_box
{
 margin:0;
 height:100px;
 width:220px;
 background:url('../images/message_bg.png') no-repeat bottom;
}
.message
{
 background:none;
 border:none;
 width:206px;
 height:86px;
 margin:0;
 padding-top: 6px;
 padding-bottom: 8px;
 padding-right: 7px;
 padding-left: 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
</style>
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top:0px; left:0px;">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="610" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Add a News Article</b></font></td>
</tr></table><br/><br/><br/>
<img src="../images/nimiqnewsie.gif" align="right" />
Adding a news article couldn't be more simple on KeepAnOpenMind, all you have to do is fill in the form below and the news article will be added, you are allowed to use html in the form, so please be careful, unless you know what you're doing, we'd rather you didn't use HTML!<br/><br/>We will give you some tips anyway...<br/><br/>
&bull; &lt;b&gt;<b>this makes text bold</b>&lt;/b&gt;<br/>
&bull; &lt;u&gt;<u>this makes text underlined</u>&lt;/u&gt;<br/>
&bull; &lt;i&gt;<i>this makes text italic</i>&lt;/i&gt;<br/>
&bull; &lt;img src="path/to/image/here" align="right"&gt; - this will add an image to the news article.<br/>
<br/><br/><br/>
<center>
<form method="post" action="../inc/functions/add_article.php" name="password_request">
<b>Author:</b><br/><br/>
<div class="username">
<input type="text" name="author" class="usernamebox"/>
</div><br/>
<b>Category:</b><br/><br/>
<select name="category" style="font-family:Verdana;font-size: 10px;border: 1px solid black;width:146px;">
<option value="KeepAnOpenMind">KeepAnOpenMind</option>
<option value="openHabbo">openHabbo</option>
<option value="vibeArray">vibeArray</option>
<option value="RealLife">RealLife</option>
<option value="Movie">Movie</option>
<option value="Music">Music</option>
</select>
<br/><br/>
<b>Title:</b><br/><br/>
<div class="username">
<input type="text" name="title" class="usernamebox"/>
</div><br/>
<b>Message:</b><br/><br/>
<div class="message_box">
<textarea class="message" name="article" size="80"/></textarea>
</div><br/>
<input type="image" name="go" value="GO" src="../images/submit_contact.png" />
</form>
</center>
</body>
</html>