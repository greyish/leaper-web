<div id="page-wrapper" style="min-height: 344px;">
    <div class="row"><div class="col-lg-12"><h1 class="page-header"><?php echo $title;?></h1></div></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div style="display:<?php echo $alert_shown;?>" class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                                <?php echo validation_errors();echo (isset($error))?$error:"";?>
                            </div> 
                            <?php if($success!="") { ?>
                                <div class="alert alert-success">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                                    <?php echo $success;?>
                                </div>
                            <?php } ?>
                            <form role="form" name="frm_form" action="" method="post">
                                <div class="form-group">
                                    <label for="sel_type">Select Type</label>
                                    <select class="form-control" name="sel_type" id="sel_type">
                                        <option value="Personal">Personal</option>
                                        <option value="Casual">Casual</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Leave Quota</label>
                                    <input class="form-control" type="text" name="txt_quota" id="txt_quota">
                                    <p class="help-block">Enter the leave quota for the year</p>
                                </div>
                                <button class="btn btn-default" type="submit" name="btn_submit">Submit Button</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($result!="0") {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Leave Type</th>
                                        <th>Quota per Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $k=>$v) { 
                                        echo '<tr>
                                            <td>'.($k+1).'</td>
                                            <td>'.$v['name'].'</td>
                                            <td>'.$v['quota'].'</td>
                                        </tr>';
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>