/*
    JSON.parse => convert text data to js object
    JSON.stringify => convert js object to JSON
 */

const myJsonObjectFormServer = '{"Username": "Ahmad", "Age":23}';
console.log(typeof myJsonObjectFormServer);
console.log(myJsonObjectFormServer);

const myJsObject = JSON.parse(myJsonObjectFormServer);
console.log(typeof myJsObject);
console.log(myJsObject);

myJsObject["Username"] = "sami";
myJsObject["Age"] = 50;

const myJsonObjectToServer = JSON.stringify(myJsObject);
console.log(typeof myJsonObjectToServer);
console.log(myJsonObjectToServer);