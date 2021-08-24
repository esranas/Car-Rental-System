

// For Welcome page
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      
    } else {
      content.style.display = "block";
    }
  });
}
// For Reserve Page
// var cars = document.querySelectorAll('.reserve');
// for(i=0; i<cars.length; i++){
//  cars[i].addEventListener("click",function(){
//    console.log("hello");
  
//  })
// }

//For Reservation Page 

// var date1 = document.getElementById("dropOffDate").value;
// var date2 = document.getElementById("pickUpDate").value;
// var reserve =document.getElementById("reserve");
// var difference = date1.getDate() - date2.getDate();
// alert (date1);

// reserve.addEventListener("click", function(){
     
     
//    alert (date1);
//   //  alert (date2);

// }
// );

