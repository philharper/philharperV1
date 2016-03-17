function changeContent(ID)
{
	var content = document.getElementById('editContent').innerHTML;
	var request = new Ajax().sendRequest
	(
		'updatecontent.php',
		{
			method: 'GET',
			parameters: 'content=' + content + '&ID=' + ID 
		}
	);
	alert('Content updated');
}
