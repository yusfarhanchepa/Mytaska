// Add Record
function addRecord() {
    // get values
    var nama_kelas = $("#nama_kelas").val();
    var nama_guru = $("#nama_guru").val();
    var nama_ppm = $("#nama_ppm").val();
    var sesi = $("#sesi").val();
    var kapasiti = $("#kapasiti").val();
    var tahun_mula_operasi = $("#tahun_mula_operasi").val();


    // Add record
    $.post("../model/ajax/addRecord.php", {
        nama_kelas: nama_kelas,
        nama_guru: nama_guru,
        nama_ppm: nama_ppm,
        sesi: sesi,
        kapasiti: kapasiti,
        tahun_mula_operasi: tahun_mula_operasi,


    }, function(data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#nama_kelas").val("");
        $("#nama_guru").val("");
        $("#nama_ppm").val("");
        $("#sesi").val("");
        $("#kapasiti").val("");
        $("#tahun_mula_operasi").val("");

    });
}

// READ records
function readRecords() {
    $.get("../model/ajax/readRecords.php", {}, function(data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id_kelas) {
    var conf = swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(function() {
        swal(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
        $.post("../model/ajax/deleteUser.php", {
                id_kelas: id_kelas
            },
            function(data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

    })

}

function GetUserDetails(id_kelas) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id_kelas);
    $.post("../model/ajax/readUserDetails.php", {
            id_kelas: id_kelas
        },
        function(data, status) {
            // PARSE json data
            var user = JSON.parse(data);

            // Assing existing values to the modal popup fields
            $("#update_nama_kelas").val(user.nama_kelas);
            $("#update_nama_guru").val(user.nama_guru);
            $("#update_nama_ppm").val(user.nama_ppm);
            $("#update_sesi").val(user.sesi);
            $("#update_kapasiti").val(user.kapasiti);
            $("#update_tahun_mula_operasi").val(user.tahun_mula_operasi);

        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var nama_kelas = $("#update_nama_kelas").val();
    var nama_guru = $("#update_nama_guru").val();
    var nama_ppm = $("#update_nama_ppm").val();
    var sesi = $("#update_sesi").val();
    var kapasiti = $("#update_kapasiti").val();
    var tahun_mula_operasi = $("#update_tahun_mula_operasi").val();


    // get hidden field value
    var id_kelas = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("../model/ajax/updateUserDetails.php", {
            id_kelas: id_kelas,
            nama_kelas: nama_kelas,
            nama_guru: nama_guru,
            nama_ppm: nama_ppm,
            sesi: sesi,
            kapasiti: kapasiti,
            tahun_mula_operasi: tahun_mula_operasi

        },
        function(data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function() {
    // READ recods on page load
    readRecords(); // calling function
});