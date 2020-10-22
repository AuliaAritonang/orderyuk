onFinished: function (event, currentIndex){
            var form_data = new FormData($('#form-register')[0]);
            $.ajax({
                type: 'POST',
                url: 'simpan_pemesanan.php',
                dataType: "text",
                data: form_data,
                contentType: false,
                processData: false,
                success: function (data){
                    //location.reload();
                    alert(data);
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Terjadi Kesalahan...\n'+jqXHR+'\n'+textStatus+'\n'+errorThrown);
                }
            });
        }
    });
});