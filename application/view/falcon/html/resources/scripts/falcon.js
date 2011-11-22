/*
    Example Menu

    <ul id="menu">
        <li>
            <h6><a href="#item1"><span>Item 1</span><img src="images/plus.gif" alt="Expand" title="Expand" /></h6>
            <ul id="menu_item1">
                <li><a href="">Sub Item 1</a></li>
                <li><a href="">Sub Item 2</a></li>
                <li><a href="">Sub Item 3</a></li>
            </ul>
		</li>
    </ul>

*/

/* constants */
var selected_count = 0;
var box_selected_count = 0;

/* accordion menu */
function menu() {
	$("#menu").accordion({
		active: 0,
		collapsible: true,
		autoHeight: false
	});

	$("#menu li a").click(function () {
		$("#menu li a span[class|=icon]").each(function () {
			$(this).attr("class", "icon-plus");
		});

		var element = $(this);
		var menu = $("#menu_" + menu_get_id(element));
		var selected = element.children("span[class|=icon]");

		if (menu.is(":visible")) {
			selected.attr("class", "icon-plus");
		}
		else {
			selected.attr("class", "icon-minus");
		}
	});

	$("#menu li a").each(function () {
		var element = $(this);
		var menu = $("#menu_" + menu_get_id(element));
		var selected = element.children("span[class|=icon]");

		if (menu.is(":visible")) {
			selected.attr("class", "icon-minus");
		}
		else {
			selected.attr("class", "icon-plus");
		}
	});
}

/* gets the id from the href value */
function menu_get_id(element) {
	var id = element.attr("href");
	var position = id.indexOf('#');

	return id.substring(position + 1);
}

/* checks all the checkboxes for with the class check-item */
$(".check-group").live("click", function (event) {
	var checked = $(this).attr("checked");
	var actual = 0;

	$("input[class=check-item]").each(function () {
		this.checked = checked;

		if (checked && actual >= selected_count) {
			set_tr_class($(this).parent().parent(), true);
			selected_count = selected_count + 1;
		} else {
			set_tr_class($(this).parent().parent(), false);
			if (selected_count > 0) {
				selected_count = selected_count - 1;
			}
		}

		actual = actual + 1;
	});

	set_submit_count($("input[class=check-submit]"), selected_count);
});

/* sets the class of the tr when a checkbox with the class check-item is chekced */
$(".check-item").live("click", function (event) {
	if ($(this).attr("checked")) {
		set_tr_class($(this).parent().parent(), true);
		selected_count = selected_count + 1;
	} else {
		set_tr_class($(this).parent().parent(), false);
		selected_count = selected_count - 1;
	}

	set_submit_count($("input[class=check-submit]"), selected_count);
});

/* checks all the checkboxes for with the class check-item */
$(".box-check-group").live("click", function (event) {
	var checked = $(this).attr("checked");
	var actual = 0;

	$("input[class=box-check-item]").each(function () {
		this.checked = checked;

		if (checked && actual >= box_selected_count) {
			set_tr_class($(this).parent().parent(), true);
			box_selected_count = box_selected_count + 1;
		} else {
			set_tr_class($(this).parent().parent(), false);
			if (box_selected_count > 0) {
				box_selected_count = box_selected_count - 1;
			}
		}

		actual = actual + 1;
	});

	set_submit_count($("input[class=box-check-submit]"), box_selected_count);
});

/* sets the class of the tr when a checkbox with the class check-item is chekced */
$(".box-check-item").live("click", function (event) {
	if ($(this).attr("checked")) {
		set_tr_class($(this).parent().parent(), true);
		box_selected_count = box_selected_count + 1;
	} else {
		set_tr_class($(this).parent().parent(), false);
		box_selected_count = box_selected_count - 1;
	}

	set_submit_count($("input[class=box-check-submit]"), box_selected_count);
});

/* sets the count of the total checked checkboxes */
function set_submit_count(element, count) {
	element.attr("value", "Submit (" + count + ")");
}

/* sets the class of the tr to selected containing the checked checkbox */
function set_tr_class(element, selected) {
	if (selected) {
		element.attr("class", "selected " + element.attr("class"))
	} else {
		var css = element.attr("class");
		var position = css.indexOf('selected');

		element.attr("class", css.substring(position + 9));
	}
}

(function ($) {
	$.fn.bar = function () {
		this.each(function () {
			var total = 0;

			$(this).find("tbody tr td[class=value]").each(function () {
				total = Math.round($(this).text()) + total;
			});

			$(this).find("tbody tr td[class=value]").each(function () {
				var element = $(this);
				var value = element.text();
				var final = Math.round(value / total * 100);

				var span_outer = $("<span>");

				span_outer.attr("class", "bar-outer");

				var span_inner = $("<span>");

				span_inner.attr("class", "bar-inner");
				span_inner.attr("style", "width:" + 230 * (final / 100) + "px;");

				element.text(value + " (" + final + "%)");
				element.prepend(span_outer.append(span_inner));
			});
		});

		return this;
	};
})(jQuery);

(function ($) {
	$.fn.file = function (options) {
		var settings = {
			width : 250
		};

		if (options) {
			$.extend(settings, options);
		}

		this.each(function () {
			var self = this;

			var wrapper = $("<a>").attr("class", "ui-input-file");
			
			var filename = $('<input class="file">').addClass($(self).attr("class")).css({
				"display": "inline",
				"width": settings.width + "px"
			 });

			$(self).before(filename);
			$(self).wrap(wrapper);

			$(self).css({
				"position": "relative",
				"height": settings.image_height + "px",
				"width": settings.width + "px",
				"display": "inline",
				"cursor": "pointer",
				"opacity": "0.0"
			});

			if ($.browser.mozilla) {
				if (/Win/.test(navigator.platform)) {
					$(self).css("margin-left", "-142px");
				} else {
					$(self).css("margin-left", "-168px");
				};
			} else {
				$(self).css("margin-left", settings.image_width - settings.width + "px");
			};

			$(self).bind("change", function() {
				filename.val($(self).val());
			});
		});

		return this;
	};
})(jQuery);

/* initialize the menu */
$(document).ready(function () {
	menu();
});