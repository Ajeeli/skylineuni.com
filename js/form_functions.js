var degreeListVar = document.getElementById("degreeList");
var collegeListVar = document.getElementById("collegeList");
var programListVar = document.getElementById("programList");



update_degrees();
degreeListVar.addEventListener("change", update_colleges);
collegeListVar.addEventListener("change", update_programs);


// A function that uses Ajax to the list of degree from the database and populate the degree dropdown list
function update_degrees() {

    // Show loading spinner while retrieving data
    showSpinner();

    // Clear degreeList dropbox options
    degreeListVar.options.length = 1;
    var url = "/ajax/get_degrees.php";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText); // store retreived json data into an array

            // Result retrieved, stop loading spinner
            hideSpinner();

            // Add array elements to college dropdown list
            for (i = 0; i < data.length; i++) {
                var list = document.getElementById("degreeList");
                var option = document.createElement("option");
                option.text = data[i];
                list.append(option);
            }
        }
    }
    xhr.send();
}


// A function that uses Ajax to get a list of colleges from the database and populate the college dropdown list
function update_colleges() {

    // Show loading spinner while retrieving data
    showSpinner();

    // Clear collegeList dropbox options
    collegeListVar.options.length = 1;

    // Hide program dropdown list until a college has been selected
    programListVar.style.display = "none";

    var url = "/ajax/get_colleges.php";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText); // store retreived json data into an array

            // Result retrieved, stop loading spinner
            hideSpinner();

            // Add array elements to college dropdown list
            for (i = 0; i < data.length; i++) {
                var list = document.getElementById("collegeList");
                var option = document.createElement("option");
                option.text = data[i];
                list.append(option);
            }
        }
    }
    xhr.send();

    //show dropdown from hiddent to shown
    collegeListVar.style.display = "block";
}


// A function that uses Ajax to get a list of programs from the database and populate the programs dropdown list
function update_programs() {

    // Show loading spinner while retrieving data
    showSpinner();

    // Clear programList dropbox options
    programListVar.options.length = 1;
    var college_select = document.getElementById("collegeList");
    var program_select = document.getElementById("programList");

    var college_id = college_select.options[college_select.selectedIndex].index;
    var url = "/ajax/get_programs.php?college_id=" + college_id;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText); // store retreived json data into an array

            // Result retrieved, stop loading spinner
            hideSpinner();

            // Add array elements to program dropdown list
            for (i = 0; i < data.length; i++) {
                var list = document.getElementById("programList");
                var option = document.createElement("option");
                option.text = data[i];
                list.append(option);
            }
        }
    }
    xhr.send();

    //show dropdown from hiddent to shown
    programListVar.style.display = "block";
}

// Retrieve data from the session and store it in its appropriate fields
if (sessionStorage.getItem("first-next-button-pressed") == "true") {
    document.getElementById("fname").value = sessionStorage.getItem("fname");
    document.getElementById("lname").value = sessionStorage.getItem("lname");
    document.getElementById("gender").value = sessionStorage.getItem("gender");
    document.getElementById("dob").value = sessionStorage.getItem("dob");
    document.getElementById("email").value = sessionStorage.getItem("email");

    collegeListVar.style.display = "block";
    programListVar.style.display = "block";
} else {
    collegeListVar.style.display = "none";
    programListVar.style.display = "none";
}

// A function that stores the form values when the form first page 'next' button is clicked, onlick function
function storeData() {
    sessionStorage.setItem("fname", document.getElementById("fname").value);
    sessionStorage.setItem("lname", document.getElementById("lname").value);
    sessionStorage.setItem("gender", document.getElementById("gender").value);
    sessionStorage.setItem("dob", document.getElementById("dob").value);
    sessionStorage.setItem("email", document.getElementById("email").value);

    sessionStorage.setItem("selectedDegree", document.getElementById("degreeList").selectedIndex);
    sessionStorage.setItem("selectedCollege", document.getElementById("collegeList").selectedIndex);
    sessionStorage.setItem("selectedProgram", document.getElementById("programList").selectedIndex);

    // Set a value of 'true' in session to know that the user has been to this form before 
    sessionStorage.setItem("first-next-button-pressed", "true");
}

function onEducationLevelChange() {
    selectedDegree = document.getElementById("educationLevelDropDown").selectedIndex;

    if (selectedDegree == 0) {
        document.getElementById("degreeProofDiv").style.display = "none";
        document.getElementById("noDegreeWarningDiv").remove();
    } else if (selectedDegree > 0 && selectedDegree < 6) {
        document.getElementById("degreeProofDiv").style.display = "block";
        document.getElementById("noDegreeWarningDiv").remove();
    } else {
        // Show hidden dropdown list div
        document.getElementById("degreeProofDiv").style.display = "none";
        document.getElementById("degreeCopyDropDown").required = false;
        // Create a new div
        var newDiv = document.createElement("div");
        newDiv.id = "noDegreeWarningDiv";

        // Give div some text
        newDiv.innerHTML = "After submitting, you will be contacted by the Admission Office to further evaluate your application as it is required by university policy to have at least a high school degree in order to successfully register. Our staff will guide as to what the next steps will be and how to move forward.";
        newDiv.style.color = "gray";
        newDiv.style.fontStyle = "italic";
        newDiv.style.fontSize = "0.8rem";

        // Get the Element that we need to insert our created div after
        var targetElement = document.querySelector("#educationLevelDropDown")

        // Insert new div after targeted one
        targetElement.parentNode.insertBefore(newDiv, targetElement.nextSibling);
    }
}

function onDegreeCopyChange() {
    degreeCopy = document.getElementById("degreeCopyDropDown").selectedIndex;
    if (degreeCopy == 0)
        document.getElementById("degreeProofWarning").style.display = "none";
    else if (degreeCopy == 1 || degreeCopy == 2)
        document.getElementById("degreeProofWarning").style.display = "none";
    else if (degreeCopy == 3) {
        // Create a new div
        var newDiv = document.createElement("div");
        newDiv.id = "degreeProofWarning";

        // Give div some text
        newDiv.innerHTML = "After submitting, you will be contacted by the administration staff in order to help in obtaining a copy of your degree as it is required by university policy. You can register and start studying but must provide a copy by mid-semester.";
        newDiv.style.color = "gray";
        newDiv.style.fontStyle = "italic";
        newDiv.style.fontSize = "0.8rem";



        // Get the Element that we need to insert our created div after
        var targetElement = document.querySelector("#degreeCopyDropDown")

        // Insert new div after targeted one
        targetElement.parentNode.insertBefore(newDiv, targetElement.nextSibling);
    }
}

function showSpinner() {
    var spinner = document.getElementById("spinner");
    spinner.style.display = "block";
}

function hideSpinner() {
    var spinner = document.getElementById("spinner");
    spinner.style.display = "none";
}
