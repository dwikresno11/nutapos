<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Simple Transactional Email</title>
  <style>
      /* -------------------------------------
          GLOBAL RESETS
          ------------------------------------- */
          img { 
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

            body {
              background-color: #f6f6f6;
              font-family: sans-serif;
              -webkit-font-smoothing: antialiased;
              font-size: 14px;
              line-height: 1.4;
              margin: 0;
              padding: 0;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%; }

              table {
                border-collapse: separate;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                width: 100%; }
                table td {
                  font-family: sans-serif;
                  font-size: 14px;
                  vertical-align: top; }

      /* -------------------------------------
          BODY & CONTAINER
          ------------------------------------- */

          .body {
            background-color: #f6f6f6;
            width: 100%; }

            /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
            .container {
              display: block;
              Margin: 0 auto !important;
              /* makes it centered */
              max-width: 650px;
              padding: 10px;
              width: 650px; }

              /* This should also be a block element, so that it will fill 100% of the .container */
              .content {
                box-sizing: border-box;
                display: block;
                Margin: 0 auto;
                max-width: 650px;
                padding: 10px; }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
          ------------------------------------- */
          .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%; }

            .wrapper {
              box-sizing: border-box;
              padding: 20px; }

              .content-block {
                padding-bottom: 10px;
                padding-top: 10px;
              }

              .footer {
                clear: both;
                Margin-top: 10px;
                text-align: center;
                width: 100%; }
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                  color: #999999;
                  font-size: 12px;
                  text-align: center; }

      /* -------------------------------------
          TYPOGRAPHY
          ------------------------------------- */
          h1,
          h2,
          h3,
          h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            Margin-bottom: 30px; }

            h1 {
              font-size: 35px;
              font-weight: 300;
              text-align: center;
              text-transform: capitalize; }

              p,
              ul,
              ol {
                font-family: sans-serif;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                Margin-bottom: 15px; }
                p li,
                ul li,
                ol li {
                  list-style-position: inside;
                  margin-left: 5px; }

                  a {
                    color: #3498db;
                    text-decoration: underline; }

      /* -------------------------------------
          BUTTONS
          ------------------------------------- */
          .btn {
            box-sizing: border-box;
            width: 100%; }
            .btn > tbody > tr > td {
              padding-bottom: 15px; }
              .btn table {
                width: auto; }
                .btn table td {
                  background-color: #ffffff;
                  border-radius: 5px;
                  text-align: center; }
                  .btn a {
                    background-color: #ffffff;
                    border: solid 1px #3498db;
                    border-radius: 5px;
                    box-sizing: border-box;
                    color: #3498db;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 14px;
                    font-weight: bold;
                    margin: 0;
                    padding: 12px 25px;
                    text-decoration: none;
                    text-transform: capitalize; }

                    .btn-primary table td {
                      background-color: #3498db; }

                      .btn-primary a {
                        background-color: #3498db;
                        border-color: #3498db;
                        color: #ffffff; }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
          ------------------------------------- */
          .last {
            margin-bottom: 0; }

            .first {
              margin-top: 0; }

              .align-center {
                text-align: center; }

                .align-right {
                  text-align: right; }

                  .align-left {
                    text-align: left; }

                    .clear {
                      clear: both; }

                      .mt0 {
                        margin-top: 0; }

                        .mb0 {
                          margin-bottom: 0; }

                          .preheader {
                            color: transparent;
                            display: none;
                            height: 0;
                            max-height: 0;
                            max-width: 0;
                            opacity: 0;
                            overflow: hidden;
                            mso-hide: all;
                            visibility: hidden;
                            width: 0; }

                            .powered-by a {
                              text-decoration: none; }

                              hr {
                                border: 0;
                                border-bottom: 1px solid #f6f6f6;
                                Margin: 20px 0; }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
          ------------------------------------- */
          @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important; }
              table[class=body] p,
              table[class=body] ul,
              table[class=body] ol,
              table[class=body] td,
              table[class=body] span,
              table[class=body] a {
                font-size: 16px !important; }
                table[class=body] .wrapper,
                table[class=body] .article {
                  padding: 10px !important; }
                  table[class=body] .content {
                    padding: 0 !important; }
                    table[class=body] .container {
                      padding: 0 !important;
                      width: 100% !important; }
                      table[class=body] .main {
                        border-left-width: 0 !important;
                        border-radius: 0 !important;
                        border-right-width: 0 !important; }
                        table[class=body] .btn table {
                          width: 100% !important; }
                          table[class=body] .btn a {
                            width: 100% !important; }
                            table[class=body] .img-responsive {
                              height: auto !important;
                              max-width: 100% !important;
                              width: auto !important; }}

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
          ------------------------------------- */
          @media all {
            .ExternalClass {
              width: 100%; }
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
              .ExternalClass font,
              .ExternalClass td,
              .ExternalClass div {
                line-height: 100%; }
                .apple-link a {
                  color: inherit !important;
                  font-family: inherit !important;
                  font-size: inherit !important;
                  font-weight: inherit !important;
                  line-height: inherit !important;
                  text-decoration: none !important; }
                  .btn-primary table td:hover {
                    background-color: #34495e !important; }
                    .btn-primary a:hover {
                      background-color: #34495e !important;
                      border-color: #34495e !important; } }

                    </style>
                  </head>
                  <body class="">
                    <table border="0" cellpadding="0" cellspacing="0" class="body">
                      <tr>
                        <td>&nbsp;</td>
                        <td class="container">
                          <div class="content">

                            <!-- START CENTERED WHITE CONTAINER -->
                            <!-- <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span> -->
                            <table cellpadding="0" cellspacing="0" border="0" width="88%" style="width: 88% !important; min-width: 88%; max-width: 88%;">
                              <tr>
                                <td align="center" valign="top">
                                  <a href=""
                                  style="display: block; max-width: 225px;">
                                  <img src="http://cdn-images.mailchimp.com/template_images/ux_reader/ux_reader_logo.png" alt="" width="225"
                                  border="0" style="display: block; width: 192px;" />
                                </a>
                                <!-- <div class="top_pad2" style="height: 48px; line-height: 48px; font-size: 46px;">&nbsp;</div> -->
                              </td>
                            </tr>
                          </table>
                          <table class="main" style="margin-top: 15px;">

                            <!-- START MAIN CONTENT AREA -->
                            <!-- <table cellpadding="0" cellspacing="0" border="0" width="88%" style="width: 88% !important; min-width: 88%; max-width: 88%;"> -->
                              <tr>
                                <td align="left" valign="top"> <font face="'Source Sans Pro', sans-serif" color="#1a1a1a" style="font-size: 52px; line-height: 54px; font-weight: 300; letter-spacing: -1.5px;">
                                  <span style="font-family:Arial;color:#808080;line-height:80%;font-size:20px;display:block;font-weight:bold;border-bottom-width:1px;border-bottom-color:#e8e8e8;border-bottom-style:solid;margin:0 0 20px;padding:0">Informasi Pemesanan</span>
                                </font>
                                <div style="height: 21px; line-height: 21px; font-size: 19px;">&nbsp;</div> 
                                <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">
                                  Hai,&nbsp; <!-- <?php echo $nama_pemesan ?> -->
                                </p>
                                <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">
                                 Hai, Kami telah menerima pemesanan lapangan.
                               </p>
                               
                               <table border="0" cellspacing="0" width="100%" style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">
                                <tr style="background-color:#043dbf;color:white; ">
                                  <th colspan="4" style="padding: 5px;"><h2 style="font-family:'Arial',sans-serif;color:#ffffff;line-height:1.5;font-size:14px;margin:0;padding:5px 0"> Transaksi # <!-- <?php echo $id ?>  --></h2></th>
                                </tr>
                                <tr>
                                  <td colspan="3" align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Atas Nama</span></td>
                                  <td align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0"><?php echo $nama ?></span></td>
                                </tr>
                                <tr>
                                  <td colspan="3" align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Tanggal</span></td>
                                  <td align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0"><?php echo date_format(date_create($tanggal),"d-m-Y") ?></span></td>
                                </tr>
                                <tr>
                                  <td colspan="3" align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Jam</span></td>
                                  <td align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px;"><span style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0"><?php echo $id_jadwal.".00 WIB" ?></span></td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="left" valign="top"  style="border-collapse:collapse;border-spacing:0;font-family:'Arial',sans-serif;color:#555;line-height:1.5;border-bottom-color:#cccccc;border-bottom-width:1px;border-bottom-style:solid;margin:0;padding:5px 10px">
                                    <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Silahkan melakukan transfer sejumlah <strong>Rp150.000</strong></p>
                                    <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">ke no. rekening: xxxx-xxxx-xxx</p>
                                    <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">atas nama : xxxxx</p>
                                    <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Maksimal pembayaran sampai dengan tanggal <strong > <?php echo date_format(date_create($tanggal),"d-m-Y") ?> </strong> pukul <strong><?php echo ($id_jadwal - 3).".00 WIB";?></strong></p>
                                    <p style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Setelah melakukan transfer, mohon melakukan konfirmasi pembayaran dengan klik tombol konfimasi bayar di bawah</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="center" valign="top">
                                    <div style="height: 30px; line-height: 30px; font-size: 28px;">&nbsp;</div>
                                    <table class="mob_btn" cellpadding="0" cellspacing="0" border="0"
                                    style="background: #6070E9; border-radius: 4px;">
                                    <tr align="center">
                                      <td align="center" valign="top">
                                        <a href="http://localhost/sewa_lapangan/order/konfirmasi?email=<?php echo $email ?>&nama=<?php echo $nama ?>"
                                          target="_blank" style="display: block; border: 1px solid #6070E9; border-radius: 4px; padding: 19px 27px; font-family: 'Source Sans Pro', Arial, Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 26px; line-height: 30px; text-decoration: none; white-space: nowrap; font-weight: 600;">
                                          <font face="'Source Sans Pro', sans-serif" color="#ffffff" style="font-size: 26px; line-height: 30px; text-decoration: none; white-space: nowrap; font-weight: 600;">
                                           <span style="font-family: 'Source Sans Pro', Arial, Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 26px; line-height: 30px; text-decoration: none; white-space: nowrap; font-weight: 600;">Konfirmasi bayar
                                           </span>
                                         </font>
                                       </a>
                                     </td>
                                   </tr>
                                 </table>
                               </td>
                             </tr>
                           </table>
                           <br>
                           <br>
                           <hr style="width: 100% !important; min-width: 100%; max-width: 100%; border-width: 1px; border-style: solid; border-color: #e8e8e8; border-bottom: none; border-left: none; border-right: none"s>
                         </td>
                       </tr>
                     </table>
                     <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; min-width:100%; max-width: 100%; border-width: 1px; border-style: solid; border-color: #e8e8e8; border-bottom: none; border-left: none; border-right: none;">
                      <tr>
                        <td align="left" valign="top">
                        </br>
                      </br>
                      <table border="0" cellspacing="0" style="font-family:'Arial',sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">
                        <tr style="background-color: #d3d8d8">
                          <td width="45px">
                            <img src="https://kanisiusmedia.co.id/signature1/complain.png">
                          </td>
                          <td style="text-align: justify">Segala bentuk informasi seperti <strong>nomor kontak, alamat e-mail, atau password</strong> anda bersifat rahasia. Jangan menginformasikan data-data tersebut kepada siapa pun, termasuk kepada pihak yang mengatasnamakan Kanisius</th>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>



                  <!-- START FOOTER -->

                  <!-- END FOOTER -->

                  <!-- END CENTERED WHITE CONTAINER -->
                </div>
              </td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </body>
        </html>
