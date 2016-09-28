
function likeAJAX(item){
	

	var formData = new FormData();
	formData.append("likedProductID" , item.id);

	var xhr = new XMLHttpRequest();
	xhr.open("post","like.php");
	xhr.send(formData);

	xhr.onreadystatechange = function () {
  var DONE = 4; // readyState 4 means the request is done.
  var OK = 200; // status 200 is a successful return.
  if (xhr.readyState === DONE) {
    if (xhr.status === OK) 
      console.log(xhr.responseText); // 'This is the returned text.'
  	document.getElementById("b" + item.id).innerHTML = xhr.responseText;
  	var buttonID = item.id;
  	console.log(buttonID);
  	document.getElementById(buttonID).className += " liked";

    } else {
      console.log('Error: ' + xhr.status); // An error occurred during the request.
    }
  }
};




