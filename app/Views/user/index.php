<div class="row">
    <!--  table area -->
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-success" href="<?= base_url("user/add") ?>"> <i class="fa fa-plus"></i> Add User </a>   
                </div>
            </div> 


            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>User Role</th>
                            <th>Create Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($users as $user) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo esc($user->firstname); ?></td>
                                    <td><?php echo esc($user->lastname); ?></td>
                                    <td><?php echo esc($user->email); ?></td>
                                    <td><?php echo esc($user->mobile); ?></td>
                                    <td><?php echo esc($user->phone); ?></td>
                                    <td><?php echo esc($user->address); ?></td>
                                    <td>
                                        <?php 
                                            switch($user->gender) {
                                            case '1':
                                                {echo 'Male'; break;}
                                            case '2':
                                                {echo 'Female'; break;}
                                            case '3':
                                                {echo 'Other'; break;}
                                            default:
                                                {echo 'Not provided'; break;}
                                            }
                                        ?>
                                    </td>
                                    <td><?php
                                            switch($user->user_role) {
                                                case 1:
                                                    echo "Admin";
                                                    break;
                                                case 2:
                                                    echo "Doctor";
                                                    break;
                                                case 3:
                                                    echo "Accountant";
                                                    break;
                                                case 4:
                                                    echo "Cashier";
                                                    break;
                                                case 5:
                                                    echo "Pharmacist";
                                                    break;
                                                case 6:
                                                    echo "Laboratorist";
                                                    break;
                                                case 7:
                                                    echo "Receptionist";
                                                    break;
                                                default:
                                                    echo "Unknown";
                                                    break;
                                            }
                                        ?>
                                    </td>
                                    <td><?php 
                                    $date = new DateTime($user->updated_at);
                                    $strip = $date->format('Y-m-d');
                                    echo $strip;
                                ?></td>
                                    <td><?= ((esc($user->status)==1)?'Active':'Inactive'); ?></td>
                                    <td class="center" width="80">
                                        <a href="<?= base_url("user/view/".$user->id)?>" class="btn btn-xs btn-success" title="View User"><i class="fa fa-eye"></i></a> 
                                        <a href="<?= base_url("user/edit/".$user->id)?>" class="btn btn-xs btn-primary" title="Edit User"><i class="fa fa-edit"></i></a> 
                                        <a href="<?= site_url("user/delete/".$user->id)?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo 'Are you sure' ?>')" title="Delete User"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>