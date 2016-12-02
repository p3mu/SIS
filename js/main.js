function validate() {
    var fname = document.reg.fn.value;
    var lname = document.reg.ln.value;
    var session = document.reg.session.value;
    var rn = document.reg.rn.value;
    var branch = document.reg.branch.value;
    var year = document.reg.year.value;
    var semester = document.reg.semester.value;
    var mm = document.reg.mm.value;
    var dd = document.reg.dd.value;
    var yy = document.reg.yy.value;
    var address = document.reg.address.value;

    if (fname === '') {
        window.alert("Please Enter First Name!");
        document.reg.fn.focus();
        return false;

    }

    if (/select/.test(lname)) {
        window.alert("Please Enter Last Name!");
        document.reg.ln.focus();
        return false;

    }
    if (/select/.test(session)) {
        window.alert("Please Select Session!");
        document.reg.session.focus();
        return false;

    }
    if (rn === '') {
        window.alert("Enter Id No!");
        document.reg.rn.focus();
        return false;

    }
    if (/select/.test(branch)) {
        window.alert("Please Select Department!");
        document.reg.branch.focus();
        return false;

    }
    if (/select/.test(year)) {
        window.alert("Please Select Year!");
        document.reg.year.focus();
        return false;

    }
    if (/select/.test(semester)) {
        window.alert("Please Select Semester!");
        document.reg.semester.focus();
        return false;

    }
    if (/select/.test(dd) || /select/.test(yy) || /select/.test(mm)) {
        window.alert("Please Enter Date of Birth!");
        document.reg.dd.focus();
        return false;

    }

    if (address === '') {
        window.alert("Please Select Address!");
        document.reg.address.focus();
        return false;

    }


}