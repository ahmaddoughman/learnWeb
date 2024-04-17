// 1st way
// import sayName ,{a, arr, saySomthing as s} from "./script1.js";

// console.log(s());
// console.log(a);
// console.log(arr);
// console.log(sayName());


//2nd way
import * as all from "./script1.js";

console.log(all.a);
console.log(all.saySomthing());

