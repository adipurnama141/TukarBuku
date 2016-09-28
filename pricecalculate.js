
function formatThousands(n, dp) {
  var s = ''+(Math.floor(n)), d = n % 1, i = s.length, r = '';
  while ( (i -= 3) > 0 ) { r = '.' + s.substr(i, 3) + r; }
  return s.substr(0, i + 3) + r + (d ? '.' + Math.round(d * Math.pow(10,dp||2)) : '');
}


function calculatePrice(){
	var price = document.getElementById("hargabuku").innerHTML;
	var qty = document.getElementById("qty").value;
	var totalPrice = price *qty;

	document.getElementById("hargatotal").innerHTML = formatThousands(totalPrice);

}




window.onload = function() {
	var price = document.getElementById("hargabuku").innerHTML;
	document.getElementById("hargabuku_formatted").innerHTML = formatThousands(price);
	document.getElementById("hargatotal").innerHTML = formatThousands(price);


	var likebutton = document.getElementsByClassName("like");
var likeCount = likebutton.length;
for (var i = 0; i <= likebutton; i += 1) {
    likebutton[i].onclick = function(e) {
        alert(this.id);
    };
}​



}