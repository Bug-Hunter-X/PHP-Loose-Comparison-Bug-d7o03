function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false; 
}

function bar(a,b){
  if(a === b){
    return true;
  }else{
    return false;
  }
}

console.log(foo(1, '1')); //false
console.log(bar(1, '1')); //false