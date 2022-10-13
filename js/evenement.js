// let tableauImages =document.getElementsByClassName('concerteImg')  ;
// let tableauDetail = document.getElementsByClassName('exEvenement') ; 
// const tableauImages =document.querySelectorAll('.concerteImg')  ; 
// const tableauDetail = document.querySelectorAll('.exEvenement') ; 




// const affichageText = function number () { 
//   console.log(this.id);
//   for(let i = 0 ; i<tableauDetail.length ; i++){
//        tableauDetail[i].style.visibility ="visible" ;
//        tableauDetail[i].style.transform= "translateY(0px)" ;
//        if(tableauImages.id='1'){
//         tableauDetail[i].style.visibility ="visible" ;
//         tableauDetail[i].style.transform= "translateX(0px)" ;
//         return  tableauImages.id='1' ;
//        }
      
//       }
//       };


// for(let i=0 ; i<tableauImages.length ; i++){
//   tableauImages[i].addEventListener("click" , affichageText) ;  
// }



// tableauImages.forEach(translate);

// function translate (tableauDetail) {
//   tableauImages.addEventListener("click",function (){
//   tableauDetail.classList("animEvenement");

// })};




cards = document.querySelectorAll('.evenvement');

console.log(cards);

function myFunction(card) {
  card.addEventListener("click", function () {
    tableauDetail = card.querySelector('.exEvenement')
    tableauImg = card.querySelector('.concerteImg')
    tableauDetail.classList.toggle("animEvenement");
    tableauImg.classList.toggle("animConcerteImg");
  })

  // card.addEventListener("scroll", function (){
  //   if (scrollTop > 1) {
  //     tableauDetail.classList.toggle("animEvenement");
  //   tableauImg.classList.toggle("animConcerteImg");

  // }})
}
cards.forEach(myFunction);



