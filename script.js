$(document).ready(function(){
	$('.element-card').on('click', function(){	
		if ( $(this).hasClass('open') ) {
			$(this).removeClass('open');
		} else {
			$('.element-card').removeClass('open');
			$(this).addClass('open');
		}	
	});
});

document.onkeydown = function (e) {
 
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
 
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
    
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});


function searchCourses() {
  let input1, input2, filter1, filter2, cards, cardTitle, i;
  input1 = document.getElementById("searchInput1");
  input2 = document.getElementById("searchInput2");
  filter1 = input1.value.toUpperCase();
  filter2 = input2.value.toUpperCase();
  cards = document.getElementsByClassName("card");
  for (i = 0; i < cards.length; i++) {
    cardTitle = cards[i].getElementsByTagName("h2")[0];
    if (cardTitle.innerText.toUpperCase().indexOf(filter1) > -1 && cardTitle.innerText.toUpperCase().indexOf(filter2) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
