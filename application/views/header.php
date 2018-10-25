<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>
		<?= $title ?>
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/mdb/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/mdb/css/mdb.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/mdb/css/style.min.css'); ?>" />

	<!-- Custom styles for this User Type -->
	<?php
        foreach ($userHeaders as $userHeader)
        {
            print($userHeader);
        }
    ?>

	<!-- Custom styles for this View -->
	<?php
        foreach ($customHeaders as $customHeader)
        {
            print($customHeader);
        }
    ?>
</head>

<body>
