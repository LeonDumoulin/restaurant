

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        الادارة
        <small>شركتى</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">شركتي</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ادارة بيانات شركتى</h3>
            </div>
            <form role="form" action="<?php base_url('company/update') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="company_name">اسم الشركة</label>
                  <input type="text" class="form-control" id="company_name" name="company_name" placeholder="ادخل اسم الشركة" value="<?php echo $company_data['company_name'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="service_charge_value">ضريبة الشحن (%)</label>
                  <input type="text" class="form-control" id="service_charge_value" name="service_charge_value" placeholder="ادخل ضريبة الشحن بالنسبة المئوية %" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="vat_charge_value">ضريبة القيمة المضافة (%)</label>
                  <input type="text" class="form-control" id="vat_charge_value" name="vat_charge_value" placeholder="ادخل ضريبة القيمة المضافة بالنسبة المئوية %" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="address">العنوان</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="ادخل العنوان" value="<?php echo $company_data['address'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="phone">رقم الهاتف</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="ادخل رقم الهاتف" value="<?php echo $company_data['phone'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="country">الدولة</label>
                  <input type="text" class="form-control" id="country" name="country" placeholder="ادخل الدولة" value="<?php echo $company_data['country'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Message</label>
                  <textarea class="form-control" id="message" name="message">
                     <?php echo $company_data['message'] ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="currency">العملة</label>
                  <?php ?>
                  <select class="form-control" id="currency" name="currency">
                    <option value="">~~SELECT~~</option>

                    <?php foreach ($currency_symbols as $k => $v): ?>
                      <option value="<?php echo trim($k); ?>" <?php if ($company_data['currency'] == $k) {
    echo "selected";
} ?>><?php echo $k ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">حفظ</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#companyMainNav").addClass('active');
    $("#message").wysihtml5();
  });
</script>

