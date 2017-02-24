<script>
function getfocus(){
	document.getElementById('warehouse_product').focus();
}
</script>
<body onLoad="getfocus()">
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>นำสินค้าเข้าในสต๊อก <small>ระบบบริหารจัดการคลังสินค้า Bhuvarat Fishing Net.</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-th"></i> Warehouse In</li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <?php echo form_open('warehouse_manage/warehouse_in')?>
  <table width="85%" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="15%" height="50">รหัสสินค้า</td>
      <td width="35%"><input type="text" name="warehouse_product" id="warehouse_product" class="form-control" autocomplete="off" style="width:80%;" placeholder="กรอกรหัสสินค้า" required /></td>
      <td width="15%">จำนวนนำเข้า</td>
      <td width="35%" height="50"><input type="text" name="warehouse_amount" id="warehouse_amount" class="form-control" style="width:35%; text-align:right;" placeholder="จำนวน" required /></td>
    </tr>
    <tr>
      <td height="100" colspan="4"><div align="center">
          <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล">
          <?php echo anchor('warehouse/warehouse_list','<input type="button" class="btn btn-danger" value="ยกเลิก">')?>
        </div></td>
    </tr>
  </table>
  <?php echo form_close()?>
</div>
</body>
