<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>เพิ่มข้อมูลตำแหน่งงาน <small>ระบบบริหารจัดการคลังสินค้า Bhuvarat Fishing Net.</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-users"></i> Position Add</li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <?php echo form_open('employees_manage/position_insert')?>
  <table width="85%" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="15%" height="50">ตำแหน่งงาน</td>
      <td width="35%"><input type="text" name="position_name" id="position_name" class="form-control" style="width:80%;" placeholder="กรอกข้อมูลตำแหน่งงาน" required="required" /></td>
      <td width="15%">รายละเอียด</td>
      <td width="35%" height="50"><input type="text" name="position_details" id="position_details" class="form-control" style="width:80%;" placeholder="กรอกข้อมูลรายละเอียด" required="required" /></td>
    </tr>
    <tr>
      <td width="15%" height="50">ระดับการใช้งาน</td>
      <td width="35%"><select name="position_status" id="position_status" class="form-control" style="width:80%;" required="required">
        <option value="">-- เลือกระดับการใช้งาน --</option>
        <option value="1">ระดับ LV 1</option>
        <option value="2">ระดับ LV 2</option>
        <option value="3">ระดับ LV 3</option>
      </select></td>
      <td width="15%">&nbsp;</td>
      <td width="35%" height="50">&nbsp;</td>
    </tr>
    <tr>
      <td height="100" colspan="4"><div align="center">
          <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล">
          <?php echo anchor('employees/position_list','<input type="button" class="btn btn-danger" value="ยกเลิก">')?>
        </div></td>
    </tr>
  </table>
  <?php echo form_close()?>
</div>
