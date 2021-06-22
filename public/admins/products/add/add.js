$(function(){
			$("#productTag").select2({
	tags: true,
	tokenSeparators: [',', ' ']
	})
			$("#parent").select2({
	maximumSelectionLength: 3
	});
		})
var editor = new FroalaEditor('#example')
