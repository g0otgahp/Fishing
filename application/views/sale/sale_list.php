<script>
function getfocus(){
  document.getElementById('barcode').focus();
}
</script>
<body onLoad="getfocus()">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1>การขาย <small>ระบบบริหารจัดการคลังสินค้า Bhuvarat Fishing Net.</small></h1>
        <ol class="breadcrumb">
          <li class="active"><i class="fa fa-sitemap"></i> Shop Open</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->
    <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td width="61%">
          <div align="center">
            <?php echo form_open('sale_manage/sale_list')?>
            <input type="text" name="barcode" id="barcode" class="form-control" required autocomplete="off" style="width:90%; text-align:center;" placeholder="---- บาร์โค้ดสินค้า ----" />
            <?php echo form_close()?>
          </div>
        </td>
      </tr>
      <?php echo form_open('sale_manage/sale_insert')?>
      <tr>
        <td>
          <div align="center"><h3>รายละเอียดลูกค้า</h3></div>
        </td>
      </tr>
      <tr>
        <td height="50">
          <div class="row" align="center">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="member_fullname" id="member_fullname" autocomplete="off" class="form-control" placeholder="---- ชื่อ - สกุล ----" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="member_phone" id="member_phone" autocomplete="off" class="form-control" placeholder="---- เบอร์โทรศัพท์ ----" />
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row" align="center">
            <div class="col-md-6">
              <div class="form-group">
                <textarea col="3" rows="3" name="member_address" id="member_address" class="form-control"  placeholder="---- ที่อยู่ ----" /></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea col="3" rows="3" name="member_note" id="member_note" class="form-control"  placeholder="---- หมายเหตุ ----" /></textarea>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div align=""><h4>รูปแบบชำระเงิน</h4></div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label>
              <input type="radio" name="sale_order_detail_pay_type"  value="1" checked/>
              เงินสด
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="sale_order_detail_pay_type"  value="2"/>
              เช็ค
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="sale_order_detail_pay_type"  value="3"/>
              เครดิต
            </label>
          </div>
        </td>
      </tr>
      <tr>
        <td><table width="100%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td height="40" colspan="5">&nbsp;&nbsp;&nbsp;<strong>รายการสินค้า ( Product List )</strong></td>
          </tr>
          <tr>
            <td width="9%" align="center">ลำดับ</td>
            <td width="50%" align="center">รายการสินค้า</td>
            <td width="19%" align="center">ราคาต่อหน่วย</td>
            <td width="9%" align="center">จำนวน</td>
            <td width="13%" height="40" align="center">ราคารวม</td>
          </tr>
          <?php for($i=0;$i<30;$i++){ ?>
            <?php $total[] = @$_SESSION['product'][$i]['product_sale']?>
            <?php if(@$_SESSION['product'][$i]['product_key']!=""){ ?>
              <tr>
                <td><div align="center"><?php echo ($i+1) ?></div></td>
                <td>&nbsp;<?php echo @$_SESSION['product'][$i]['product_code']?> <?php echo @$_SESSION['product'][$i]['product_name']?><input name="product_code[]" id="product_code[]" type="hidden" value="<?php echo @$_SESSION['product'][$i]['product_code']?>" /> <?php echo anchor('sale/sale_list_delete/'.@$_SESSION['product'][$i]['product_key'],'<i class="fa fa-trash-o"></i>')?></td>
                <td><div align="right"><?php echo @$_SESSION['product'][$i]['product_sale']?>.00&nbsp;</div></td>
                <td><div align="center">1</div></td>
                <td height="40"><div align="right"><?php echo @$_SESSION['product'][$i]['product_sale']?>.00&nbsp;</div></td>
              </tr>
              <?php } ?>
              <?php } ?>
              <tr>
                <td colspan="2" align="center"><strong>รวมทั้งหมด</strong></td>
                <td><div align="right"><?php echo @number_format(@array_sum(@$total))?>.00&nbsp;</div></td>
                <td><div align="center"><?php echo count(@$_SESSION['product'])?></div></td>
                <td height="40"><div align="right"><?php echo @number_format(@array_sum(@$total))?>.00&nbsp;</div></td>
              </tr>
            </table></td>
            <td valign="top"><div align="center">
              <h2 style="color:green;">รวมเงิน <?php echo @number_format(@array_sum(@$total))?>.00 บาท&nbsp;</h2>
              <input type="submit" value="ยืนยันการซื้อ" class="btn btn-success" style="width:90%; font-size:30px;">
              <p></p>
              <?php echo anchor('sale_manage/sale_clear/','<button type="button" class="btn btn-danger" style="width:90%;font-size:30px;">เริ่มต้นใหม่</button>')?> </div></td>
            </tr>
            <?php echo form_close()?>
          </table>
        </div>
      </body>
