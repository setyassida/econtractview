function windowWithoutToolbar(urlStr, width, height) {
	var newwindow = window
			.open(
					urlStr,
					'window0',
					'location=no,status=yes,scrollbars=yes,menubar=no,toolbar=no,directories=no,resizable=no,width='
							+ width + ',height=' + height);

	newwindow.opener = self;
	if (newwindow.height != height)
		newwindow.height = height;

	if (newwindow.width != width)
		newwindow.width = width;

	if (window.focus) {
		newwindow.focus();
	}

}

function windowLookup(urlStr, width, height) {
	var newwindow = window
			.open(
					urlStr,
					'window99',
					'location=no,status=yes,scrollbars=yes,menubar=no,toolbar=no,directories=no,resizable=no,width='
							+ width + ',height=' + height);

	newwindow.opener = self;
	if (newwindow.height != height)
		newwindow.height = height;

	if (newwindow.width != width)
		newwindow.width = width;

	if (window.focus) {
		newwindow.focus();
	}

}

var ptbPleaseWait;
ptbPleaseWait = ptbPleaseWait
		|| (function() {
			
			//var pleaseWaitDiv = $('<div class="modal fade" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h1>Please Wait...</h1></div></div></div></div>');

			return {
				show : function() {
					//pleaseWaitDiv.modal();
				},
				hide : function() {
					//pleaseWaitDiv.modal('hide');
				},

			};
		})();