



<style type="text/css">

    .panel input{
        padding: 7px 10px;
        font-size: 14px;
        color: #4d4d4d;
        border: 1px solid #ccc;
        margin-top: 5px;
        margin-bottom: 15px;
        width: 50%;
    }

    button{
        padding: 8px 25px;
        border: 1px solid #0099ff;
        background-color: #0099ff;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }

</style>


<?php include'header.php'; ?>

<?php    
    session_start();
    include('conn.php');
?>


        <div class="panel">
            
            <form action="addbuses.php" method="POST" enctype="multipart/form-data">
                <label>Bus Name</label><br>
                <input type='text' class="form-control" placeholder="Enter Bus Name" name='bname' required><br>

                <label>Bus Price</label><br>
                <input type='text' class="form-control" placeholder="Enter Bus Price" name='price' required><br>

                <label>Displacement</label><br>
                <input type='text' class="form-control" placeholder="Enter Bus Displacement" name='dis' required><br>

                <label>Max Power</label><br>
                <input type='text' class="form-control" placeholder="Enter Bus Power" name='pow' required><br>

                <label>Bus Images</label><br>
                <input type="file" name="image" class="form-control" required><br>

                <button type="submit" name="save">Submit</button>
            </form>


        </div>
   

    
<?php include'footer.php'; ?>
    