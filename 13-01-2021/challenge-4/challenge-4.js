const insert = document.querySelector("#insert");
const get = document.querySelector("#get");
const fullName = document.querySelector("#fullname");
const mass = document.querySelector("#mass");
const height = document.querySelector("#height");
const output = document.querySelector("#output");

const user = [];

const BMIcalculater = (user) => {
  const BMI = user.inputMass / (user.inputHeight * user.inputHeight);

  return { ...user, BMI };
};

insert.addEventListener("click", () => {
  const intputName = fullName.value;
  const inputMass = parseInt(mass.value);
  const inputHeight = parseFloat(height.value);

  user.push({ intputName, inputMass, inputHeight });
  fullName.value = "";
  mass.value = "";
  height.value = "";
});

get.addEventListener("click", () => {
  const findMaxBMI = [];
  user.forEach((single) => {
    findMaxBMI.push(BMIcalculater(single));
  });
  const sorted = findMaxBMI.sort((a, b) => b.BMI - a.BMI);

  //   finally we are printing the result to the dom element.
  output.innerHTML = `Full name:${sorted[0].intputName} and BMI is:${sorted[0].BMI}`;
});
