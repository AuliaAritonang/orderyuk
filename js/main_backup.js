$(document).ready(function() {
    $("#form-register").validate({
        errorLabelContainer: ".alert",
        errorElement: "li",
    });


    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate: '<div class="title">#title#</div>',
        labels: {
            previous: '<i class="zmdi zmdi-arrow-left"></i>',
            next: '<i class="zmdi zmdi-arrow-right"></i>',
            finish: '<i class="zmdi zmdi-arrow-right"></i>',
            current: ''
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                var load = '';

                var id_item_produk = [];
                var id_item_bahan = [];

                $.each($("input[name='produk']:checked"), function() {
                    var id = $(this).val();
                    var img = $('#image_' + id);
                    var produk = $('#produk_' + id).val();
                    var bahan = $('#bahan_' + id).val();

                    id_item_produk.push(produk);
                    id_item_bahan.push(bahan);

                    $('#kerajang').empty();
                    load += '<div id="item_1"></div>'
                    load += '<div class="col-md-4">';
                    load += '<div class="form-group form-check" style="padding-left:0px;">';
                    load += '<img class="img-thumbnail" width="170px" src="' + img[0].src + '" style="margin-bottom:15px;">';
                    load += '</div>';
                    load += '</div>';
                    load += '<div class="col-md-8">';
                    load += '<div class="form-row">';
                    load += '<div class="form-group col-md-6" id="input_produk_' + id + '">';
                    load += '<label for="sizeS">Model</label>';
                    load += '';
                    load += '</div>';
                    load += '<div class="form-group col-md-6" id="input_bahan_' + id + '">';
                    load += '<label for="sizeS">Bahan</label>';
                    load += '';
                    load += '</div>';
                    load += '<div class="form-group col-md-2">';
                    load += '<label for="sizeS">Ukuran S</label>';
                    load += '<input class="form-control" type="text" id="new_s_' + id + '" name="new_s" >';
                    load += '</div>';
                    load += '<div class="form-group col-md-2">';
                    load += '<label for="sizeS">Ukuran M</label>';
                    load += '<input class="form-control" type="text" id="new_m_' + id + '" name="new_m" >';
                    load += '</div>';
                    load += '<div class="form-group col-md-2">';
                    load += '<label for="sizeS">Ukuran L</label>';
                    load += '<input class="form-control" type="text" id="new_l_' + id + '" name="new_l" >';
                    load += '</div>';
                    load += '<div class="form-group col-md-3">';
                    load += '<label for="sizeS">Ukuran XL</label>';
                    load += '<input class="form-control" type="text" id="new_xl_' + id + '" name="new_xl" >';
                    load += '</div>';
                    load += '<div class="form-group col-md-3">';
                    load += '<label for="sizeS">Ukuran XXL</label>';
                    load += '<input class="form-control" type="text" id="new_xxl_' + id + '" name="new_xxl" >';
                    load += '</div>';
                    load += '<div class="row" id="ig_' + id + '_0">';
                    load += '<div class="form-group col-md-8">';
                    load += '<label for="desain">Upload Desain</label>';
                    load += '<input type="file" class="form-control" id="desain_' + id + '" name="desain" required>';
                    load += '</div>';
                    load += '<div class="form-group col-md-4" id="button_main_' + id + '_0">';
                    load += '<label for="desain">&nbsp;</label>';
                    // load += '<button type="button" class="btn btn-primary" onclick="new_gambar('+"'"+id+"'"+')" style="width: 100%;">Tambah</button>';
                    load += '</div>';
                    load += '</div>';
                    load += '<div id="form_desain_' + id + '"></div>';
                    load += '</div>';
                    load += '</div>';

                    $.ajax({
                        type: 'POST',
                        url: 'get_produk.php',
                        dataType: 'JSON',
                        data: {
                            id_produk: produk,
                        },
                        success: function(data) {
                            $('#item_1').append('<input class="form-control" type="hidden" name="last_id[]" id="last_id_' + id + '" value="0" readonly>');
                            $('#item_1').append('<input class="form-control" type="hidden" name="id_produk_1[]" id="id_produk_1_' + id + '" value="' + produk + '" readonly>');
                            $('#input_produk_' + id).append('<input class="form-control" type="text" name="f_produk[]" id="new_produk_' + id + '" value="' + data['nama_produk'] + '" readonly>');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: 'get_bahan.php',
                        dataType: 'JSON',
                        data: {
                            id_bahan: bahan,
                        },
                        success: function(data) {
                            $('#item_1').append('<input class="form-control" type="hidden" name="id_bahan_1[]" id="id_bahan_1_' + id + '" value="' + bahan + '" readonly>');
                            $('#item_1').append('<input class="form-control" type="hidden" name="harga_bahan[]" id="harga_bahan_' + id + '" value="' + data['harga_bahan'] + '" readonly>');
                            $('#input_bahan_' + id).append('<input class="form-control" type="text" name="f_bahan[]" id="new_bahan_' + id + '" value="' + data['nama_bahan'] + '" readonly>');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Terjadi Kesalahan...');

                        }
                    });
                });

                $('#kerajang').append(load);
            } else if (currentIndex === 1) {
                $('#item_2').empty();
                $.each($("input[name='id_produk_1[]']"), function() {
                    var id = $(this).val();

                    $('#item_2').append('<input class="form-control" type="hidden" name="id_produk_2[]" id="id_produk_2_' + id + '" value="' + id + '" readonly>');
                });
            } else if (currentIndex === 2) {
                $('#item_3').empty();
                $('#cart-val').empty();
                var html = '';
                var nama = $('#nama').val();
                var email = $('#email').val();
                var telp = $('#telp').val();
                var alamat = $('#alamat').val();
                var kota = $('#kota').val();
                var provinsi = $('#provinsi').val();
                var kodepos = $('#kodepos').val();
                var total = 0;

                $.each($("input[name='id_produk_2[]']"), function() {
                    var id = $(this).val();

                    $('#item_3').append('<input class="form-control" type="hidden" name="id_produk_3[]" id="id_produk_2_' + id + '" value="' + id + '" readonly>');

                    var produk = $('#new_produk_' + id).val();
                    var bahan = $('#new_bahan_' + id).val();
                    var harga = $('#harga_bahan_' + id).val();
                    var s = $('#new_s_' + id).val();
                    var m = $('#new_m_' + id).val();
                    var l = $('#new_l_' + id).val();
                    var xl = $('#new_xl_' + id).val();
                    var xxl = $('#new_xxl_' + id).val();

                    var jumlah = (Number(harga) * Number(s)) + (Number(harga) * Number(m)) + (Number(harga) * Number(l)) + (Number(harga) * Number(xl)) + (Number(harga) * Number(xxl));

                    total += jumlah;

                    html += '<span>Produk : ' + produk + '</span><br>';
                    html += '<span>Bahan : ' + bahan + '</span><br>';
                    html += '<span>Rp. ' + jumlah + '</span><br>';
                    html += '<span>S : ' + s + ', M : ' + m + ', L : ' + l + ', XL : ' + xl + ', XXL : ' + xxl + ',</span><br>';
                });

                $('#nama-val').html(nama);
                $('#email-val').html(email);
                $('#telp-val').html(telp);
                $('#alamat-val').html(alamat);
                $('#kota-val').html(kota);
                $('#provinsi-val').html(provinsi);
                $('#kodepos-val').html(kodepos);
                $('#cart-val').append(html);
                $('#total-val').html('Rp. ' + total);
            }

            $("#form-register").validate().settings.ignore = ":disabled,:hidden";
            return $("#form-register").valid();

        },
        onFinished: function(event, currentIndex) {
            var form_data = new FormData($('#form-register')[0]);
            $.ajax({
                type: 'POST',
                url: 'simpan_pemesanan.php',
                dataType: "JSON",
                data: form_data,
                contentType: false,
                processData: false,
                success: function(data) {
                    alert('Data berhasil diinput. Silahkan klik pemesanan saya untuk melakukan transaksi...');
                    location.reload();
                    // alert(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Terjadi Kesalahan...');
                }
            });
        }
    });
});

function myFunc(total, num) {
    return total - num;
}

// var count_add = 0;

// function new_gambar(id){
//     count_add = Number($('#last_id_'+id).val());

//     console.log(count_add);

//     $('#button_main_'+id+'_'+count_add).html('<label for="desain">&nbsp;</label><button type="button" class="btn btn-danger" onclick="min_gambar('+"'"+id+"','"+count_add+"'"+')" style="width: 100%;">Hapus</button>');
//     count_add += 1;

//     $('#last_id_'+id).val(count_add);
//     var load = "";

//     load += '<div class="row" id="ig_'+id+'_'+count_add+'">';
//     load += '<div class="form-group col-md-8">';
//     load += '<label for="desain">Upload Desain</label>';
//     load += '<input type="file" class="form-control" id="desain_'+id+'_'+count_add+'" name="desain" required>';
//     load += '</div>';
//     load += '<div class="form-group col-md-4" id="button_main_'+id+'_'+count_add+'">';
//     load += '<label for="desain">&nbsp;</label>';
//     load += '<button type="button" class="btn btn-primary" onclick="new_gambar('+"'"+id+"'"+')" style="width: 100%;">Tambah</button>';
//     load += '</div>';
//     load += '</div>';

//     $('#form_desain_'+id).append(load);
// }

// function min_gambar(id,id_add){
//     $('#ig_'+id+'_'+id_add).remove();
// }