//Initialization of Height and mass.
const Mark = [60, 0.1524];
const John = [70, 0.1724];

//Function defination.
function calculateBMI(mass, height) {
  return mass / (height * height);
}

//Calculating the BMI of each people.
const bmiOfMark = calculateBMI(Mark[0], Mark[1]);
const bmiOfJhon = calculateBMI(John[0], John[1]);

//Comparing two persons BMI and storing a result.
const result = bmiOfMark > bmiOfJhon;

//Printing a message based on a result variable.
if (result) {
  console.log(`Is Marks BMI higher than Jhon's? true`);
}
