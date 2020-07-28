<?php $__env->startSection('styles'); ?>
<style>
    body{
        font-family: 'Muli', sans-serif;
        margin:0;
        padding:0;
    }
    a{
        text-decoration:none;
    }
        #thecont{
        width:100%;
        height:auto;
        display:flex;
        align-items: flex-start;
        align-items: stretch;
        border-bottom:1px solid #ccc;
        background:#fff;
        }
        #contleft{
        width:60%;
        background:#fff;
        border-right:1px solid #ddd;
        padding-left:5%;
        padding-right:5%;
        padding-top:40px;
        padding-bottom:60px;
        }
        #contright{
        width:40%;
        background:#f1f1f1;
        padding-left:5%;
        padding-right:5%;
        padding-top:40px;
        padding-bottom:60px;
        }
        #itemhead{
        width:100%;
        height:60px;
        line-height: 60px;
        font-size:17px;
        font-weight:600;
        color:#888;
        }
        #itemhead2{
        width:100%;
        height:60px;
        line-height: 60px;
        font-size:17px;
        font-weight:600;
        color:#888;
        border-bottom:1px solid #ccc;
        }
        #item{
        width:100%;
        height:60px;
        line-height: 60px;
        font-size:15px;
        font-weight:400;
        color:#888;
        border-top:1px solid #eee;
        display:flex;
        align-items:center;
        justify-content: space-between;
        }
        #item2{
        width:100%;
        height:60px;
        line-height: 60px;
        font-size:15px;
        font-weight:400;
        color:#888;
        border-top:1px solid #ccc;
        display:flex;
        align-items:center;
        justify-content: space-between;
        }
        #itemleft{
        width:50%;
        color:#aaa;
        }
        #itemright{
        width:50%;
        text-align:right;
        font-weight:600;
        line-height: 20px;
        color:#888;
        }
        #itemleft2{
        width:50%;
        color:#444;
        font-weight:600;
        }
        #itemright2{
        width:50%;
        text-align:right;
        font-weight:600;
        line-height: 20px;
        color:#444;
        }
        #thespacer{
        width:100%;
        height:90px;
        }
        #imagearea{
        width:100%;
        height:auto;
        display:flex;
        align-items: flex-start;
        border-bottom:1px solid #eee;
        padding-top:50px;
        padding-bottom:50px;
        background:#fff;
        }
        #imageleft{
        width:50%;
        background:#fff;
        padding-left:5%;
        padding-right:5%;
        }
        #imageright{
        width:50%;
        background:#fefefe;
        padding-left:5%;
        padding-right:5%;
        text-align:right;
        margin-top:90px;
        }
        #imageright img{
        height:120px;
        }
        #backtoall{
        width:100px;
        height:40px;
        background:green;
        color:#fff;
        font-size:15px;
        line-height:40px;
        text-align:center;
        margin-bottom:50px;
        }
        a #backtoall{
        text-decoration:none;
        color:#fff;
        }
        a:hover #backtoall{
        background:#81983b;
        }
        .namefont{
        font-size:24px;
        color:#888
        }
        .contentfont{
        font-size:15px;
        font-weight:400;
        color:#888;
        line-height:23px;
        padding-top:15px;
        }
        #loanhead{
        width:100%;
        font-size:15px;
        font-weight:600;
        color:#555;
        padding-top:30px;
        }
        #loaninfo{
        width:100%;
        font-size:15px;
        color:#888;
        padding-top:5px;
        }
        #loanamount{
        width:100%;
        font-size:25px;
        font-weight:300;
        color:#79a220;
        }
        #approve{
        width:100px;
        height:40px;
        color:#fff;
        background:green;
        line-height: 40px;
        text-align:center;
        border:0px;
        font-family: 'Muli', sans-serif;
        cursor: pointer;
        font-size:15px;
        }
        #approve:hover{
        background:#79a220;
        }
        #deny{
        width:100px;
        height:40px;
        color:#fff;
        background:red;
        line-height:40px;
        text-align:center;
        border:0px;
        font-family: 'Muli', sans-serif;
        cursor: pointer;
        font-size:15px;
        }
        #deny:hover{
        background:#d70d0d;
        }
        #view{
        width:70px;
        height:30px;
        color:#fff;
        background:#000;
        line-height: 30px;
        text-align:center;
        border:0px;
        font-family: 'Muli', sans-serif;
        cursor: pointer;
        font-size:15px;
        margin-top:35px;
        }
        #view:hover{
        background:#444;
        }
        #item{
        width:100%;
        height:60px;
        line-height: 60px;
        font-size:15px;
        font-weigh:400;
        color:#888;
        border-top:1px solid #eee;
        display:flex;
        align-items:center;
        justify-content: space-between;
        }
        #historycont{
        width:100%;
        height:auto;
        font-size:15px;
        font-weigh:400;
        border-bottom:1px solid #ccc;
        display:flex;
        justify-content: space-between;
        padding-bottom:30px;
        }
        #historyitem{
        width:50%;
        color:#aaa;
        }
</style>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="imagearea">
  <div id="imageleft">
    <a href="<?php echo e(route('admin.customers.index')); ?>">
        <div id="backtoall">Back to All</div>
    </a>
    <div class="namefont"><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></div>
    <div class="contentfont">
      Bvn: <?php echo e($customer->bvn); ?><br>
      Mobile: <?php echo e($customer->mobile_no_1); ?><br>
      Email: <?php echo e($customer->email); ?><br>
    </div><!--contentfont-->
  </div><!--imageleft-->

  <div id="imageright">
    <?php if($customer->profile_image): ?>
        <a href="<?php echo e($customer->profile_image->getUrl()); ?>" target="_blank">
            <img src="<?php echo e($customer->profile_image->getUrl('thumb')); ?>"  alt="Profile Image">
        </a>
    <?php else: ?>
        <img src="<?php echo e(asset('img/profile/default.jpeg')); ?>" alt="Profile Image">
    <?php endif; ?>


  </div><!--imageright-->
</div><!--imagearea-->

<div id="thecont">
    <div id="contleft">
      <div id="itemhead">Contact Information</div><!--item-->
  
      <div id="item">
        <div id="itemleft">Gender</div>
        <div id="itemright"><?php echo e(App\Customer::GENDER_SELECT[$customer->gender] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">State of Residence</div>
        <div id="itemright"><?php echo e(App\Customer::STATE_OF_RESIDENCE_SELECT[$customer->state_of_residence] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Date of Birth</div>
        <div id="itemright"><?php echo e($customer->date_of_birth); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Alternative No</div>
        <div id="itemright"><?php echo e($customer->mobile_no_2); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Address</div>
        <div id="itemright"><?php echo e($customer->address); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Land Mark</div>
        <div id="itemright"><?php echo e($customer->land_mark); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">LGA of Residence</div>
        <div id="itemright"><?php echo e(App\Customer::LOCAL_GOVERNMENT_AREA_OF_RESIDENCE_SELECT[$customer->state_of_residence] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">State of Residence</div>
        <div id="itemright"><?php echo e(App\Customer::STATE_OF_RESIDENCE_SELECT[$customer->state_of_residence] ?? ''); ?></div>
      </div><!--item-->
  
  
      <div id="thespacer"></div>
      <div id="itemhead">Employment Details</div><!--item-->
  
      <div id="item">
        <div id="itemleft">Monthly Income</div>
        <div id="itemright"><?php echo e($customer->monthly_income); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Employment Sector</div>
        <div id="itemright"><?php echo e(App\Customer::EMPLOYMENT_SECTOR_SELECT[$customer->employment_sector] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Employer's Name</div>
        <div id="itemright"><?php echo e($customer->employers_name); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Company Address</div>
        <div id="itemright"><?php echo e($customer->employers_address); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Land Mark</div>
        <div id="itemright"><?php echo e($customer->employers_land_mark); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">LGA</div>
        <div id="itemright"><?php echo e(App\Customer::EMPLOYERS_LOCAL_GOVERNMENT_AREA_SELECT[$customer->employers_local_government_area] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">State</div>
        <div id="itemright"><?php echo e(App\Customer::EMPLOYERS_STATE_SELECT[$customer->employers_state] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="thespacer"></div>
      <div id="itemhead">Banking Details</div><!--item-->
  
      <div id="item">
        <div id="itemleft">Bank Name</div>
        <div id="itemright"><?php echo e(App\Customer::BANK_NAME_SELECT[$customer->bank_name] ?? ''); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Account Name</div>
        <div id="itemright"><?php echo e($customer->account_name); ?></div>
      </div><!--item-->
  
      <div id="item">
        <div id="itemleft">Account Number</div>
        <div id="itemright"><?php echo e($customer->account_no); ?></div>
      </div><!--item-->
  
    </div><!--contleft-->
  
  
  
  
    <div id="contright">
      <div id="itemhead2">Latest loan application</div><!--item-->
      <?php if($pending_loan): ?>
        <div id="loanhead">Loan Amount</div>
        <div id="loanamount">NGN <?php echo e($pending_loan->loan_amount); ?></div>
  
        <div id="loanhead">Request Date</div>
        <div id="loaninfo"><?php echo e($pending_loan->created_at); ?></div>
  
        <div id="loanhead">Loan Tenor</div>
        <div id="loaninfo"><?php echo e($pending_loan->loan_duration); ?> Month</div>
  
        <div id="loanhead">Interest</div>
        <div id="loaninfo">NGN <?php echo e($pending_loan->interest); ?></div>
  
        <div id="loanhead">Total Payback Amount</div>
        <div id="loaninfo">NGN <?php echo e($pending_loan->total); ?></div><p>
  
        <div id="item">
          <form action="<?php echo e(route('admin.loans.decline', $pending_loan->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
              <input type="hidden" name="_method" value="PATCH">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="hidden" name="status" value="Declined">
              <input type="hidden" name="id" value="<?php echo e($pending_loan->id); ?>">
              <input type="submit" id="deny" value="Decline">
          </form>
          <button id="approve" data-toggle="modal" data-target="#approveLoanModal">Approve</button>
        </div><!--item-->
      <?php else: ?>
          <p class="text-center">No pending loan</p>
      <?php endif; ?>
  
      <div id="thespacer"></div>
      <div id="itemhead"><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?>'s Documents</div><!--item-->
  
      <div id="item2">
        <div id="itemleft2"><?php echo e(trans('cruds.customerDocument.fields.document_type')); ?></div>
      </div><!--item-->
  
  
      <?php $__currentLoopData = $customer->customerCustomerDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customerDocument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="item2" data-entry-id="<?php echo e($customerDocument->id); ?>">
          <a href="<?php echo e(asset('doc/file.jpg')); ?>" target="_blank"><?php echo e(App\CustomerDocument::DOCUMENT_TYPE_SELECT[$customerDocument->document_type] ?? ''); ?></a>
        </div><!--item2-->
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  
      <div id="thespacer"></div>
      <div id="itemhead2">Loan History</div><!--itemhead2-->
  
        <?php $__currentLoopData = $customer->customerLoans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $sate_join = strtotime($loan->created_at);
                $date_applied = date('F d, Y', $sate_join);
            ?>
            <div id="historycont" data-entry-id="<?php echo e($loan->id); ?>">
              <div id="historyitem">
                <div id="loanhead">Loan Amount</div>
                <div id="loaninfo"><?php echo e($loan->loan_amount ?? ''); ?></div>
  
                <div id="loanhead">Application Date</div>
                <div id="loaninfo"><?php echo e($date_applied); ?></div>
              </div><!--historyitem-->
  
              <div id="historyitem">
                <div id="loanhead">Status</div>
                <div id="loaninfo"><?php echo e(App\Loan::STATUS_SELECT[$loan->status] ?? ''); ?></div>
  
                <div id="view">view</div>
              </div><!--historyitem-->
            </div><!--historycont-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
    </div><!--contright-->
</div><!--thecont-->
<div class="row">

    <!-- Approve Loan Modal -->
    <?php if($pending_loan): ?>
    <div class="modal fade" id="approveLoanModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveLoanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approveLoanModalLabel">Approve Loan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(route("admin.loans.update", [$pending_loan->id])); ?>" enctype="multipart/form-data" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');">
                    <div class="modal-body">
                        <?php echo method_field('PATCH'); ?>
                        <?php echo csrf_field(); ?>
    
                        <div class="form-group">
                            <label class="required" for="loan_amount"><?php echo e(trans('cruds.loan.fields.loan_amount')); ?></label>
                                <input class="slider <?php echo e($errors->has('loan_amount') ? 'is-invalid' : ''); ?>" type="range" name="loan_amount" value="<?php echo e(old('loan_amount', $pending_loan->loan_amount)); ?>" id="loan_amount" min="100000" max="2000000" step="10000">
                                
                            <?php if($errors->has('loan_amount')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('loan_amount')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.loan.fields.loan_amount_helper')); ?></span>
                        </div>
                        <p>Value: <span id="vamount"></span></p>
    
                        <div class="form-group">
                            <label class="required" for="loan_duration"><?php echo e(trans('cruds.loan.fields.loan_duration')); ?></label>
                            <input class="slider <?php echo e($errors->has('loan_duration') ? 'is-invalid' : ''); ?>" type="range" name="loan_duration" value="<?php echo e(old('loan_duration', $pending_loan->loan_duration)); ?>" id="loan_duration" min="1" max="9" step="1">
                            
                            <?php if($errors->has('loan_duration')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('loan_duration')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.loan.fields.loan_duration_helper')); ?></span>
                        </div>
                        <p>Value: <span id="vdays"></span></p>
    
                        <div class="form-group">
                            <label class="required" for="interest"><?php echo e(trans('cruds.loan.fields.interest')); ?></label>
                            <input class="form-control <?php echo e($errors->has('interest') ? 'is-invalid' : ''); ?>" type="number" name="interest" id="interest" value="<?php echo e(old('interest', $pending_loan->interest)); ?>" step="0.01" required readonly>
                            <?php if($errors->has('interest')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('interest')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.loan.fields.interest_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="total"><?php echo e(trans('cruds.loan.fields.total')); ?></label>
                            <input class="form-control <?php echo e($errors->has('total') ? 'is-invalid' : ''); ?>" type="number" name="total" id="total" value="<?php echo e(old('total', $pending_loan->total)); ?>" step="0.01" required readonly>
                            <?php if($errors->has('total')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('total')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.loan.fields.total_helper')); ?></span>
                        </div>
                        <input type="hidden" name="status" value="Approved">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-lg btn-success">Approve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <script>
        var amount = document.getElementById("loan_amount");
        var vamount = document.getElementById("vamount");
        var days = document.getElementById("loan_duration");
        var vdays = document.getElementById("vdays");
        // var dispLoan = document.getElementById("disp-Loan");
        var dispCharges = document.getElementById("interest");
        var dispTotal = document.getElementById("total");
    
        // dispLoan.innerHTML =
        vamount.innerHTML = numberWithCommas(amount.value);
    
        vdays.innerHTML = numberWithCommas(days.value);
        document.getElementById("interest").value = dispCharges.innerHTML  = 6000 *  parseInt(days.value);
        document.getElementById("total").value = dispTotal.innerHTML  = parseInt(amount.value) + (6000 * parseInt(days.value));
    
        amount.oninput = function() {
            vamount.innerHTML = this.value;
            calLoan();
        }
        days.oninput = function() {
            vdays.innerHTML = this.value;
            calLoan();
        }
    
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    
        function calLoan() {
            var intAmount = parseInt(amount.value);
            var intDays = parseInt(days.value);
            var intDay = 1;
    
            const interestrate = 72/100;
    
            interest = Math.abs(intAmount*(interestrate/12)*(Math.pow((1+interestrate/12),intDay))/(Math.pow((1+interestrate/12),intDay)-1));
            total = interest*intDay;
            if(intDays>1){
                diff=(total-intAmount)*(intDays-1);
            }else{
                diff=0;
            }
            total=diff+total;
            charges= total-intAmount;
    
            // dispLoan.innerHTML = numberWithCommas(intAmount.toFixed(0));
            dispCharges.innerHTML  = numberWithCommas(charges.toFixed(0));
            dispTotal.innerHTML  = numberWithCommas(total.toFixed(0));
            document.getElementById("interest").value = charges.toFixed(0);
            document.getElementById("total").value = total.toFixed(0);
        }
    
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mcviqlzs/efinance/resources/views/admin/customers/show2.blade.php ENDPATH**/ ?>