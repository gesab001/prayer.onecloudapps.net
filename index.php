<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>

<h1>Prayer</h1>


<br>
<p>Father which art in heaven, </p>
<textarea id="textareaId" rows="4" cols="50" name="comment" form="usrform">
</textarea>
</p>in Jesus name, Amen.</p>

<form action="action_page.php" id="usrform" method="post">
  <input type="submit" value="Add">
</form>
</body>

<script>
$(document).ready(function(){
	$('#textareaId').keypress(function (e) {
		if (e.ctrlKey && e.keyCode == 13)
		{
			  var comment = $.trim($("#textareaId").val());

				    if(comment != ""){

					// Show alert dialog if value is not blank

					//alert(comment);
					 e.preventDefault();
					savePrayer(comment);

				    }
		   
		   
		}     

	});

});





    

function savePrayer(item){

 var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

    alert(item);
      document.getElementById("textareaId").value = "";
    }
  };
  xhttp.open("POST", "action_page.php?comment="+item, true);
  xhttp.send();   
}
</script>
</html>


