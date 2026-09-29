let nombres = [12, 5, 27, 9, 18];

for (let i = 0; i < nombres.length; i++) {
    console.log(nombres[i]);
}
let max = nombres[0];

for (let i = 0; i < nombres.length; i++) {
    if (max < nombres[i]) {
        max = nombres[i];
    }
}
console.log("la valeur max est " + max);