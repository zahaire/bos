<!--Footer-->
<footer class="page-footer text-center font-small wow fadeIn">
	<!--Copyright-->
	<div class="footer-copyright py-3">
		© 2018 Copyright:
		<a href="#" target="_blank"> Better Online Survey </a>
	</div>
	<!--/.Copyright-->
</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<script src="<?=base_url('assets/mdb/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('assets/mdb/js/popper.min.js')?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
<script src="<?=base_url('assets/mdb/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/mdb/js/mdb.min.js')?>"></script>

<!-- Initializations -->
<script type="text/javascript">
	// Animations initialization
	const base_url = "<?= base_url(); ?>";
	new WOW().init();

</script>

<!-- Custom scripts for this User Type -->
<?php
	foreach ($userFooters as $userFooter)
	{
		print($userFooter);
	}
?>

<!-- Custom scripts for this View -->
<?php
	foreach ($customFooters as $customFooter)
	{
		print($customFooter);
	}
?>


</body>

</html>
