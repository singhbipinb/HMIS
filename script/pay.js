
	document.getElementById("defaultOpen").click();
	
function openTab(evt, PayMethod) {
	

	
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(PayMethod).style.display = "block";
  evt.currentTarget.className += " active";
}
	
	function palpay(){
		
		window.open("https://www.paypal.com");
		
	}
	

	
	
	
	$(":input").inputmask();

$("#phone").inputmask({"mask": "(999) 999-9999"});
