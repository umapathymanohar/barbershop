 

      <footer>
         <p> &copy; <?php echo date('Y'); ?> Copyright <?php if(isset($site_name)) echo $site_name; ?>. All Rights Reserved. </p>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="/assets/js/vendor/ie10-viewport-bug-workaround.js"></script>
      <script src="/assets/js/vendor/jquery.easypiechart.js"></script>
      <script src="/assets/js/vendor/highcharts.js"></script>
      <script src="/assets/js/vendor/exporting.js"></script>
      <script src="/assets/js/vendor/bootstrap.min.js"></script>
      <script src="/assets/js/vendor/bootstrap-multiselect.js"></script>
      <script src="/assets/js/vendor/jquery.maskedinput.min.js"></script>
        <script src="/assets/js/vendor/fileinput.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
      <script src="/assets/js/script.js"></script>
      <script type="text/javascript">
          $.validate();
          $("#shop_image").fileinput();
         $("#phone").mask("(999) 999-9999");
         $("#zipcode").mask("999-9999");
      </script>
   </body>
</html>