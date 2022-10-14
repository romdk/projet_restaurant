
const heureBtn = document.querySelector('#heure');
const midi = document.querySelectorAll('.midi');
const soir = document.querySelectorAll('.soir');
const horaires = document.querySelector('#horaires')


// Modification des horaires possible tous dépend du choix Midi / Soir
// Horaire du Midi par défault

console.log(heureBtn);
heureBtn.addEventListener("change", () => {
    console.log('test');
    
    midi.classList.toggle('hidden');
    soir.classList.toggle('hidden');
});

 

console.log(heureBtn);
console.log(midi);
console.log(soir);