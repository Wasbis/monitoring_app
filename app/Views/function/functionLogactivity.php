<script>
    function hapus($id_log) {
        var result = confirm('Yakin mau melakukan proses delete');
        if (result) {
            window.location = "<?php echo site_url("Admin/logactivity/hapus") ?>/" + $id;
        }
    }

    function edit($id_log) {
        $.ajax({
            url: "<?php echo site_url("Admin/logactivity/edit") ?>/" + $id,
            type: "get",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id_log != '') {
                    $('#inputIdTicket').val($obj.idTicket);
                    $('#inputProblem').val($obj.problem);
                    $('#inputNip').val($obj.nip);
                    $('#inputPic').val($obj.pic);
                    $('#inputTanggal').val($obj.tanggal);
                    $('#inputStatus').val($obj.status);
                    $('#inputTroubleshooting').val($obj.troubleshooting);
                    $('#inputFoto').val($obj.$foto);
                }
            }

        });
    }

    function bersihkan() {
        $('#id_log').val("");
        $('#inputIdTicket').val("");
        $('#inputProblem').val("");
        $('#inputNip').val("");
        $('#inputPic').val("");
        $('#inputTanggal').val("");
        $('#inputStatus').val("");
        $('#inputTroubleshooting').val("");
        $('#inputFoto').val("");
    }
    $('.tombol-tutup').on('click', function() {
        if ($('.sukses').is(":visible")) {
            window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
        }
        $('.alert').hide();
        bersihkan();
    });

    $('#tombolSimpan').on('click', function() {

        var $id_ticket = $('#inputIdTicket').val();
        var $problem = $('#inputProblem').val();
        var $nip = $('#inputNim').val();
        var $pic = $('#inputPic').val();
        var $status = $('#inputStatus').val();
        var $tanggal = $('inputTanggal').val();
        var $troubleshooting = $('inputTroubleshooting').val();
        var $foto = $('inputFoto').val();


        $.ajax({
            url: "<?php echo site_url("Admin/logactivity/simpan") ?>",
            type: "POST",
            data: {
                id_ticket: $id_ticket,
                problem: $problem,
                nip: $nip,
                pic: $pic,
                status: $status,
                tanggal: $tanggal,
                troubleshooting: $troubleshooting,
                foto: $foto,
            },
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html($obj.sukses);
                }
            }
        });
        bersihkan();

    });
</script>