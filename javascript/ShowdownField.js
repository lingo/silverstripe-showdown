Behaviour.register({
	'#Form_EditForm' : {
		initialize : function() {
			this.observeMethod('PageLoaded', this.adminPageHandler);
			this.adminPageHandler();
		},
		adminPageHandler : function() {
			// Place your custom code here.
			(function($){
				 // build the converter
				 var converter = new Showdown.converter();

				 console.log($('.showdown textarea'));
				 var previewFunction = function(e, elt) {
					 var prev = $(elt).siblings('div.preview');
					 console.log(e, prev, converter);
					 var text = elt.value;
					 text = converter.makeHtml(text);
					 console.log(prev, text);
					 prev.html(text);
				 }
				 $('.showdown textarea').keyup(function(e) { return previewFunction(e, this); });
			 })(jQuery);

		}
	}
});
 

