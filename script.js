var table = document.getElementById("tab");

for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        document.getElementById("id").value = this.cells[0].innerHTML;
        document.getElementById("TName").value = this.cells[1].innerHTML;
        document.getElementById("TEmail").value = this.cells[2].innerHTML;
        document.getElementById("TDOB").value = this.cells[3].innerHTML;
        document.getElementById("TSalary").value = this.cells[4].innerHTML;
        document.getElementById("TPass").value = this.cells[5].innerHTML;
    }
}
var tablestudent = document.getElementById("tabstu");

for (var i = 1; i < tablestudent.rows.length; i++) {
    tablestudent.rows[i].onclick = function () {
        document.getElementById("sid").value = this.cells[0].innerHTML;
        document.getElementById("stName").value = this.cells[1].innerHTML;
        document.getElementById("stEmail").value = this.cells[2].innerHTML;
        document.getElementById("stDOB").value = this.cells[3].innerHTML;
        document.getElementById("stadresse").value = this.cells[4].innerHTML;
        document.getElementById("stpassword").value = this.cells[5].innerHTML;
        document.getElementById("stteacher").value = this.cells[6].innerHTML;
    }
}
