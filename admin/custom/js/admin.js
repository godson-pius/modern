//This function approves a particular teacher...
const approve = element => {
    let elementId = element.dataset.approve;

    $confirm_approval = confirm("Do you want to approve");

    if ($confirm_approval) {
        element.className = "btn btn-warning";
        element.text = "Processing";

        fetch(`custom/php/admin?approve=${elementId}`).then(e => e).then(e => e.text()).then(e => {
            if (e === "success") {
                alert("Teacher Approved");
                element.parentElement.parentElement.parentElement.remove();

            } else if (e === "failed") {
                element.className = "text-orange os-icon os-icon-alert-octagon";

            } else {
                element.className = "btn btn-danger";
                element.text = "Network Problem! Try Again";
            }

        }).catch((e) => {
            element.className = "btn btn-danger text-light";
            element.text = "Network Problem! Try Again";
            
        });
    } else {
        element.className = "btn btn-primary";
    }
};

//This function grants a particular teacher access to his / her dashboard...
const grant_access = element => {
    let elementId = element.dataset.access;

    $confirm_approval = confirm("Do you want to grant access?");

    if ($confirm_approval) {
        element.className = "btn btn-warning";
        element.text = "Processing";

        fetch(`custom/php/admin?access=${elementId}`).then(e => e).then(e => e.text()).then(e => {
            if (e === "success") {
                alert("Access Granted");
                element.className = "ml-1 font-weight-bold text-uppercase btn btn-warning btn-sm";
                element.text = "SUSPEND";

            } else if (e === "failed") {
                element.className = "text-orange os-icon os-icon-alert-octagon";

            } else {
                element.className = "btn btn-danger";
                element.text = "Network Problem! Try Again";
            }

        }).catch((e) => {
            element.className = "btn btn-danger text-light";
            element.text = "Network Problem! Try Again";
        });
    } else {
        element.className = "btn btn-success btn-sm";
        element.text = "GRANT";
    }
};

//This function suspends a particular teacher to his / her dashboard...
const suspend = element => {
    let elementId = element.dataset.suspend;

    $confirm_approval = confirm("Do you want to suspend?");

    if ($confirm_approval) {
        element.className = "btn btn-warning";
        element.text = "Processing";

        fetch(`custom/php/admin?suspend=${elementId}`).then(e => e).then(e => e.text()).then(e => {
            if (e === "success") {
                alert("Teacher Suspended");
                element.className = "btn btn-success btn-sm";
                element.text = "GRANT";

            } else if (e === "failed") {
                element.className = "text-orange os-icon os-icon-alert-octagon";

            } else {
                element.className = "btn btn-danger";
                element.text = "Network Problem! Try Again";
            }

        }).catch((e) => {
            element.className = "btn btn-danger text-light";
            element.text = "Network Problem! Try Again";
        });
    } else {
        element.className = "btn btn-warning btn-sm";
        element.text = "SUSPEND";
    }
};

//This function deletes a particular teacher from the system..
const delete_teacher = element => {
    let elementId = element.dataset.delete;

    $confirm_approval = confirm("Do you want to delete teacher?");

    if ($confirm_approval) {
        element.className = "btn btn-warning";
        element.text = "Processing";

        fetch(`custom/php/admin?delete=${elementId}`).then(e => e).then(e => e.text()).then(e => {
            if (e === "success") {
                alert("Teacher Deleted");
                element.parentElement.parentElement.remove();

            } else if (e === "failed") {
                element.className = "btn btn-danger text-light";
                element.text = "Failed! Try Again";

            } else {
                element.className = "btn btn-danger";
                element.text = "Network Problem! Try Again";
            }

        }).catch((e) => {
            element.className = "btn btn-danger text-light";
            element.text = "Network Problem! Try Again";
        });
    } else {
        element.className = "ml-1 font-weight-bold text-light text-uppercase btn btn-danger btn-sm";
        element.text = "DELETE";
    }
};