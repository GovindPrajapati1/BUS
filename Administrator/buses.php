<style>
    .panel{
        padding: 10px;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    .tr{
        width: 100%;
    }

    .sno{
        width: 5%;
    }

    .name{
        width: 25%;
    }

    .edit{
        width: 10%;
        border: 1.5px solid #ff0000;
        text-align: center;
    }

    .edit a{
        font-size: 16px;
        font-weight: 400;
    }

    .imgg{
        width: 20%;
    }

    .add_more{
        text-align: right;
        margin-top: 20px;
    }

    .add_more a{
        font-size: 18px;
        padding: 5px 20px;
        border: 1px solid #0099ff;
        background-color: #0099ff;
        color: #fff;
    }
</style>

<?php include'header.php'; ?>

        <div class="panel">
            
            <h2>Buses Details</h2>

            <table>
                <tr class="tr">
                    <th class="sno">S.no.</th>
                    <th class="name">Bus Name</th>
                    <th>Displacement</th>
                    <th>Max Power</th>
                    <th class="imgg">Image</th>
                    <th class="edit">Edit</th>
                    <th class="edit">Delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TATA</td>
                    <td>9191</td>
                    <td>250</td>
                    <td>img</td>
                    <th class="edit"><a href="#">Edit</a></th>
                    <th class="edit"><a href="#">Delete</a></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TATA</td>
                    <td>9191</td>
                    <td>250</td>
                    <td>img</td>
                    <th class="edit"><a href="#">Edit</a></th>
                    <th class="edit"><a href="#">Delete</a></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TATA</td>
                    <td>9191</td>
                    <td>250</td>
                    <td>img</td>
                    <th class="edit"><a href="#">Edit</a></th>
                    <th class="edit"> <a href="#">Delete</a></th>
                </tr>
            </table>
            <div class="add_more">
                <a href="add_buses.php">Add Buses +</a>
            </div>


        </div>
   

    
<?php include'footer.php'; ?>
    