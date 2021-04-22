function weeklyDateCounter() {
  const weeklyDay = document.querySelector(".weekly-date-day");
  const weeklyHour = document.querySelector(".weekly-date-hour");
  const weeklyMinute = document.querySelector(".weekly-date-minute");
  const weeklySecond = document.querySelector(".weekly-date-second");

  let day = 6;
  let hour = 23;
  let minute = 59;
  let second = 60;

  setInterval(startTimer, 1000);

  function startTimer() {
    second--;
    if (second >= 10) {
      weeklySecond.innerHTML = `${second} <br> Seconds`;
    }
    if (second < 10) {
      weeklySecond.innerHTML = `0${second} <br> Seconds`;
    }
    if (second <= 0) {
      second = 60;
      minute--;
    }
    if (minute >= 10) {
      weeklyMinute.innerHTML = `${minute} <br> Minutes`;
    }
    if (minute < 10) {
      weeklyMinute.innerHTML = `0${minute} <br> Minutes`;
    }
    if (minute <= 0) {
      minute = 59;
      hour--;
    }
    if (hour >= 10) {
      weeklyHour.innerHTML = `${hour} <br> Hours`;
    }
    if (hour < 10) {
      weeklyHour.innerHTML = `0${hour} <br> Hours`;
    }
    if (hour <= 0) {
      hour = 23;
      day--;
    }
    weeklyDay.innerHTML = `0${day} <br> Days`;
  }

  weeklyDay.innerHTML = `${day} <br> Days`;
  weeklyHour.innerHTML = `${hour} <br> Hour`;
  weeklyMinute.innerHTML = `${minute} <br> Minute`;
  weeklySecond.innerHTML = `${second} <br> Second`;
}
weeklyDateCounter();
