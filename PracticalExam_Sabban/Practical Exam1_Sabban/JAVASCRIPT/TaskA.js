let stringcase = "TheQuickBrownFoxJumpsOverTheLazyDog";
let string = stringcase.split(/(?=[A-Z])/).join(" ");
console.log(string)