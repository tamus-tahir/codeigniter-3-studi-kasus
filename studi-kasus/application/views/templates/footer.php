 </div>
 <!-- end content -->

 <!-- footer -->
 <footer class="bg-dark p-3">
     <div class="text-center text-light">
         <h6>Copyright &copy; Tamus Tahir 2020</h6>
     </div>
 </footer>
 <!-- end footer -->

 <!-- modal detail buku -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body detail-buku">
                 ...
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
 <!-- end modal detail buku -->

 <!-- modal detail buku -->
 <div class="modal fade" id="detail-peminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Peminjaman</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body detail-peminjaman">
                 ...
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
 <!-- end modal detail buku -->

 <!-- link javascript -->
 <script src="<?= base_url('assets/jquery-3.4.1/jquery-3.4.1.min.js'); ?>"></script>
 <script src="<?= base_url('assets/jquery-ui/jquery-ui.js'); ?>"></script>
 <script src="<?= base_url('assets/bootstrap-4.4.1-dist/js/bootstrap.js'); ?>"></script>
 <script src="<?= base_url('assets/datatables/jquery.dataTables.js'); ?>"></script>
 <script src="<?= base_url('assets/datatables/dataTables.bootstrap4.js'); ?>"></script>
 <script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
 <!-- end link javascript -->

 <script>
     //  ketika halamannya sudah ready (selesai diload semua file) jalankan fungsi berikut
     $(document).ready(function() {
         //  jQuery  seleksi elemen yang idnya my-table jalankan function datatable
         $('#my-table').DataTable();

         //  jQuery seleksi elemen yang idnya my-table
         //  pada saat di klik class get-detail-buku jalankan fungsi berikut
         $('#my-table').on('click', '.get-detail-buku', function() {
             //  jQuery ambil data id pada tombol ini dan simpan dalam variabel id
             const id = $(this).data('id');
             //  jQuery seleksi elemen yang classnya detail-buku
             //  load url berikut
             $(".detail-buku").load("<?= base_url('buku/detail/'); ?>" + id);
         });

         //  jQuery seleksi elemen yang idnya nim
         // jalankan fungsi autocomplete (mempunya 2 parameter)
         //  sumber data dan fungsi ketika datanya ada
         $('#nim').autocomplete({
             source: "<?= base_url('peminjaman/getMahasiswa'); ?>",
             select: function(event, ui) {
                 //  jQuery seleksi elemen yang idnya nim isi valuenya dengan label
                 //  label jangan diganti dengan nama lain, karena default dari jQueri autocomplete
                 $('#nim').val(ui.item.label);
                 $('#id_mahasiswa').val(ui.item.id_mahasiswa);
                 $('#nama').val(ui.item.nama);
             }
         });

         //  getbuku
         $('#judul').autocomplete({
             source: "<?= base_url('peminjaman/getBuku'); ?>",
             select: function(event, ui) {
                 //  jQuery seleksi elemen yang idnya judul isi valuenya dengan label
                 $('#judul').val(ui.item.label);
                 $('#id_buku').val(ui.item.id_buku);
                 //  jQuery seleksi elemen yang idnya deskripsi cetak html dengan deskripsi
                 $('#deskripsi').html(ui.item.deskripsi);
                 //  jQuery seleksi elemen yang idnya gambar isi atribut sourcenya dengan gambar
                 $('#gambar').attr("src", "<?= base_url('uploads/'); ?>" + ui.item.gambar);
             }
         });

         $('#my-table').on('click', '.get-detail-peminjaman', function() {
             const id = $(this).data('id');
             $(".detail-peminjaman").load("<?= base_url('peminjaman/detail/'); ?>" + id);
         });

     });
 </script>

 </body>

 </html>