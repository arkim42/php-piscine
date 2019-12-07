var ft_list;
var cookie = [];

function newList() {
	var new_todo = prompt("To-Do : ", '');
	if (new_todo !=='' && new_todo !== null) {
		addList(new_todo);
	}
}

function addList(new_todo) {
	var newDiv = document.createElement("div");
	newDiv.innerHTML = new_todo;
	newDiv.addEventListener("click", deleteList);
	ft_list.insertBefore(newDiv, ft_list.firstChild);
}

function deleteList() {
	if (confirm("Are you sure about deleting this?")) {
		this.parentElement.removeChild(this);
	}
}

window.onload = function() {
	document.querySelector("#new").addEventListener("click", newList);
	ft_list = document.querySelector("#ft_list");
	var temp = document.cookie;
	if (temp) {
		cookie = JSON.parse(temp);
		cookie.forEach(function(a) {
			addList(a);
		});
	}
};

window.onunload = function() {
	var new_todo = ft_list.children;
	var newCookie = [];
	for (var i = 0; i < new_todo.length; i++) {
		newCookie.unshift(new_todo[i].innerHTML);
	}
	document.cookie = JSON.stringify(newCookie);
};