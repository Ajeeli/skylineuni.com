// Retrieving session values set in 'dashboardProcess.php'

var executives = sessionStorage.getItem("executive");
var tutors = sessionStorage.getItem("tutor");
var students = sessionStorage.getItem("student");
var colleges = sessionStorage.getItem("college");
var programs = sessionStorage.getItem("program");
var courses = sessionStorage.getItem("course");
var sections = sessionStorage.getItem("section");

new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'incomeExpenseChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2015', value: 20000, value2: 10000 },
    { year: '2016', value: 10000, value2: 30000 },
    { year: '2017', value: 5000, value2: 30000 },
    { year: '2018', value: 5000, value2: 80000 },
    { year: '2019', value: 40000, value2: 10000 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value', 'value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Total Income', 'Total Expense'],
  barColors: ['#6673FC', 'darkorange'],
  resize: true
});

/*  Additional Options
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
*/

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'employeesChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#4cc08b", "#99dbbd", "#00a65a", "#00743e", "#004224"],
  data: [
    {label: 'Executives', value: 1 },
    {label: 'Professors', value: 2 },
    {label: 'Students', value: 3 }
  ],
  resize: true
});

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'programsChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#fad7a0", "#f6b959", "#f39c12", "#613e07", "#aa6d0c"],
  data: [
    {label: 'CS-33 Courses', value: 45},
    {label: 'BIS-21 Courses', value: 40 },
    {label: 'DE-41 Courses', value: 41 },
    {label: 'MIS-78 Courses', value: 47 },
    {label: 'EN-31 Courses', value: 53 }
  ],
  resize: true
});

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'studentsChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#bbb9d6", "#8885b7", "#555299", "#3b396b", "#2a294c"],
  data: [
    {label: 'CS-33 Students', value: 1500 },
    {label: 'BIS-21 Students', value: 3100 },
    {label: 'DE-41 Students', value: 4400 },
    {label: 'MIS-78 Students', value: 7500 },
    {label: 'EN-31 Students', value: 12000 }
  ],
  resize: true
});