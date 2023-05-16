<?php
require_once __DIR__ . '/composer/vendor/autoload.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $date = date("d/m/Y");
    $inv_no = mt_rand(1111,9999);


    $mpdf = new \Mpdf\Mpdf();
    $html= "<head>
                <title>Invoice</title>
                <link href='css/invoice_style.css' rel='stylesheet' type='text/css'>
            </head>
            <body>
                <div class='container'>
                    <header>
                        <h2>Simple Invoice</h2>
                        <h6>$date</h6>
                        <h6>Invoice#: INV-$inv_no</h6>
                    </header>
                    <div class='main'>
                        <h4>Bill to:</h4>
                        <small><b>Buyer Name</b></small>
                        <br>
                        <small>$name</small>
                    </div>
                    <h3>Products</h3>
                    <div class='content'>
                        <table id='product'>
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Quality</th>
                                    <th style='text-align:right'>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$product</td>
                                    <td>1</td>
                                    <td style='text-align:right'>₹ $price</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class='total'>
                            <small>Total</small><span>  <b>₹ $price</b></span>
                        </div>
                    </div>
                    <footer>
                        <p>If you have any questions about this invoice, Please contact</p>
                        <p>+91 9654796762</p>
                        <p>kdeepanshu99@gmail.com</p>
                    </footer>
                </div>
            </body>";
    $mpdf->WriteHTML($html);
    $mpdf->Output();

}

?>

