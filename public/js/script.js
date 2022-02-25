const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});

/* Checkin - Check-out */

const dayHourIn = "20/01/2022 10:01:00"

const dayHourOut = "20/01/2022 14:34:00"

function convertDateHourToMs(dateHour){
    const [date, hours] = dateHour.split(' ')
    const [day, month, year] = date.split('/')
    const [hour, minutes, seconds] = hours.split(':')

    const newDate = new Date(year, month - 1, day, hour, minutes, seconds)

    return newDate.getTime()
}

const stayedTimeInSeconds = (convertDateHourToMs() - convertDateHourToMs(dayHourIn)) / 1000

// formatar meus tempo de estadia
const dayInSeconds = 24 * 60 * 60
const hourInSeconds = 60 * 60
const minutesInSeconds = 60

const days = Math.floor(stayedTimeInSeconds / dayInSeconds)
const hours = Math.floor(stayedTimeInSeconds / hourInSeconds) % 24
const minutes = Math.floor(stayedTimeInSeconds / minutesInSeconds) % 60
const seconds = stayedTimeInSeconds % 60

//Validação form-pre-reserva

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

