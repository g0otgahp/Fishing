<script>
function getfocus(){
	document.getElementById('warehouse_product').focus();
}
</script>
<body onLoad="getfocus()">
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>นำสินค้าออกจากสต๊อก <small>ระบบบริหารจัดการคลังสินค้า Bhuvarat Fishing Net.</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-th"></i> Warehouse Out</li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <?php echo form_open('warehouse_manage/warehouse_out_temp')?>
  <table width="85%" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
			<td width="15%" height="50">ชื่อสินค้า</td>
			<td width="24%"><select name="warehouse_product" id="warehouse_product" class="form-control" style="width:80%;" required>
				<option value="">-- เลือกสินค้า --</option>
				<?php foreach($allproduct as $row){ ?>
				<option value="<?php echo $row['product_code']?>"><?php echo $row['product_name']?></option>
				<?php } ?>
			</select></td>
      <td width="15%">จำนวนจ่ายออก</td>
      <td width="35%" height="50"><input type="text" name="warehouse_amount" id="warehouse_amount" class="form-control" style="width:35%; text-align:right;" placeholder="จำนวน" required /></td>
    </tr>
    <tr>
      <td width="15%" height="50">ไปยัง</td>
      <td width="35%"><select name="warehouse_shop" id="warehouse_shop" class="form-control" style="width:80%;" required="required">
        <option value="">-- เลือกร้านค้า --</option>
        <?php foreach($shop as $shop){ ?>
        <option value="<?php echo $shop['shop_id']?>"><?php echo $shop['shop_details']?></option>
        <?php } ?>
      </select></td>
      <td width="15%">&nbsp;</td>
      <td height="35%">
          <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล">
      </td>
    </tr>
  </table>
  <?php echo form_close()?>
	<hr>
	<?php if (count($product)>0): ?>
	<h2 class="text-center">โปรดตรวจสอบสินค้าอีกครั้ง</h2>
	<div class="text-center"><?php echo anchor('warehouse/warehouse_out_insert','<input type="button" class="btn btn-success" value="ยืนยันรายการทั้งหมด">')?></div>
	<br>
	<table class="table table-bordered table-hover table-striped tablesorter">
		<thead>
			<tr>
				<th width="5%"><div align="center">ลำดับ</div></th>
				<th width="15%"><div align="center">รหัสสินค้า <i class="fa fa-sort"></i></div></th>
				<th width="15%"><div align="center">ประเภทสินค้า <i class="fa fa-sort"></i></div></th>
				<th width="25%"><div align="center">ชื่อสินค้า <i class="fa fa-sort"></i></div></th>
				<th width="25%"><div align="center">ร้านค้า<i class="fa fa-sort"></i></div></th>
				<th width="15%"><div align="center">จำนวนนำเข้า <i class="fa fa-sort"></i></div></th>
				<th width="5%"><div align="center">ยกเลิก <i class="fa fa-sort"></i></div></th>
			</tr>
		</thead>
		<tbody>
		<?php $confirm = array( 'onclick' => "return confirm('ต้องการลบข้อมูลหรือไม่?')");?>
			<?php $i = 1 ?>
		<?php foreach($product as $product){ ?>
			<tr>
				<td><div align="center"><?php echo $i ?></div></td>
				<td><?php echo $product['product_code']?></td>
				<td><?php echo $product['category_name']?></td>
				<td><?php echo $product['product_name']?></td>
				<td><?php echo $product['shop_details']." - ".$product['shop_zone']?></td>
				<td><div align="center">
				<?php echo number_format(@$product['warehouse_temp_amount']);?>
			<td><div class="align="center""><?php echo anchor('warehouse/warehouse_temp_out_remove/'.$product['warehouse_temp_id'],'<input type="button" class="btn btn-danger" value="ยกเลิก">')?></div></td>
				</div></td>
			</tr>
			<?php $i++ ?>
		<?php } ?>
		</tbody>
	</table>
<?php endif; ?>
</div>
</body>
