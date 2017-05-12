$('.datepicker').pickadate({
selectMonths: true,//Creates a dropdown to control month
selectYears: 15,//Creates a dropdown of 15 years to control year
//The title label to use for the month nav buttons
labelMonthNext: 'Next Month',
labelMonthPrev: 'Last Month',
//The title label to use for the dropdown selectors
labelMonthSelect: 'Select Month',
labelYearSelect: 'Select Year',
//Months and weekdays
monthsFull: [ 'January', 'February', 'March', 'April', 'March', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ],
monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'Mar', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
weekdaysFull: [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ],
weekdaysShort: [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
//Materialize modified
weekdaysLetter: [ 'S', 'M', 'T', 'W', 'T', 'F', 'S' ],
//Today and clear
today: 'Today',
clear: 'Clear',
close: 'Close',
//The format to show on the `input` element
format: 'dd/mm/yyyy'
});
//Copy settings and initialization tooltipped
