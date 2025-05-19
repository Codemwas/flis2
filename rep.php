<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'db.php';

$mpdf = new \Mpdf\Mpdf();
ob_start(); // Start HTML buffering
?>

<h1>Farmers Logistics Report</h1>
<p>Date: <?php echo date("d M Y"); ?></p>
<hr>
<ul>
  <li>Total Farmers: 
    <?php
    $res = $conn->query("SELECT COUNT(*) AS total FROM farmers");
    echo $res->fetch_assoc()['total'];
    ?>
  </li>
  <li>Total Orders: 
    <?php
    $res = $conn->query("SELECT COUNT(*) AS total FROM orders");
    echo $res->fetch_assoc()['total'];
    ?>
  </li>
  <li>Delivered Orders: 
    <?php
    $res = $conn->query("SELECT COUNT(*) AS total FROM orders WHERE status='Delivered'");
    echo $res->fetch_assoc()['total'];
    ?>
  </li>
</ul>

<?php
$html = ob_get_clean();
$mpdf->WriteHTML($html);
$mpdf->Output('farmers-logistics-report.pdf', 'D'); // Force download
?>
