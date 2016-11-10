
    </body>

    <footer>

    </footer>
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/select2.min.js"></script>
    <?php if (!empty($this->js)): ?>
      <?php foreach ($this->js as $script): ?>
        <script type="text/javascript" src="view/<?= $script ?>"></script>
      <?php endforeach; ?>
    <?php endif; ?>
    <script type="text/javascript">
      $(".js-example-basic-multiple").select2();
    </script>
    <?php if (!empty(Session::exists('message'))): ?>
  		<script type="text/javascript">
  			alert("<?php echo Session::get('message')['message'] ?>");
  		</script>
  		<?php Session::delete('message') ?>
  	<?php endif; ?>
</html>
