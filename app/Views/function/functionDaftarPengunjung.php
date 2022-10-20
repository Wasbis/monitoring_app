<script>
    function hapus($kode_link) {
        var result = confirm('Yakin mau melakukan proses delete');
        if (result) {
            window.location = "<?php echo site_url("Admin/daftarpengunjung/hapus") ?>/" + $kode_link;
        }
    }

    function edit($kode_link) {
        $.ajax({
            url: "<?php echo site_url("Admin/daftarpengunjung/edit") ?>/" + $kode_link,
            type: "get",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.kode_link != '') {
                    $('#kode_link').val($obj.kode_link);
                    $('#inputNama').val($obj.nama);
                    $('#inputInstansi').val($obj.instansi);
                    $('#inputKeperluan').val($obj.keperluan);
                    $('#inputFoto').val($obj.foto);
                    $('#inputTanggal').val($obj.tanggal);
                }
            }

        });
    }

    function bersihkan() {
        $('#kode_link').val('');
        $('#inputNama').val('');
        $('#inputInstansi').val('');
        $('#inputKeperluan').val('');
        $('#inputFoto').val('');
        $('#inputTanggal').val('');
    }
    $('.tombol-tutup').on('click', function() {
        if ($('.sukses').is(":visible")) {
            window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
        }
        $('.alert').hide();
        bersihkan();
    });

    $('#tombolSimpan').on('click', function() {
        var $kode_link = $('#kode_link').val();
        var $nama = $('#inputNama').val();
        var $instansi = $('#inputInstansi').val();
        var $keperluan = $('#inputKeperluan').val();
        var $foto = $('#inputFoto').val();
        var $tanggal = $('#inputTanggal').val();


        $.ajax({
            url: "<?php echo site_url("Admin/daftarpengunjung/simpan") ?>",
            type: "POST",
            data: {
                kode_link: $kode_link,
                nama: $nama,
                instansi: $instansi,
                foto: $foto,
                keperluan: $keperluan,
                footo: $foto,
                tanggal: $tanggal,
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
    
    
    let canvas = document.querySelector('#canvas');
    let contect = canvas.getContext('2d');
    let video = document.querySelector('#video');

    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({video: true}).then((stream) => {
        video.srcObject = stream;
        video.play();
        });
    } else if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({video: false}).then((stop) => {
        video.srcObject = stop;
        video.stop();
        });
    }

    document.getElementById('snap').addEventListener('click', () => {
    contect.drawImage(video, 60, 10, 315, 232);
    });

</script>