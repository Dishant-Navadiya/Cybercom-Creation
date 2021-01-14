//Defining objects
const Jhon = {
  fullName: "Jhon",
  mass: 60,
  height: 1.6,
  calculateBMI: function () {
    return this.mass / (this.height * this.height);
  },
};

const Mike = {
  fullName: "Mike",
  mass: 70,
  height: 1.5,
  calculateBMI: function () {
    return this.mass / (this.height * this.height);
  },
};

//check condition who has the heighest BMI
if (Jhon.calculateBMI() > Mike.calculateBMI()) {
  //log to console with full name and BMI
  console.log(`${Jhon.fullName} has ${Jhon.calculateBMI()} BMI`);
} else if (Mike.calculateBMI() > Jhon.calculateBMI()) {
  console.log(`${Mike.fullName} has ${Mike.calculateBMI()} BMI`);
} else {
  console.log("Same");
}
