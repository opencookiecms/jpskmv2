

<?php
//Include database configuration file
include('../Connections/fecthmysql.php');

//Get all country data
$query = $db->query("SELECT * FROM users");

//Count total number of rows
$rowCount = $query->num_rows;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#pegawai').on('change',function(){
        var uFname = $(this).val();
        if(uFname){
            $.ajax({
                type:'POST',
                url:'../include/dropdata.php',
                data:'usersId='+uFname,
                success:function(html){
                    $('#ppp').html(html);

                }
            });
        }else{
            $('#ppp').html('<option value="">No Telefon Pegawai</option>');

        }
    });

    $('#ppp').on('change',function(){
        var uTel = $(this).val();
        if(uTel){
            $.ajax({
                type:'POST',
                url:'../include/dropdata.php',
                data:'usersTel='+uTel,
                success:function(html){
                    $('#city').html(html);
                }
            });
        }else{

        }
    });
});
</script>

<select name="country" id="pegawai">
    <option value="">Select nama pegawai</option>
    <?php
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['usersId'].'">'.$row['userFname'].'</option>';
        }
    }else{
        echo '<option value="">Nama Pengawai tiada tersenarai</option>';
    }
    ?>
</select>

<select name="state" id="ppp">
    <option value="">Sila Pilih No Telefon</option>

</select>
