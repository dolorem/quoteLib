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
	$('.editQuote').click(function()
	{
		var id = parseInt($(this).attr('id').replace('eq', ''));
		$.ajax(
		{
			url: '/index.php/getQuote?id=' + id
		}).done(function(data)
		{
			$('#quoteEditModal > div > div').first().html(data);
		});
		$('#quoteEditModal').modal('show');
		return false;
	});
	$('#tagEditModal .closeButton').click(function()
	{
		$('#tagEditModal').modal('hide');
	});
	$(document).on('click', '#quoteEditModal .closeButton', function() 
	{
		$('#quoteEditModal').modal('hide');
	});
});
