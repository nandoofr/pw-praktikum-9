function tampilkanSemua(){
    $.getJSON('data/makanan.json', function (data) {
        let menu = data.menu;
        $.each(menu, function (i, data) {
           $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/food/'+ data.gambar +'" class=" card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><p class="card-text">'+ data.estimasi +'</p><h5 class="card-title">IDR '+ data.harga +'</h5><a href="#" class="btn btn-primary">Order</a></div></div></div>')  
        });
    });
}

tampilkanSemua();

$('.nav-link').on('click', function () {

    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let jenis = $(this).html();
    $('h1').html(jenis);

    if (jenis == 'Home'){
        tampilkanSemua();
        return;
    }

    $.getJSON('data/kopi.json', function(data){
        let menu = data.menu;
        let content = '';

        $.each(menu, function(i, data){
            if(data.jenis == jenis.toLowerCase()) {
                content += '<div class="col-md-4"><div class="card mb-3"><img src="img/food/'+ data.gambar +'" class=" card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><p class="card-text">'+ data.estimasi +'</p><h5 class="card-title">IDR '+ data.harga +'</h5><a href="#" class="btn btn-primary">Order</a></div></div></div>';
            }
        });

        $('#daftar-menu').html(content);

    });

});