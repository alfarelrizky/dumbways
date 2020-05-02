// array
let angka = [4,9,10,13,21];
// jum default
let jumlah = [0,0,0,0,0];
let max = 0;
let min = 0;

// proses 
for (let index = 0; index < angka.length; index++) {
    jumlah[index] = 0;
    for (let sum = 0; sum < angka.length; sum++) {
        if (angka[sum] != angka[index]) {
           jumlah[index] += angka[sum]; 
        }
    }
    console.log('angka ' + angka[index] + ' = ' + jumlah[index]);
}
// tutup proses

// min & max
for (let index = 0; index < angka.length; index++) {
    // min
    if(jumlah[index] < min) {
        min =  jumlah[index];
    } else if(min === 0){
        min = jumlah[index];
    }
    //max
    if(jumlah[index] > max) {
        max = jumlah[index];
    } else if(max === 0) {
        max = jumlah[index];
    } 
}
console.log('nilai Minimum = '+min);
console.log('nilai Maximum = '+max);