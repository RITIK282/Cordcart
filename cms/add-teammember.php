<?php require 'sideandnavbar.php'?>
<?php 
if(isset($_SESSION['userId'])){
if($_SESSION['userRole'] == 'tmember'){
    $getMember = getAllMembers();
?>

<main>

    <?php if(isset($_GET['memberid']) && $_GET['query']=='edit'){
        $memberid = $_GET['memberid'];
        $updatemdata = intUpdateMember($memberid);    
    ?>
    <title>Update Team / TParty Member</title>
        <div class="add-team-main-container">
        <h3>Update Team Member / Third-Party</h3>
    <form method="POST" action="../backend/cms/add-team-tparty-member.php">
        <?php include 'errors.php' ?>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" placeholder="Name" name="tm-name" value="<?php echo $updatemdata[1] ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" placeholder="Email" name="tm-email" value="<?php echo $updatemdata[2] ?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" type="number" placeholder="Phone Number" name="tm-ph" value="<?php echo $updatemdata[3] ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Password" name="tm-password">
        </div>
        <input type="hidden" name="tm-id" value="<?php echo $memberid; ?>">
        <button type="submit" class="btn btn-success" name="updateMember">Update</button>
    </form>
    </div>
    <?php }

    else{ 
        if(isset($_GET['memberid']) && $_GET['query']=='delete'){
            $memberid = $_GET['memberid'];
            intDeleteMember($memberid);
            header("Location: ./add-teammember.php?err=&success=delMem");
            exit();
        }
        ?>
        <div class="add-team-main-container">
        <title>Add Team / TParty Member</title>
            <h3>Add Team Member / Third-Party</h3>
            <form method="POST" action="../backend/cms/add-team-tparty-member.php">
            <?php include 'errors.php' ?>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" placeholder="Name" name="tm-name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Email" name="tm-email">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="number" placeholder="Phone Number" name="tm-ph">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="tm-password">
                </div>
                <div class="form-group">
                    <label>User Role</label>
                    <select name="tm-role" class="form-control">
                        <option value="">-- Select --</option>
                        <option value="tmember">Team Member</option>
                        <option value="tparty">Third Party</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" name="addMember">Add</button>
            </form>
        </div>
        <?php } ?>

    <div class="manage-team-main-container">
        <h4>Manage Members</h4>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($getMember as $singleMember){?>
            <tr>
                <th scope="row"><?php echo $singleMember[0]; ?></th>
                <td><?php echo $singleMember[1]; ?></td>
                <td><?php echo $singleMember[2]; ?></td>
                <td><?php echo $singleMember[3]; ?></td>
                <td><a href="add-teammember.php?query=edit&memberid=<?php echo $singleMember[0]; ?>"><i class="btn btn-primary fa fa-pencil" aria-hidden="true"></i></a></td>
                <td><a href="add-teammember.php?query=delete&memberid=<?php echo $singleMember[0]; ?>"><i class="btn btn-danger fa fa-trash"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
</main>

<?php } else{
    echo 'Unauthorized Access';
}
}
else{
    Header("location: ../login.html");
    exit();
}
require 'cmsfooter.php'?>