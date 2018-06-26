// Get the modal
var modal2 = document.getElementById('myModal_parts');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn_parts");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close_parts")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event2) {
    if (event2.target == modal2) {
        modal2.style.display = "none";
    }
}

function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput_parts");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable_parts");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}