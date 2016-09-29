
function formatThousands(n, dp) {
  var s = ''+(Math.floor(n)), d = n % 1, i = s.length, r = '';
  while ( (i -= 3) > 0 ) { r = '.' + s.substr(i, 3) + r; }
  return s.substr(0, i + 3) + r + (d ? '.' + Math.round(d * Math.pow(10,dp||2)) : '');
}




function unlikeAJAX(item){
  var formData = new FormData();
  formData.append("likedProductID" , item.id);

  var xhr = new XMLHttpRequest();
  xhr.open("post","unlike.php");
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
  
    document.getElementById(buttonID).innerHTML = "LIKE";
    document.getElementById(buttonID).setAttribute("class", "likebuybutton like");
    document.getElementById(buttonID).setAttribute("onClick", "likeAJAX(this)");


    

    } else {
      console.log('Error: ' + xhr.status); // An error occurred during the request.
    }
  }
};





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
    document.getElementById(buttonID).innerHTML = "LIKED";
    document.getElementById(buttonID).setAttribute("onClick", "unlikeAJAX(this)");

    } else {
      console.log('Error: ' + xhr.status); // An error occurred during the request.
    }
  }
};




