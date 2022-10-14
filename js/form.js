
// const heureBtn = document.querySelectorAll('.midi1');
// const midi = document.querySelectorAll('.midi');
// const soir = document.querySelectorAll('.soir');
// const horaires = document.querySelector('#horaires')


// console.log(midi);
// console.log(soir);
// console.log(heureBtn );


// Modification des horaires possible tous dépend du choix Midi / Soir
// Horaire du Midi par défault

// function myFunction1(){
//     heureBtn.addEventListener("click", function(){
//         midi.document.add('hidden1');
//         soir.document.remove('hidden1');
//     })
// }
// heureBtn.forEach(myFunction1);



// heureBtn.addEventListener("change", () => {
//     console.log('test');  
//     midi.classList.toggle('hidden');
//     soir.classList.toggle('hidden');
// });
// heureBtn.forEach((midi1) => (){
//     midi.document.add('hidden1');
//     soir.document.remove('hidden1');
// }
 
//  cards= document.querySelectorAll('.evenvement');

// function myFunction() {
//     card.addEventListener("click", function () {
//       tableauDetail = card.querySelector('.exEvenement')
//       tableauImg = card.querySelector('.concerteImg')
//       tableauDetail.classList.toggle("animEvenement");
//       tableauImg.classList.toggle("animConcerteImg");
//     })


const midi = document.getElementById('midi');
const soir = document.getElementById('soir');
const midiHeures = document.getElementById('H-midi') ; 
const soirHeures = document.getElementById('H-soir') ; 

function Affichage(){
    midiHeures.classList.add('hidden1');
    soirHeures.classList.remove('hidden1');
}
function Affichagesoir(){
    midiHeures.classList.remove('hidden1');
    soirHeures.classList.add('hidden1');
}
function toggleCreneaux(){
  
    console.log(document.getElementById("heure").selectedIndex);
    if(this.selectedIndex==0){
       
        Affichagesoir();

    }else if(this.selectedIndex==1){
        
        Affichage();
    }
}










