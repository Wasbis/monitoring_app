<script>
    function hapus($id_detail) {
        var result = confirm('Yakin mau melakukan proses delete');
        if (result) {
            window.location = "<?php echo site_url("Admin/datakelola/hapus") ?>/" + $id_detail;
        }
    }

    function edit($id_detail) {
        $.ajax({
            url: "<?php echo site_url("Admin/datakelola/edit") ?>/" + $id_detail,
            type: "get",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id_detail != '') {
                    $('#id_detail').val($obj.id_detail);
                    $('#nama_link').val($obj.nama_link);
                    $('#inputHardware').val($obj.hardware);
                    $('#inputSoftware').val($obj.software);
                    $('#inputNetwork').val($obj.network);
                    $('#inputConfidential').val($obj.confidential);
                }
            }

        });
    }

    function bersihkan() {
        $('#id_detail').val('');
        $('#nama_link').val('');
        $('#inputHardware').val('');
        $('#inputSoftware').val('');
        $('#inputNetwork').val('');
        $('#inputConfidential').val('');
    }
    $('.tombol-tutup').on('click', function() {
        if ($('.sukses').is(":visible")) {
            window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
        }
        $('.alert').hide();
        bersihkan();
    });

    $('#tombolSimpan').on('click', function() {
        var $id_detail = $('#id_detail').val();
        var $nama_link = $('#nama_link').val();
        var $hardware = $('#inputHardware').val();
        var $software = $('#inputSoftware').val();
        var $network = $('#inputNetwork').val();
        var $confidential = $('#inputConfidential').val();


        $.ajax({
            url: "<?php echo site_url("Admin/datakelola/simpan") ?>",
            type: "POST",
            data: {
                id_detail: $id_detail,
                nama_link: $nama_link,
                hardware: $hardware,
                software: $software,
                network: $network,
                confidential: $confidential
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