<!DOCTYPE>
<html>
<?php
session_start();
if(isset($_POST['enter'])){
if($_POST['name'] != ""){
$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
}
else{
echo '<span class="error">Please type in a name</span>';
}
}
?>
<head>
<title>Chat</title>
<style>
body{
font:12px arial;
color: #222;
text-align:center;
padding:35px; }
 
form, p, span {
margin:0;
padding:0; }
 
input { font:12px arial; }

a {
color:#0000FF;
text-decoration:none; }
 
a:hover { text-decoration:underline; }
 
#wrapper, #loginform{
margin:0 auto;
padding-bottom:25px;
background:#EBF4FB;
width:504px;
border:1px solid grey 
}
    
#loginform{ 
    padding-top:18px;
}
    
        #loginform p { margin: 5px; }
    
#chatbox {
text-align:left;
margin:0 auto;
margin-bottom:25px;
padding:10px;
background: yellowgreen;
height:270px;
width:430px;
border:1px solid #ACD8F0;
overflow:auto; 
}
    
#usermsg {
width:395px;
border:1px solid #ACD8F0; }
    
#submit { width: 60px; }
    
.error { color: #ff0000; }
    
#menu { padding:12.5px 25px 12.5px 25px; }
    
.welcome { float:left; }
    
.logout { float:right; }
    
.msgln { margin:0 0 2px 0; }
</style>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
</head>
<body>
    <?php function loginForm(){?>
 <div id="loginform">
<form action="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]")?>" method="post">
<p>Please enter your name to continue:</p>
<label for="name">Name:</label>
<input type="text" name="name" id="name" />
<input type="submit" name="enter" id="enter" value="Enter" />
</form>
</div>
    <?php } ?>
<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper">
        <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><button id="exit" >Exit Chat</button></p>
                <div style="clear:both"></div>
        </div>       
        <div id="chatbox">
     <?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle  = fopen("log.html", "r");
   echo fread($handle,filesize("log.html"));
   fclose($handle);
}
?>
 </div>
          
       <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" size="63" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </form>
</div>
<script type="text/javascript">
setInterval(function(){
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html);	
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
				}				
		  	},
		});
	},1000);</script>

<?php
if(isset($_GET['logout'])){ 
$fp = fopen("log.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}?>

<?php
}
?>
<script type="text/javascript">
$(document).ready(function(){
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){
window.location.assign("http://localhost/connect/friends.php");
}
	});
	$("#submitmsg").click(function(){
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").val("");
		return false;
	});
        
        $("input").keydown(function(event){ 
        if(event.which === 13){
            var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").val("");
		return false;
            }
        });
});
</script>
</body>
</html>