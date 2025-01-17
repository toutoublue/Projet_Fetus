LGS_COOKIE = "LANG_SWITCHER_PREFERED_LANG";
LGS_COOKIE_EXPIRE = 100000;
if (!Array.indexOf) {
	Array.prototype.indexOf = function(obj) {
		for (var i = 0; i < this.length; i++) {
			if (this[i] == obj) {
				return i
			}
		}
		return -1
	}
}
function replace_rec(node, search, replace) {
	if (node.nodeValue != null) {
		try {
			node.nodeValue = node.nodeValue.replace(search, replace)
		} catch(e) {
		}
	}
	var nodes = node.childNodes;
	if (nodes)
		for (var i = 0; i < nodes.length; i++) {
			replace_rec(nodes[i], search, replace)
		}
	if (node.nodeType == 1) {
		var nodes = node.attributes;
		if (nodes)
			for (var i = 0; i < nodes.length; i++) {
				replace_rec(nodes[i], search, replace)
			}
	}
}
jQuery.fn.replace = function(search, replace) {
	return $(this).each(function() {
		replace_rec(this, search, replace)
	})
};
gLangButtons = new Array;
gLangButtonId = 0;
function install_switch(placeholder, targets, template) {
	var nodes = $("[lang]", targets);
	var list = $.map(nodes, function(node) {
		return $(node).attr('lang')
	});
	uniques = new Object;
	for (var i = 0; i < list.length; i++) {
		uniques[list[i]] = list[i]
	}
	list = new Array;
	for (var val in uniques) {
		list.push(val)
	}
	if (list.length <= 1)
		return;
	var buttons = new Array;
	$.map(list, function(lang) {
		var button = $(template).clone().replace('$lang', lang);
		button.attr("id", "lang-" + gLangButtonId + "-" + lang);
		$(button).click(function() {
			var ids = $(this).attr('id').split('-');
			var lang_id = ids[1];
			var lang = ids[2];
			switch_to(lang_id, lang);
			if ($.cookie) {
				$.cookie(LGS_COOKIE, lang, {
					expires : LGS_COOKIE_EXPIRE
				})
			}
			return false
		});
		buttons.push(button)
	});
	$(buttons).each(function() {
		$(placeholder).prepend(this)
	});
	gLangButtons[gLangButtonId] = {
		buttons : buttons,
		targets : targets
	};
	var lang;
	if (($.cookie) && ( lang = $.cookie(LGS_COOKIE)) && (list.indexOf(lang) != -1)) {
		switch_to(gLangButtonId, lang)
	} else {
		switch_to(gLangButtonId, list[0])
	}
	gLangButtonId++
}

function switch_to(id, lang) {
	var targets = gLangButtons[id].targets;
	var buttons = gLangButtons[id].buttons;
	$("[lang]", targets).each(function() {
		if (lang == $(this).attr("lang")) {
			$(this).show()
		} else {
			$(this).hide()
		}
	});
	$(buttons).each(function() {
		var butLang = $(this).attr("id").split("-")[2];
		if (lang == butLang) {
			$(this).removeClass("off").addClass("on")
		} else {
			$(this).removeClass("on").addClass("off")
		}
	})
}