var data = [
  {
    Name: "Dishant",
    Age: 22,
    Email: "dishant@gmail.com",
    TelephoneNumber: 9797979797,
  },
  {
    Name: "Keval",
    Age: 23,
    Email: "keval@gmail.com",
    TelephoneNumber: 9696969696,
  },
  {
    Name: "Dharmik",
    Age: 21,
    Email: "dharmik@gmail.com",
    TelephoneNumber: 9595959595,
  },
  {
    Name: "Ayush",
    Age: 20,
    Email: "ayush@gmail.com",
    TelephoneNumber: 9494949494,
  },
  {
    Name: "Bhautik",
    Age: 25,
    Email: "bhautik@gmail.com",
    TelephoneNumber: 9393939393,
  },
];

// We use sort function to sort the array of objects by age.
data = data.sort(function (a, b) {
  return a.Age - b.Age;
});
