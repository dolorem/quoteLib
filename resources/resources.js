$(document).ready(function()
{
	$('.editTag').click(function()
	{
		var id = parseInt($(this).attr('id').replace('et', ''));
		$.ajax(
		{	
			url: '/index.php/getTag?id=' + id
		}).done(function(data)
		{
			$("#tagEditModal input[name='title']").first().val(data.title);
			$("#tagEditModal input[name='id']").first().val(data.tagId);
		});
		$('#tagEditModal').modal('show');
		return false;
	});

	$('#tagEditModal .closeButton').click(function()
	{
		$('#tagEditModal').modal('hide');
	});
});
