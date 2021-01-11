//Declaration of each team last three inings score.
const JhonTeams = [101, 100, 100];
const MikeTeams = [100, 100, 100];
const MaryTeams = [100, 100, 100];

//Function defination for calculating average.
function avg(score) {
  let totalScore = 0;
  score.forEach(function (number) {
    totalScore += number;
  });
  return totalScore / 3;
}

//Calculating of average score for each item.
const avgOfJhon = avg(JhonTeams);
const avgOfMike = avg(MikeTeams);
const avgOfMary = avg(MaryTeams);

//Outputing result based on conditions.
//Highest average score
if (avgOfJhon > avgOfMike && avgOfJhon > avgOfMary) {
  console.log("JhonTeams teams win.");
} else if (avgOfMike > avgOfJhon && avgOfMike > avgOfMary) {
  console.log("MikeTeams teams win.");
} else if (avgOfMary > avgOfJhon && avgOfMary > avgOfMike) {
  console.log("MaryTeams teams win.");
} else {
  console.log("Draw");
}
