
'use strict';

function l(t){
    console.log(t);
}
function getFullName(user) {
  const { firstName, lastName, email } = user;
  console.log(email);
  return `${firstName} ${lastName}`;
}
console.log(getFullName({ firstName: 'ram', lastName: 'naresh', email: 'abc@gmail.com'}));

const arr = [10, 20, 30, 40];
const [first, second] = arr;
console.log(arr);
console.log(`first is = ${first}`);

function processInput() {
  // then a miracle occurs
  return { left:4, right:5, bottom:6 };
}

// the caller selects only the data they need
const { left, right } = processInput();
console.log(`right is = ${right}`);

function sayHi(name) {
  return `How are you, ${name}?`;
}

l(sayHi('ram'));

const short = function longUniqueMoreDescriptiveLexicalFoo() {
  l('hi');
};

short();

function concatenateAll(...args) {
  return args.join(' ');
}

l(concatenateAll('ram','naresh','kushwaha'));

function handleThings(name, opts = {}) {
  if( Object.keys(opts).length === 0 && opts.constructor === Object ){
    l('second param is empty');
  }else{
    l(`second param is= ${opts}`);
  }
}
handleThings('ram');
handleThings('ram','shyam');

function f4(b,a = 1) {
  l(`${b} ${a}`);
}
f4('ram');
f4('ram',5);

[1, 2, 3].map((x) => {
  const y = x + 1;
  return x * y;
});

class Queue {
  constructor(contents = []) {
    this.queue = [...contents];
  }
  pop() {
    const value = this.queue[0];
    this.queue.splice(0, 1);
     l(`removing ${value}`);
     return value;
  }
}

class PeekableQueue extends Queue {
  peek() {
    return this.queue[0];
  }
}

const q = new Queue([1,2,3]);
q.pop();
q.pop();
q.pop();

class Jedi {
  jump() {
    this.jumping = true;
    l('jumping..');
    return this;
  }

  setHeight(height) {
    this.height = height;
    l(`height is now ${height}`);
    return this;
  }
}

const luke = new Jedi();

luke.jump()
  .setHeight(20);

class Jedi2 {
  constructor() {}

  getName() {
    return this.name;
  }
}
class Rey extends Jedi2 {
  constructor(...args) {
    super(...args);
    this.name = 'Rey';
  }
}
const n = new Rey();
l(n.getName());
