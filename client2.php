<html>
  <head>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  </head>
  <body>

  <h2> Client Information </h2>
  <h3>Output: </h3>
<div id="msg"></div>
<script type="text/javascript">
 
$(document).ready(function(){
var url="api2.php";
$.getJSON(url,function(json){
// loop through the members here
$.each(json,function(i,dat){
$("#msg").append(
'<div class="customercomment">'+
'<h1>'+dat.id+'</h1>'+
'<p>Do you like this website : <em>'+dat.attitude+'</em>'+
'<p>Name : <em>'+dat.name+'</em></p>'+
'<p>Date : <em>'+dat.date+'</em></p>'+
'<p>Email : <em>'+dat.email+'</em></p>'+
'<p>Comment : <em>'+dat.comment+'</em></p>'+
'<hr>'+
'</div>'
);
});
});
});
 
</script>


  </body>
</html>
