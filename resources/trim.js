(function () {
	'use strict';

	function trimElements() {
		document.querySelectorAll('[data-trim="true"]').forEach(function (el) {
			if (el.childNodes.length === 1 && el.firstChild.nodeType === Node.TEXT_NODE) {
				el.textContent = el.textContent.trim();
			} else {
				el.childNodes.forEach(function (node) {
					if (node.nodeType === Node.TEXT_NODE) {
						node.nodeValue = node.nodeValue.trim();
					}
				});
			}
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', trimElements);
	} else {
		trimElements();
	}
})();
