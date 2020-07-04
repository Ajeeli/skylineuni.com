new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'deptChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { semester: 'First', Dept: 2000, Payed: 1000 },
    { semester: 'Second', Dept: 1000, Payed: 2000 },
    { semester: 'Third', Dept: 3000, Payed: 1500 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'semester',
  parseTime: false,
  // A list of names of data record attributes that contain y-values.
  ykeys: ['Dept', 'Payed'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Dept', 'Payed'],
  lineColors: ['#6673FC', 'orange']
});

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'sisEmployeesChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#4cc08b", "#99dbbd", "#00a65a", "#00743e", "#004224"],
  data: [
    {label: 'WOP', value: 13 },
    {label: 'WOP', value: 22 },
    {label: 'WOP', value: 51 },
    {label: 'WOP', value: 5 },
    {label: 'WOP', value: 18 }
  ],
  resize: true
});

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'sisProgramsChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#fad7a0", "#f6b959", "#f39c12", "#613e07", "#aa6d0c"],
  data: [
    {label: 'WOP', value: 45},
    {label: 'WOP', value: 40 },
    {label: 'WOP', value: 41 },
    {label: 'WOP', value: 47 },
    {label: 'WOP', value: 53 }
  ],
  resize: true
});

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'sisStudentsChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  colors: ["#bbb9d6", "#8885b7", "#555299", "#3b396b", "#2a294c"],
  data: [
    {label: 'WOP', value: 1500 },
    {label: 'WOP', value: 3100 },
    {label: 'WOP', value: 4400 },
    {label: 'WOP', value: 7500 },
    {label: 'WOP', value: 12000 }
  ],
  resize: true
});