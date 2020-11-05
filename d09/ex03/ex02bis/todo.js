var ft_list;
var cookie = [];

function newList() {
	var new_todo = prompt("To-Do : ", '');
	if (new_todo !=='' && new_todo !== null) {
		addList(new_todo);
	}
}

function addList(new_todo) {
	ft_list.prepend($("<div>" + new_todo + "</div>").click(deleteList));
}

function deleteList() {
	if (confirm("Are you sure about deleting this?")) {
		this.remove();
	}
}

$(document).ready(function() {
	$("#new").click(newList);
	$("#ft_list div").click(deleteList);
	ft_list = $("#ft_list");
	var temp = document.cookie;
	if (temp) {
		cookie = JSON.parse(temp);
		cookie.forEach(function(a) {
			addList(a);
		});
	}
});

$(window).on("beforeunload", function() {
	var new_todo = ft_list.children();
	var newCookie = [];
	for (var i = 0; i < new_todo.length; i++) {
		newCookie.unshift(new_todo[i].innerHTML);
	}
	document.cookie = JSON.stringify(newCookie);
});