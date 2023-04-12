<?php
require_once 'lib/portfolio.php';
$res = deletePortfoliobyID($_GET['proid']);
header('LOCATION:allPortfolio.php');
?>