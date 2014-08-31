// Register the click on the upload button
$('#uploadBtn').off('click').on('click', function(e)
{
	e.preventDefault();
	$('#file').click();
});

// Once a file is selected, submit the form
$('#file').change(function()
{
	// Check file size is <= 2GB
	var fileSize = this.files[0].size;
	var maxSize = 2000000000; // 2GB
	
	if(fileSize <= maxSize)
	{
		// Submit form
		$('form').submit();
	}
	else
	{
		// Make this more graceful
		alert('Please choose another file under 2GB');
	}
});

// Get the total every so often to update the home page counter
window.setInterval(function(){
	$.post("files/getTotalBurned", function(data)
	{
		$('#total span').html(data);
	});
}, 1000);