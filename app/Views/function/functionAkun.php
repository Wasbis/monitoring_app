<script>
    function hapus($id) {
        var result = confirm('Yakin mau melakukan proses delete');
        if (result) {
            window.location = "<?php echo site_url("Admin/dataakun/hapus") ?>/" + $id;
        }
    }

    function edit($id) {
        $.ajax({
            url: "<?php echo site_url("Admin/dataakun/edit") ?>/" + $id,
            type: "get",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id != '') {
                    $('#id').val($obj.id);
                    $('#inputNama').val($obj.email);
                    $('#inputUsername').val($obj.username);
                    $('#inputPassword').val($obj.password_has);
                    // $('#inputLevel').val($obj.level);
                }
            }

        });
    }

    function bersihkan() {
        $('#id').val('');
        $('#inputNama').val('');
        $('#inputUsername').val('');
        $('#inputPassword').val('');
        // $('#inputLevel').val('');
    }
    $('.tombol-tutup').on('click', function() {
        if ($('.sukses').is(":visible")) {
            window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
        }
        $('.alert').hide();
        bersihkan();
    });

    $('#tombolSimpan').on('click', function() {
        var $id = $('#id').val();
        var $email = $('#inputNama').val();
        var $username = $('#inputUsername').val();
        var $password_has = $('#inputPassword').val();
        // var $level = $('#inputLevel').val();


        $.ajax({
            url: "<?php echo site_url("dataakun/simpan") ?>",
            type: "POST",
            data: {
                id: $id,
                email: $email,
                username: $username,
                password_has: $password_has,
                // level: $level
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