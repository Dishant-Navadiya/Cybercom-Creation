const data = JSON.parse(localStorage.getItem("users"));

const outputAgeCards = document.getElementById("outputAgeCards");
const outputBirthdayNames = document.getElementById("outputBirthdayNames");

const todayDate = new Date().toDateString();

let underEighteen = [];
let eighteenToFifty = [];
let fiftyUp = [];
let todaysBirthdays = [];

function appendCardsOfAge() {
  var temp = "";
  console.log("hey");
  temp += `
        <div class="col-md-4">
        <div class="card text-white bg-secondary" style="max-width: 18rem">
          <div class="card-header">User < 18 Years</div>
          <div class="card-body">
            <p class="card-text">${underEighteen.length} Users</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-secondary" style="max-width: 18rem">
          <div class="card-header">User < 18 Years</div>
          <div class="card-body">
            <p class="card-text">${eighteenToFifty.length} Users</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-secondary" style="max-width: 18rem">
          <div class="card-header">User < 18 Years</div>
          <div class="card-body">
            <p class="card-text">${fiftyUp.length} Users</p>
          </div>
        </div>
      </div>
      `;
  outputAgeCards.innerHTML = temp;
}

const countingYears = () => {
  if (data) {
    data.forEach((user) => {
      if (user.age < 18) {
        underEighteen.push(user);
      } else if (user.age <= 18 && user.age <= 50) {
        eighteenToFifty.push(user);
      } else if (user.age > 50) {
        fiftyUp.push(user);
      }
    });

    // console.log(underEighteen);
    // console.log(eighteenToFifty);
    // console.log(fiftyUp);
    appendCardsOfAge();
  }
};

countingYears();

const findTodaysBirthday = () => {
  if (data) {
    data.forEach((user) => {
      if (new Date(user.birthdayDate).toDateString() === todayDate) {
        todaysBirthdays.push(user);
      }
    });
  }
};
findTodaysBirthday();

const listingNamesofBirthdays = () => {
  var temp = "";
  todaysBirthdays.forEach((user) => {
    console.log(user);
    temp += `<li class="list-group-item">${user.name}</li>`;
  });
  outputBirthdayNames.innerHTML = temp;
};
listingNamesofBirthdays();
