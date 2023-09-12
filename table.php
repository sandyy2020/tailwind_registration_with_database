




<?php
include('process.php');
$query= " SELECT * FROM harvin";
$result=mysqli_query($conn, $query);
?>

<table class="center" border="1" cellspacing="0" cellpadding="10" >
    <style>
     table{
        background: gray;
        margin:20%;
        margin-top: 10%;
        align-items: center;
        
       

    }
    *{
        background-image:url(https://images.unsplash.com/photo-1591057298652-c04b56d4d3ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2136&q=80);
            
    }
    /* p{
        
       padding: 80px;
    } */
   
    </style>


    <tr>

        <th>S.NO</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>GENDER</th>
    </tr>
    </div>
    <div class="m-7">
    
        <p>@CREATED BY SAGAR SHARMA </p>
        </div>
   


    <?php
    if($result->num_rows > 0){
        $sno=1;
        while($data=$result->fetch_assoc()){
    ?>
    <tr>
       

        <td>
            <?php echo $sno; ?>
        </td>
        <td>
            <?php echo  $data['first_name']; ?>
        </td>
        <td>
            <?php echo $data ['last_name'];?>
        </td>
        <td>
            <?php echo $data ['email'];  ?>
        </td>
        <td>
            <?php echo $data ['password']; ?>
        </td>
        <td>
            <?php echo $data ['gender'];?>
        </td>


    </tr>
    <?php
    $sno++;}}
    else{
    ?>
    <tr>
        <td colspan="8">Not data Found</td>
    </tr>
    <?php
    }
    ?>

</table>
