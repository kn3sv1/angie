
//BUFFER - is ARRAY OF UNICODE|BINARY data
const buf2 = Buffer.from("й", 'utf8');

// DECIMAL
// { type: 'Buffer', data: [ 208, 185 ] }

// WE CAN CHECK CHARACTER HERE BELOW:
// https://www.rapidtables.com/convert/number/ascii-to-hex.html
// HEX
// { type: 'Buffer', data: [ D0, B9 ] }

// BINARY
// { type: 'Buffer', data: [ 1101 0000, 1011 1001 ] }

console.log(buf2.toJSON());
console.log(buf2.toString());