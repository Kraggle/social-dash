import $ from '../core/jquery/jquery.js';

// Replaces only the text content of an element ignoring
// all children, tags and properties
$.fn.replace = function(text, replace) {
	$(this).contents().each(function() {
		if (this.nodeType == 3)
			$(this).replaceWith($(this).text().replace(text, replace));
	});
};

// Iterates through elements replacing all text content 
$.fn.replaceAll = function(text, replace) {
	$(this).contents().each(function() {
		if (this.nodeType == 3)
			$(this).replaceWith($(this).text().replace(text, replace));
		else $(this).replaceAll(text, replace);
	});
};

$.fn.selectRange = function(start, end) {
	return this.each(function() {
		if (this.setSelectionRange) {
			this.focus();
			this.setSelectionRange(start, end);
		} else if (this.createTextRange) {
			var range = this.createTextRange();
			range.collapse(true);
			range.moveEnd('character', end);
			range.moveStart('character', start);
			range.select();
		}
	});
};

$.fn.setCursorPosition = function(pos) {
	return this.each(function(i, elem) {
		if (elem.setSelectionRange) {
			elem.setSelectionRange(pos, pos);
		} else if (elem.createTextRange) {
			var range = elem.createTextRange();
			range.collapse(true);
			range.moveEnd('character', pos);
			range.moveStart('character', pos);
			range.select();
		}
	});
}

$.fn.setCursorPosition = function(pos) {
	return this.each(function(i, elem) {
		if (elem.setSelectionRange) {
			elem.setSelectionRange(pos, pos);
		} else if (elem.createTextRange) {
			var range = elem.createTextRange();
			range.collapse(true);
			range.moveEnd('character', pos);
			range.moveStart('character', pos);
			range.select();
		}
	});
}

// Match by regex
$.expr[':'].regex = function(elem, index, match) {
	var matchParams = match[3].split(','),
		validLabels = /^(data|css):/,
		attr = {
			method: matchParams[0].match(validLabels) ?
				matchParams[0].split(':')[0] : 'attr',
			property: matchParams.shift().replace(validLabels, '')
		},
		regexFlags = 'ig',
		regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g, ''), regexFlags);
	return regex.test($(elem)[attr.method](attr.property));
}

$.extend({
	replaceTag: function(currentElem, newTagObj, keepProps) {
		const $currentElem = $(currentElem);
		var $newTag = $(newTagObj).clone();
		if (keepProps) {
			const newTag = $newTag[0];
			newTag.className = currentElem.className;
			$.extend(newTag.classList, currentElem.classList);
			$.extend(newTag.attributes, currentElem.attributes);
		}
		$currentElem.wrapAll($newTag);
		$currentElem.contents().unwrap();
		// return node; (Error spotted by Frank van Luijn)
		return this; // Suggested by ColeLawrence
	}
});

$.fn.extend({
	replaceTag: function(newTagObj, keepProps) {
		// "return" suggested by ColeLawrence
		return this.each(function() {
			$.replaceTag(this, newTagObj, keepProps);
		});
	}
});

$.fn.hasAttr = function(attr) {
	return $(this)[0].hasAttribute(attr);
};

$.fn.disable = function() {
	return this.each(function() {
		if ($(this).is('[data-toggle=switchbutton]'))
			$(this).get(0).switchButton('disable');
		else
			$(this).prop('disabled', true);
		$(this).closest('.input-group').attr('disabled', true);
		$(this).trigger('state.change state.disabled');
	});
};

$.fn.enable = function() {
	return this.each(function() {
		if ($(this).is('[data-toggle=switchbutton]'))
			$(this).get(0).switchButton('enable');
		else
			$(this).prop('disabled', false);
		$(this).closest('.input-group').attr('disabled', false);
		$(this).trigger('state.change state.enabled');
	});
};

$.fn.hasClassOld = $.fn.hasClass;

$.fn.hasClass = function(selectors) {
	selectors = selectors.split(',');
	for (const selector of selectors) {
		if (this.hasClassOld(selector.trim()))
			return true;
	}

	return false;
};
