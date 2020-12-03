$(document).ready(function() {
    toastr.success('Success messages');
});

function getStudents(val) {
    fetch(`get_student.php?classid=${val}`).then(s => s).then(s => s.text()).then(s => {
        if (s) {
            document.getElementById('studentid').innerHTML = s;
            document.getElementById('studentName').style.display = "block";
        } else {
            document.getElementById('studentName').style.display = "none";
        }
    });
}


// Getting Subjects for each section
function getSubjects(val) {
    fetch(`get_student.php?sectionid=${val}`).then(s => s).then(s => s.text()).then(s => {
        if (s) {
            document.getElementById('subject').innerHTML = s;
            document.getElementById('subjectName').style.display = "block";
        } else {
            document.getElementById('subject').style.display = "none";
        }
    });
}

// Getting total score
function getTotalScore() {
    firstTest = parseInt(document.getElementById("firstTest").value);
    secondTest = parseInt(document.getElementById("secondTest").value);
    examScore = parseInt(document.getElementById("examScore").value);

    total = eval(firstTest + secondTest + examScore);
    document.getElementById("grandTotal").value = total;

    if (total <= 39) {
        document.getElementById('subjectGrade').value = 'F';
        document.getElementById('subjectGrade').style.color = '#fff';
        document.getElementById('subjectGrade').style.backgroundColor = 'rgb(208 92 92)';
        
    } else if (total >= 40 && total <= 49) {
        document.getElementById('subjectGrade').value = 'D';
        document.getElementById('subjectGrade').style.color = '#fff';
        document.getElementById('subjectGrade').style.backgroundColor = 'rgb(92 104 216)';

    } else if (total >= 50 && total <= 59) {
        document.getElementById('subjectGrade').value = 'C';
        document.getElementById('subjectGrade').style.color = '#000';
        document.getElementById('subjectGrade').style.backgroundColor = '#caca32';

    } else if (total >= 60 && total <= 69) {
        document.getElementById('subjectGrade').value = 'B';
        document.getElementById('subjectGrade').style.color = '#fff';
        document.getElementById('subjectGrade').style.backgroundColor = '#262f36';

    } else if (total >= 70) {
        document.getElementById('subjectGrade').value = 'A';
        document.getElementById('subjectGrade').style.color = '#000';
        document.getElementById('subjectGrade').style.backgroundColor = 'rgb(92 216 133)';
        // document.getElementById('subjectGrade').style.textShadow = '2px 2px 2px gray';

    } else {
        document.getElementById('subjectGrade').value = '';
    }
}


// Submitting the Result

document.getElementById("addResult").addEventListener("submit", async function (e) {

    e.preventDefault();

    let libs = new FormData(e.currentTarget);
    libs.append("submit", "");

    fetch(``, {
        method : "post",
        body : libs
    }).then(e => e).then(e => e.text()).then(e => {

        // document.getElementById("addResult").reset();
        // document.getElementById("sPost").innerHTML = "Submit";

        if (e === "success") {
            alert("Result Uploaded");
            conf = confirm("Do you want to add more result for this student");
            if (!conf) {
                document.getElementById("addResult").reset();
            }
        } else if (e === "failed") {
            alert("Failed");
        } else {
            alert(e);
        }
    }).catch((e) => {
        // document.getElementById("sPost").innerHTML = "Ooops!! Try Again";
    });
});