<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
    ob_start();
    //untuk cetakkan laporan aduan mengikut daerah
    include(dirname(__FILE__).'../../pages/cetak/laporansemua.php');

    $content = ob_get_clean();

    // convert to PDF
    require_once(dirname(__FILE__).'../../html2pdf/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'en');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('laporan_projek.pdf');
    }

    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    //untuk cetakkan laporan aduan mengikut daerah
