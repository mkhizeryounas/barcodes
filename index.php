<!-- http://localhost/shopdesk/barcode/index.php?barcode=maria-b-bd-1001-careem-&-lilac-default&name=Khizer+Younas&count=5&price=PKR250 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Print labels" />
<meta name="description" content="" />
<meta name="robots" content="index, follow" />
<link rel="stylesheet" type="text/css" media="screen, print" href="assets/css/barcode.css" />
<link rel="stylesheet" type="text/css" media="screen, print" href="assets/css/cont2x.css" />
</head>
<body id="barcodes">
<div id="container">

<div id="container">
    <div class="noprint" id="barcode-print-instructions">

        
        <h1>Print the following sheet</h1>
        <br />
        
            <input type="button" id="btn-print" value="Print" />

        </form>
    </div>
    <div id="barcode-list">
      <?php
        if(!isset($_GET['barcode']) || !isset($_GET['name']) || !isset($_GET['price']) || !isset($_GET['count'])) {
          die('<h1>Params missing</h1>');
        }
        $logo = $_GET['logo'];
        $text = $_GET['barcode'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $count = $_GET['count'];
        $pname = $_GET['pname'];

        for($i=0;$i<$count; $i++) {
      ?>        
        <!-- BARCODE DIV START -->
        <div class="barcode">
           <div class="inner">
          <div class="name"><div class="price"><small style="font-size: 7px;"><?php echo $pname; ?></small></div><b style="text-align: left !important;"><?php echo $logo; ?></b></div>
              <img src="../api/barcode.php?text=<?php echo $text; ?>"  />             
              <div class="name">
                 <div class="price"><?php echo $price; ?></div>
                 <?php echo $name; ?>
              </div>
           </div>
           <div class="clearer"></div>
        </div>
        <div class="page-break"></div>
        <!-- BARCODE DIV END -->
      <?php } ?>

    <div class="clearer"></div>
    </div>
</div>

</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn-print').click(function() {
            window.print();
        })
    })
</script>
</body>
</html>
