//here is the object
const studentInfo = {
  name: "Dishant Navadiya",
  dateOfBirth: "08-06-1999",
  age: 22,
  address: "A-3 chitrakut society",
  city: "Surat",
  state: "Gujarat",
  hobbies: ["Cricket", "travelling"],
  education: {
    ssc: "GSEB",
    hsc: "GSHEB",
    bachelor: "BCA",
    master: "MCA",
  },
};

// 1. we can loop directly to the objects.
for (const i in studentInfo) {
  console.log(i);
}

//2. way is to use object.key() method. is returns a array of keys in sting.
console.log(Object.keys(studentInfo));
