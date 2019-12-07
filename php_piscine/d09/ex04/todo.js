$(document).ready(function(){
	$("#new").click(newList);
	$.ajax({
		url: 'select.php',
		success: function (response) {
			var arr = JSON.parse(response);
			if (Array.isArray(arr) && arr[0] != '') {
				for (i = 0; i < arr.length; i++) {
					if (arr[i] != '') {
						tmp = arr[i].split(';');
						addList(tmp[1]);
					}
				}
			}
		}
		});
})

function newList() {
	var new_todo = prompt("To-Do : ", '');
	if (new_todo !== '' && new_todo !== null) {
		addList(new_todo);
		$.ajax({
			type: "GET",
			url: "insert.php?" + new_todo + "=" + new_todo
		});
	}
}

function addList(new_todo) {
  if (new_todo != '') {
	  $('#ft_list').prepend($('<div>' + new_todo + '</div>').click(deleteList));
  }
}

function deleteList() {
	if (confirm("Are you sure about deleting this?")) {
		this.remove();
		deleteCSV(this.innerHTML);
	}
}

function deleteCSV(new_todo) {
	$.ajax({
		type: "GET",
		url: "delete.php?" + new_todo + "=" + new_todo,
		success: function () {}
	});
}