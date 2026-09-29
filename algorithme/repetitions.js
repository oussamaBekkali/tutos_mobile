let arr = [2, 3, 7, 0, 5, 3, 2, 1, 3, 0];
let dup = [];

for (let a = 0; a < arr.length; a++) {
  let count = 0;

  for (let i = 0; i < arr.length; i++) {
    if (arr[a] === arr[i]) {
      count++;
    }
  }

  if (count > 1) {
    let alreadyExist = false;

    for (let j = 0; j < dup.length; j++) {
      if (dup[j] === arr[a]) {
        alreadyExist = true;
      }
    }

    if (alreadyExist == false) {
      dup[dup.length] = arr[a];
    }
  }
}

console.log(dup);
