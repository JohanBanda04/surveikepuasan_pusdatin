
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/template/js/jquery-min.js"></script>
    <script src="assets/template/js/popper.min.js"></script>
    <script src="assets/template/js/bootstrap.min.js"></script>
    <script src="assets/template/js/owl.carousel.min.js"></script>
    <script src="assets/template/js/wow.js"></script>
    <script src="assets/template/js/jquery.nav.js"></script>
    <script src="assets/template/js/scrolling-nav.js"></script>
    <script src="assets/template/js/jquery.easing.min.js"></script>  
    <script src="assets/template/js/main.js"></script>
    <script src="assets/template/js/form-validator.min.js"></script>
    <script src="assets/template/js/contact-form-script.min.js"></script>
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <?php     
    if($status == 'berhasil')
    {
      ?>
        <script>
          swal({
            title: "Terima Kasih!",
            text: "Penilaian Anda telah berhasil disimpan.",
            icon: "success",
            button: "Tutup",
          }).then(function(){ 
            window.location = "index.php";
            }
          );
        </script>
      <?php 
        $status = "";
      }
    ?>
      
  </body>
</html>