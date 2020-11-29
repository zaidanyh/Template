$('.custom-file-input').on('change', function() {
	let fileName = $(this).val().split('\\').pop();
	$(this).next('.custom-file-label').addClass("selected").html(fileName);
});

$('#menuCoffee').on('change', function() {
	if ($(this).val() != null) {
		$('#amountOrder').removeAttr('readOnly');
	}
})
