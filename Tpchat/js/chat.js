//Récupération bases de données
function recup_msg()
{
	$.post('recup_msg.php',function(data){
		$('.chat .messages').html(data);
		});
}
setInterval(recup_msg,2000);
recup_msg();
//envoie message
function envoi_msg()
{
	$('.chat .entree').keyup(function(e){
		var messages=$('.chat .entree').val();
		messages=$.trim(messages);
		if(messages !=="" && e.keyCode ===13 && e.shiftKey ===false) 
		{	
			$.post('envoi_msg.php',{messages:messages},function(){
			recup_msg();
			$('.chat .entree').val('');
			
			});
			
		}
	});
}
envoi_msg();