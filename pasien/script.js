$(document).ready(function() {
    $('#keyword').on('keyup', function() {
        var keyword = $(this).val();
        $.ajax({
            url: 'search.php',
            method: 'GET',
            data: { keyword: keyword },
            success: function(response) {
                $('#search-results').html(response); // Memperbarui hasil pencarian
                $('#search-results').show(); // Menampilkan tabel hasil pencarian
                $('#pasien-table').hide(); // Menyembunyikan tabel pasien
            }
        });
    });
});
