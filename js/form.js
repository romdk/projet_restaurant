const heure = document.querySelectorAll('#heure option');
const midi = document.querySelectorAll('#midi option');
const soir = document.querySelectorAll('#soir option');


midi.forEach((option) => {
    if (heure == 1){
        option.classList.add('hidden');
        console.log("test1");
        
    }
    else option.classList.remove('hidden')
});

soir.forEach((option) => {
    if (heure == 0){
        option.classList.add('hidden');
        console.log("test2");
    }
    else option.classList.remove('hidden')
});

console.log(heure);
console.log(midi);
console.log(soir);