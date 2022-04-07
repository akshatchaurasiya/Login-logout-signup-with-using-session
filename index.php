<?php

session_start();
/*include "logincon.php";*/

if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en-in">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?php echo $_SESSION['name']; ?>
      </title>
      <link rel="icon" href="crud.png">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>

</head>

<body style="background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);">
   <div class="container mt-2">
      <div class="row">
         <div class="col-md-12 mt-1 mb-1">
            <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewUser" class="btn btn-success">Add Details</button><?php if($_SESSION["name"]){?><a class="btn btn-success" style="float: right;" href="logout.php" tite="Logout">Logout.</a><?php }?>
            </div>
            <h2 class="text-info" align="center" style="background-color: rgba(255, 250, 240, 0.3)">Users Details</h2>
         </div>
         <div class="col-md-12">
            <table id="example" class="display" style="width:100%">
               <thead>
                     <tr style="position: -webkit-sticky; position: sticky; top: 0; background-color: lightyellow;">
                        <th style="border-right: solid floralwhite 4px;">Id</th>
                        <th style="border-right: solid floralwhite 4px;">Name</th>
                        <th style="border-right: solid floralwhite 4px;">Contact</th>
                        <th style="border-right: solid floralwhite 4px;">Email</th>
                        <th style="border-right: solid floralwhite 4px;">Gender</th>
                        <th style="border-right: solid floralwhite 4px;">DoB</th>
                        <th style="border-right: solid floralwhite 4px;">Comment</th>
                        <th style="background-image: none;">Action</th>
                     </tr>
               </thead>
               <tbody>
                  <?php
                        include 'con.php';
                        $query="select * from users"; 
                        $result=mysqli_query($dbCon,$query);
                        ?>
                     <?php if ($result->num_rows > 0): ?>
                     <?php while($array=mysqli_fetch_row($result)): ?>
                     <tr>
                        <th><?php echo $array[0];?></th>
                        <td><?php echo $array[1];?></td>
                        <td><?php echo $array[2];?></td>
                        <td><?php echo $array[3];?></td>
                        <td><?php echo $array[4];?></td>
                        <td><?php echo $array[5];?></td>
                        <td style="width: 15%; word-break: break-all;"><?php echo $array[6];?></td>
                        <td> 
                           <a href="javascript:void(0)" class="btn btn-fff edit" data-id="<?php echo $array[0];?>"><img src="edit.png" width="35"></a>
                           <a href="javascript:void(0)" class="btn btn-fff delete" data-id="<?php echo $array[0];?>"><img src="delete.png" width="35"></a>
                        </td>
                     </tr>
                     <?php endwhile; ?>
                     <?php else: ?>
                     <tr>
                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                     </tr>
                     <?php endif; ?>
                     <?php mysqli_free_result($result); ?>
               </tbody>
            </table>


         </div>
      </div>
   </div>


   <!-- boostrap model start -->
   <div class="modal fade" id="user-model" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">

            <div class="modal-header">
               <h4 class="modal-title" id="userModel"></h4>
               <button onclick="window.location.reload()">X</button>
            </div>

            <div class="modal-body">
               <form action="javascript:void(0)" id="userInserUpdateForm" name="userInserUpdateForm" class="form-horizontal" method="POST">
                  <input type="hidden" name="id" id="id">
                  <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                           <input type="text" autofocus class="form-control" id="name" name="name" placeholder="Enter Name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32"value="" maxlength="50" required="">
                        </div>
                  </div>
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact" pattern="[6789][0-9]{9}"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" maxlength="10" required="">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" required="">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-12">
                           <select class="form-control" id="gender" name="gender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                           </select>
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">DoB</label>
                        <div class="col-sm-12">
                           <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Gender" value="" required="">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="comment" name="comment" placeholder="type your comment here..." value="">
                        </div>
                  </div>
                  <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="addNewUser">Save changes
                        </button>
                  </div>
               </form>
            </div>
            <div class="modal-footer"></div>
         </div>
      </div>
   </div>
   <!-- bootstrap model end -->




   <script type = "text/javascript" >
    $(document).ready(function($) {
        $('#addNewUser').click(function() {
            $('#userInserUpdateForm').trigger("reset");
            $('#userModel').html("Add New Details");
            $('#user-model').modal('show');
        });
        $('body').on('click', '.edit', function() {
            var id = $(this).data('id');
            // ajax
            $.ajax({
                type: "POST",
                url: "edit.php",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#userModel').html("Edit User");
                    $('#user-model').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#contact').val(res.contact);
                    $('#email').val(res.email);
                    $('#gender').val(res.gender);
                    $('#dob').val(res.dob);
                    $('#comment').val(res.comment);
                }
            });
        });
        $('body').on('click', '.delete', function() {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');
                // ajax
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#name').html(res.name);
                        $('#contact').html(res.contact);
                        $('#email').html(res.email);
                        $('#gender').html(res.gender);
                        $('#dob').html(res.dob);
                        $('#comment').html(res.comment);
                        window.location.reload();
                    }
                });
            }
        });
        $('#userInserUpdateForm').submit(function() {
            // ajax
            $.ajax({
                type: "POST",
                url: "insert-update.php",
                data: $(this).serialize(), // get all form field value in 
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                }
            });
        });
    });
 </script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>
</html>